<?php

namespace TheTestCoder\PhpPackageStructure\Tests;

use neha0921\SubstrateInterfacePackage\ApiHandler;
use PHPUnit\Framework\TestCase;

class ApiHandlerTest extends TestCase
{
    /** @test */
    public function testSystemName()
    {

        $obj = new ApiHandler("http://127.0.0.1:8000");

        $expectedResultContainsPartial = 'Parity Polkadot';
        $actualResult = $obj->rpc->system->name();

        $this->assertContains($expectedResultContainsPartial, $actualResult);
    }
}
