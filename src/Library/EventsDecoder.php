<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Library;

use nitorInfoTechOss\SubstrateInterfacePackage\Exception\ValueErrorException;

class EventsDecoder
{
    $type_string = 'Vec<EventRecord<Event, Hash>>';

    public function __construct($this, $data, $metadata = 'None', **kwargs )
    {
        $this->apiHandler = $apiHandler;
    }

    def __init__(self, data, metadata=None, **kwargs):
        assert (not metadata or type(metadata) == MetadataDecoder)

        self.metadata = metadata
        self.elements = []

        super().__init__(data, metadata=metadata, **kwargs)

    def process(self):
        element_count = self.process_type('Compact<u32>').value

        for i in range(0, element_count):
            element = self.process_type('EventRecord', metadata=self.metadata)
            element.value['event_idx'] = i
            self.elements.append(element)

        return [e.value for e in self.elements]
}
