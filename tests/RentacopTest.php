<?php

namespace Rentacop;

/**
 * @author Stu Mason <stuart.a.mason@gmail.com>
 */
Class RentacopTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Rentacop
     */
    public function testCreatesInstanceOfRentacop()
    {
        $r = new Rentacop();

        $this->assertInstanceOf('Rentacop\Rentacop', $r);

    }

}