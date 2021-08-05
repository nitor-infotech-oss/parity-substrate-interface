<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Tests;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;
use PHPUnit\Framework\TestCase;

class SubstrateInterfaceTest extends TestCase
{
    /** @test */
    public function testSystemName()
    {

        $obj = new SubstrateInterface("http://127.0.0.1:8000");

        $expectedResultContainsPartial = 'Parity Polkadot';
        $actualResult = $obj->rpc->system->name();

        $this->assertContains($expectedResultContainsPartial, $actualResult);
    }
}
