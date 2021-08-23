<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Tests;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;
use nitorInfoTechOss\SubstrateInterfacePackage\Exception;
use PHPUnit\Framework\TestCase;

class SubstrateInterfaceTest extends TestCase
{
    /** @test
     * return system name
     */
    public function testSystemName()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $expectedResultContainsPartial = 'Parity Polkadot';
        $actualResult = $obj->rpc->system->name();

        $this->assertContains($expectedResultContainsPartial, $actualResult);
    }

    /** @test 
     * return system chain
     */
    public function testSystemChain()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $expectedResultContainsPartial = 'Polkadot';
        $actualResult = $obj->rpc->system->chain();

        $this->assertContains($expectedResultContainsPartial, $actualResult);
    }

    /** @test 
     * return system chainType
     */
    public function testSystemChainType()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $expectedResultContainsPartial = 'Live';
        $actualResult = $obj->rpc->system->chainType();

        $this->assertContains($expectedResultContainsPartial, $actualResult);
    }

    /** @test 
     * return system health
     */
    public function testSystemHealth()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $actualResult = $obj->rpc->system->health();

        $this->assertNotEmpty($actualResult);
    }

    /** @test 
     * return system version
     */
    public function testSystemVersion()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $expectedResultContainsPartial = "0.9.8-3a10ee63c-x86_64-linux-gnu";

        $actualResult = $obj->rpc->system->version();

        $this->assertContains($expectedResultContainsPartial, $actualResult);
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
