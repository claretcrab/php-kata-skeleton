<?php

namespace Kata\Tests;

use Kata\StringCalculator;

/**
 * Class StringCalculatorTest
 * @package Kata\Tests
 */
class StringCalculatorTest extends \PHPUnit_Framework_TestCase{
    public function testAdd() {
        $sc = new StringCalculator;
        $zero = $sc->add('');
        $this->assertEquals(0, $zero);

        $result = $sc->add('465');
        $this->assertEquals(465, $result);

        $result = $sc->add('465,4');
        $this->assertEquals(469, $result);

        $result = $sc->add('465,4,1');
        $this->assertEquals(470, $result);
    }

    public function testAddSeparator() {
        $sc = new StringCalculator;
        $result = $sc->add('1,2,3');
        $this->assertEquals(6, $result);

        $result = $sc->add('1\n2,3');
        $this->assertEquals(6, $result);

        $result = $sc->add('1\n2\n3,4\n5');
        $this->assertEquals(15, $result);

        $result = $sc->add('//;\n1;2;3;4');
        $this->assertEquals(10, $result);

        $result = $sc->add('//k\n1k2,3\n4k66');
        $this->assertEquals(76, $result);
    }
}