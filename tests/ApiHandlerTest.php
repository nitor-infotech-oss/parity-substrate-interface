<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Tests;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;
use nitorInfoTechOss\SubstrateInterfacePackage\Exception;
use PHPUnit\Framework\TestCase;

class ApiHandlerTest extends TestCase
{
    /** @test
     * return RPC Methods
     */
    public function testRpcMethods()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->rpc->methods());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return system chain
     */
    public function testSystemChain()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $expectedResultContainsPartial = 'Polkadot';
        $actualResult = json_decode($obj->rpc->system->chain());

        $this->assertContains($expectedResultContainsPartial, $actualResult->data);
    }

    /** @test 
     * return system chainType
     */
    public function testSystemChainType()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $expectedResultContainsPartial = 'Live';
        $actualResult = json_decode($obj->rpc->system->chainType());

        $this->assertContains($expectedResultContainsPartial, $actualResult->data);
    }

    /** @test 
     * return system health
     */
    public function testSystemHealth()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->system->health());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test
     * return system name
     */
    public function testSystemName()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $expectedResultContainsPartial = 'Parity Polkadot';
        $actualResult = json_decode($obj->rpc->system->name());

        $this->assertContains($expectedResultContainsPartial, $actualResult->data);
    }

    /** @test 
     * return system system_localListenAddresses
     */
    public function testSystemLocalListenAddresses()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->system->localListenAddresses());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return system system_localPeerId
     */
    public function testSystemLocalPeerId()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->system->localPeerId());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return system system_nodeRoles
     */
    public function testSystemNodeRoles()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->system->nodeRoles());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return system system_Peers
     */
    public function testSystemPeers()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->system->localPeerId());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return system system_properties
     */
    public function testSystemProperties()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->system->properties());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return system system_reservedPeers
     */
    public function testSystemReservedPeers()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->system->reservedPeers());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return system system_syncState
     */
    public function testSystemSyncState()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->system->syncState());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return system version
     */
    public function testSystemVersion()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $expectedResultContainsPartial = "0.9.8-3a10ee63c-x86_64-linux-gnu";

        $actualResult = json_decode($obj->rpc->system->version());

        $this->assertContains($expectedResultContainsPartial, $actualResult->data);
    }

    /** @test 
     * return state call
     */
    public function testStateCall()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->call());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state getMetadata
     */
    public function testStateGetMetadata()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->getMetadata());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state getRuntimeVersion
     */
    public function testStateGetRuntimeVersion()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->getRuntimeVersion());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state subscribeRuntimeVersion
     */
    public function testStateSubscribeRuntimeVersion()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->subscribeRuntimeVersion());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state subscribeStorage
     */
    public function testStateSubscribeStorage()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->subscribeStorage());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state unsubscribeRuntimeVersion
     */
    public function testStateUnsubscribeRuntimeVersion()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->unsubscribeRuntimeVersion());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state unsubscribeStorage
     */
    public function testStateUnsubscribeStorage()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->unsubscribeStorage());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state getStorage
     */
    public function testStateGetStorage()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->getStorage(["0x0b76934f4cc08dee01012d059e1b83ee5e0621c4869aa60c02be9adcc98a0d1d"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state getStorageHash
     */
    public function testStateGetStorageHash()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->getStorageHash(["0x0b76934f4cc08dee01012d059e1b83ee5e0621c4869aa60c02be9adcc98a0d1d"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state getStorageSize
     */
    public function testStateGetStorageSize()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->getStorageSize(["0x0b76934f4cc08dee01012d059e1b83ee5e0621c4869aa60c02be9adcc98a0d1d"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return state queryStorage
     */
    public function testStateQueryStorage()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->state->queryStorage([["0x0b76934f4cc08dee01012d059e1b83ee5e0621c4869aa60c02be9adcc98a0d1d"],"0x4b2308f6e2e6af1e93c6591333363bdf03cc0a94d7b6ad5e06a18d0892947d1e"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return subscribe_newHead
     */
    public function testSubscribeNewHead()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->rpc->subscribe_newHead());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return unsubscribe_newHead
     */
    public function testUnsubscribeNewHead()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->rpc->unsubscribe_newHead());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return author pendingExtrinsics
     */
    public function testAuthorPendingExtrinsics()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->author->pendingExtrinsics());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return author submitExtrinsic
     */
    public function testAuthorSubmitExtrinsic()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->author->submitExtrinsic(["0xc90584ffb488fc62af2a6c16aee233cba5142fee98640fb024e2209190e109976dab6e2b012a85046c9307b6338cfcefa58597f44381c84ffb49bffe98b822071b6b6ec45663c5487935ba8192ee633f2fcdc5bfe631dd2ef669d2282bbf89d7fe5650b00d15008800060520ffa8ca45025561ad23d3000cef010fb14901ba322283898e08c3d0a7fcdd03ce5affb4e8d0f6d2e5daacf08a3f85680f765161a876da2608ce9e1591064b2e7bfa48ff7c64af7dd02ce866c9167a24eefbd66cf957a7ee28c9cfb8b6d654f2df10de23ffac35e0115994ca0cc00059f2441466aede0fc2e212a3f54850254a08ff87de1fff0239b7eaacc3ea409786f0336a8976075623acef319fc5777c76033dd585b840ffb2dbc35ccf086294a0d24e1091d08ca3b5c2a487071c4fb54070e666cc99e02dff90ea97930be1db7ea6b5d19d84f7da70e24b93fa3305dcc4e821b5cbc7d6c460ff40ff81932c56be71a8207c8a99328d60a5a2b06fd40ed05ec4b2d66aebcaff68"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain getBlock
     */
    public function testChainGetBlock()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->getBlock());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain getBlockHash
     */
    public function testChainGetBlockHash()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->getBlockHash());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain getFinalisedHead
     */
    public function testChainGetFinalisedHead()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->getFinalisedHead());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain getFinalizedHead
     */
    public function testChainGetFinalizedHead()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->getFinalizedHead());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain getHead
     */
    public function testChainGetHead()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->getHead());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain getHeader
     */
    public function testChainGetHeader()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->getHeader());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain getRuntimeVersion
     */
    public function testChainGetRuntimeVersion()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->getRuntimeVersion());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain subscribeAllHeads
     */
    public function testChainSubscribeAllHeads()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->subscribeAllHeads());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain subscribeFinalisedHeads
     */
    public function testChainSubscribeFinalisedHeads()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->subscribeFinalisedHeads());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain subscribeFinalizedHeads
     */
    public function testChainSubscribeFinalizedHeads()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->subscribeFinalizedHeads());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain subscribeNewHead
     */
    public function testChainSubscribeNewHead()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->subscribeNewHead());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return chain subscribeNewHeads
     */
    public function testChainSubscribeNewHeads()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->chain->subscribeNewHeads());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return grandpa roundState
     */
    public function testGrandpaRoundState()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->grandpa->roundState());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return grandpa subscribeJustifications
     */
    public function testGrandpaSubscribeJustifications()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->grandpa->subscribeJustifications());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return keypair create
     */
    public function testKeypairCreate()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->keypair->create([12]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return keypair inspect
     */
    public function testKeypairInspect()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->keypair->inspect(["assault suit wave mouse drink zoo toward chuckle forum cattle vacuum pistol"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return keypair sign
     */
    public function testKeypairSign()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->keypair->sign(["hour help bracket shrimp magnet satoshi awkward ocean trip tooth bulb brave", "message payload here used"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return keypair verify
     */
    public function testKeypairVerify()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->keypair->verify(["12bfEBJa9vWyBh4LVpM19GB5Xvz9S6hQn7De6YqeMJKTVMfq", "message payload here used", "0xb8fbb9615c92a1f1481c86e5c33395d36418649e1712e6d7a108383af73ff81f08247455340a2b3e8894cf51f53fd302a51311cbc8fef667b785de7a8a09978c"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getMetadata
     */
    public function testRuntimeGetMetadata()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->runtime->getMetadata(["0xe171d029d3b922be07e4be3e373df23c538feaf5a0ca5a5856f6871ff847d605"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getMetadataModules
     */
    public function testRuntimeGetMetadataModules()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->runtime->getMetadataModules());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getMetadataCallFunctions
     */
    public function testRuntimeGetMetadataCallFunctions()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->runtime->getMetadataCallFunctions());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getMetadataStorageFunctions
     */
    public function testRuntimeGetMetadataStorageFunctions()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->runtime->getMetadataStorageFunctions());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getMetadataEvents
     */
    public function testRuntimeGetMetadataEvents()
    {
        $param = [521155];
        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->runtime->getMetadataEvents($param));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getMetadataEvent
     */
    public function testRuntimeGetMetadataEvent()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->runtime->getMetadataEvent());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getMetadataConstants
     */
    public function testRuntimeGetMetadataConstants()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->runtime->getMetadataConstants());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getTypeRegistry
     */
    public function testRuntimeGetTypeRegistry()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->runtime->getTypeRegistry());

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getType
     */
    public function testRuntimeGetType()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = json_decode($obj->rpc->runtime->getType(["Balance"]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime setCustomTypes
     */
    public function testRuntimeSetCustomTypes()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");
        $inputArray = ["ConsensusEngineId" => "h512",
        "BlockNumber" => "u64"];
        $actualResult = json_decode($obj->rpc->runtime->setCustomTypes([json_encode($inputArray)]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime addCustomType
     */
    public function testRuntimeAddCustomType()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");
        $actualResult = json_decode($obj->rpc->runtime->addCustomType([json_encode(["ConsensusEngineId","h512"])]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime removeCustomType
     */
    public function testRuntimeRemoveCustomType()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");
        $actualResult = json_decode($obj->rpc->runtime->removeCustomType([json_encode(["ConsensusEngineId"])]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getState
     */
    public function testRuntimeGetState()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");
        $actualResult = json_decode($obj->rpc->runtime->getState([json_encode(["System", "Events",[]])]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getMetadataErrors
     */
    public function testRuntimeGetMetadataErrors()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");
        $actualResult = json_decode($obj->rpc->runtime->getMetadataErrors([json_encode([521155])]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime getMetadataError
     */
    public function testRuntimeGetMetadataError()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");
        $actualResult = json_decode($obj->rpc->runtime->getMetadataError([json_encode(["Balances","LiquidityRestrictions",521155])]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime decodeScale
     */
    public function testRuntimeDecodeScale()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");
        $actualResult = json_decode($obj->rpc->runtime->decodeScale([json_encode(["BlockNumber","0x03000000"])]));

        $this->assertNotEmpty($actualResult->data);
    }

    /** @test 
     * return runtime encodeScale
     */
    public function testRuntimeEncodeScale()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");
        $actualResult = json_decode($obj->rpc->runtime->encodeScale([json_encode(["BlockNumber",3])]));

        $this->assertNotEmpty($actualResult->data);
    }


    /** @test 
     * return system version
     */
    public function testKeyring()
    {

        $testClass = new SubstrateInterface("http://127.0.0.1:8000");
        $responseData = json_decode($testClass->rpc->keypair->create([12]), true);

        $ss58_address = $responseData['data']['ss58_address'];
        $menemonic = $responseData['data']['mnemonic'];
        $message = "Test my Keypair";
        $FetchSign = json_decode($testClass->rpc->keypair->sign([$menemonic, $message]), true);

        $signature = $FetchSign['data']['signature'];

        $params = array($ss58_address, $message, $signature);

        $isVerify = json_decode($testClass->rpc->keypair->verify($params), true);


        $this->assertContains(TRUE, $isVerify);
    }
}
