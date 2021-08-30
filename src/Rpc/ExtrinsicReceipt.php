<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use Exception;
use nitorInfoTechOss\SubstrateInterfacePackage\Exception\ValueErrorException;
use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class ExtrinsicReceipt
{
    /* Object containing information of submitted extrinsic. Block hash where extrinsic is included is required
        when retrieving triggered events or determine if extrinsic was succesfull

        Parameters
        ----------
        substrate
        extrinsic_hash
        block_hash
        finalized
    */
    public function __construct(SubstrateInterface $apiHandler, string $extrinsic_hash, string $block_hash = NULL, $finalized = NULL)
    {
        $this->apiHandler = $apiHandler;

        $this->substrate = $apiHandler;
        $this->extrinsic_hash = $extrinsic_hash;
        $this->block_hash = $block_hash;
        $this->finalized = $finalized;

        $this->__extrinsic_idx = NULL;
        $this->__extrinsic = NULL;

        $this->__triggered_events = NULL;
        $this->__is_success = NULL;
        $this->__error_message = NULL;
        $this->__weight = NULL;
        $this->__total_fee_amount = NULL;
    }

    public function retrieve_extrinsic()
    {
        if (!$this->block_hash) {
            throw new ValueErrorException("ExtrinsicReceipt can't retrieve events because it's unknown which block_hash it is " .
                "included, manually set block_hash or use `wait_for_inclusion` when sending extrinsic");
        }
        # Determine extrinsic idx

        $block = $this->substrate->get_block($block_hash = $this->block_hash);

        $extrinsics = $block['extrinsics'];

        if (strlen($extrinsics) > 0) {
            $this->__extrinsic_idx = $this->__get_extrinsic_index(
                $block_extrinsics = $extrinsics,
                $extrinsic_hash = $this->extrinsic_hash
            );

            $this->__extrinsic = $extrinsics[$this->__extrinsic_idx];
        }
    }
    /*  @property 
   Retrieves the index of this extrinsic in containing block
        Returns
        -------
        int
   */
    public function extrinsic_idx()
    {

        if (!$this->__extrinsic_idx) {
            $this->retrieve_extrinsic();
        }
        return $this->__extrinsic_idx;
    }

    /* @property 
    Retrieves the `Extrinsic` subject of this receipt

        Returns
        -------
        Extrinsic
    */
    public function extrinsic()
    {
        if (!$this->__extrinsic) {
            $this->retrieve_extrinsic();
        }
        return $this->__extrinsic;
    }
    /*  @property
   Gets triggered events for submitted extrinsic. block_hash where extrinsic is included is required, manually
        set block_hash or use `wait_for_inclusion` when submitting extrinsic

        Returns
        -------
        list
   */
    public function triggered_events()
    {
        if (!$this->__triggered_events) {
            if (!$this->block_hash) {
                throw new ValueErrorException("ExtrinsicReceipt can't retrieve events because it's unknown which block_hash it is " .
                    "included, manually set block_hash or use `wait_for_inclusion` when sending extrinsic");
            }
            if (!$this->extrinsic_idx) {
                $this->retrieve_extrinsic();
            }
            $this->__triggered_events = [];

            $fetchEvent = $this->substrate->get_events($block_hash = $this->block_hash);
            foreach ($fetchEvent as $event) {
                if ($event->extrinsic_idx == $this->extrinsic_idx) {
                    array_push($this->__triggered_events, $event);
                }
            }
        }
        return $this->__triggered_events;
    }

    public function process_events()
    {
        if ($this->triggered_events) {

            $this->__total_fee_amount = 0;

            foreach ($this->triggered_events as $event) {
                # Check events
                if ($event->event_module->name == 'System' && $event->event->name == 'ExtrinsicSuccess') {
                    $this->__is_success = True;
                    $this->__error_message = NULL;

                    foreach ($event->params as $param) {
                        if ($param['type'] == 'DispatchInfo') {
                            $this->__weight = $param['value']['weight'];
                        } else if ($event->event_module->name == 'System' && $event->event->name == 'ExtrinsicFailed') {
                            $this->__is_success = False;
                        }
                    }

                    foreach ($event->params as $param) {
                        if ($param['type'] == 'DispatchError') {
                            if (in_array('Module', $param['value'])) {
                                $module_error = $this->substrate->metadata_decoder->get_module_error(
                                    $module_index = $param['value']['Module']['index'],
                                    $error_index = $param['value']['Module']['error']
                                );
                                $this->__error_message = [
                                    'type' => 'Module',
                                    'name' => $module_error->name,
                                    'docs' => $module_error->docs
                                ];
                            } else if (in_array('BadOrigin', $param['value'])) {
                                $this->__error_message = [
                                    'type' => 'System',
                                    'name' => 'BadOrigin',
                                    'docs' => 'Bad origin'
                                ];
                            } else if (in_array('CannotLookup', $param['value'])) {
                                $this->__error_message = [
                                    'type' => 'System',
                                    'name' => 'CannotLookup',
                                    'docs' => 'Cannot lookup'
                                ];
                            } else if (in_array('Other', $param['value'])) {
                                $this->__error_message = [
                                    'type' => 'System',
                                    'name' => 'Other',
                                    'docs' => 'Unspecified error occurred'
                                ];
                            }
                        }
                        if ($param['type'] == 'DispatchInfo') {
                            $this->__weight = $param['value']['weight'];
                        }
                    }
                } else if ($event->event_module->name == 'Treasury' && $event->event->name == 'Deposit') {
                    $this->__total_fee_amount += $event->params[0]['value'];
                } else if ($event->event_module->name == 'Balances' && $event->event->name == 'Deposit') {
                    $this->__total_fee_amount += $event->params[1]['value'];
                }
            }
        }
    }

    /* @property
    Returns `True` if `ExtrinsicSuccess` event is triggered, `False` in case of `ExtrinsicFailed`
        In case of False `error_message` will contain more details about the error


        Returns
        -------
        bool
    */
    public function is_success()
    {

        if (!$this->__is_success) {
            $this->process_events();
        }
        return $this->__is_success;
    }

    /*  @property 
   Returns the error message if the extrinsic failed in format e.g.:

        `{'type': 'System', 'name': 'BadOrigin', 'docs': 'Bad origin'}`

        Returns
        -------
        dict
   */
    public function error_message()
    {

        if (!$this->__error_message) {
            if ($this->is_success) {
                return NULL;
            }
            $this->process_events();
        }
        return $this->__error_message;
    }

    /* @property
    Contains the actual weight when executing this extrinsic

        Returns
        -------
        int
    */
    public function weight()
    {

        if (!$this->__weight) {
            $this->process_events();
        }
        return $this->__weight;
    }

    /* @property 
    Contains the total fee costs deducted when executing this extrinsic. This includes fee for the validator (
        (`Balances.Deposit` event) and the fee deposited for the treasury (`Treasury.Deposit` event)

        Returns
        -------
        int
    */
    public function total_fee_amount()
    {
        if (!$this->__total_fee_amount) {
            $this->process_events();
        }
        return $this->__total_fee_amount;
    }

    # Helper functions
    /* @staticmethod
    Returns the index of a provided extrinsic
    */
    public static function __get_extrinsic_index($block_extrinsics, string $extrinsic_hash)
    {
        foreach ($block_extrinsics as list($idx, $extrinsic)) {
            if ($extrinsic->extrinsic_hash == str_replace('0x', '', $extrinsic_hash)) {
                return $idx;
            }
        }
        throw new Exception('Extrinsic Not Found');
    }

    # Backwards compatibility methods
    public function __getitem__($apiHandler, $item)
    {
        // return getattr($apiHandler, $item);
    }
    public function __iter__()
    {
        foreach ($this->__dict__->items() as $item) {
            echo $item;
            continue;
        }
        return;
    }
    public function get($apiHandler, $name)
    {
        $this->name = $name;
        return $this->name;
    }
}
