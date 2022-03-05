<?php
require_once __DIR__ . '/../src/modulusValue.php';

class ModulusValueTest extends \PHPUnit\Framework\TestCase {

    public function testModulusValue() {

        $modulus = new modulusValue(10);
        $mod_result = $modulus->modulusNumber(2);
        $this->assertEquals(0, $mod_result);
    }

    public function testModulusValueWithException_1() {

        $this->expectException(InvalidArgumentException::class);
        $modulus = new modulusValue(2);
        $mod_result = $modulus->modulusNumber(15);
    }

    public function testModulusValueWithException_2() {

        $this->expectException(InvalidArgumentException::class);
        $modulus = new modulusValue(2);
        $mod_result = $modulus->modulusNumber('X');
    }

    public function testModulusVal_1() {

        $modulus = new modulusValue(20);
        $mod_result = $modulus->modulusNumber(15);
        $this->assertEquals(5, $mod_result);
    }

    public function testModulusVal_2() {

        $modulus = new modulusValue(48);
        $mod_result = $modulus->modulusNumber(8);
        $this->assertEquals(0, $mod_result);
    }

}