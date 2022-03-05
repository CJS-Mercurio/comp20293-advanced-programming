<?php
require_once __DIR__ . '/../src/employeeInfo.php';

class EmployeeInfoTest extends \PHPUnit\Framework\TestCase {

    public function testGetName() {
        $empInfo = new employeeInfo();
        $empInfo->setName('Mercurio');
        $this->assertEquals($empInfo->getName(), 'Mercurio');
    }

    public function testGetAge() {
        $empInfo = new employeeInfo();
        $empInfo->setAge(20);
        $this->assertEquals($empInfo->getAge(), 20);
    }

    public function testFavColor() {
        $empInfo = new employeeInfo();
        $empInfo->setEmpFavColor('Maroon');
        $this->assertEquals($empInfo->getEmpFavColor(), 'Maroon');
    }

    public function testGetNameCheckString() {
        $empInfo = new employeeInfo();
        $empInfo->setName('Mercurio');
        $this->assertIsString($empInfo->getName(), 'Mercurio');
    }

    public function testGetAgeCheckInt() {
        $empInfo = new employeeInfo();
        $empInfo->setAge(20);
        $this->assertIsInt($empInfo->getAge(), 20);
    }

    public function testGetAgeCheckNumeric() {
        $empInfo = new employeeInfo();
        $empInfo->setAge(20);
        $this->assertIsNumeric($empInfo->getAge(), 20);
    }
    
    public function testFavColorCheckString() {
        $empInfo = new employeeInfo();
        $empInfo->setEmpFavColor('Maroon');
        $this->assertIsString($empInfo->getEmpFavColor(), 'Maroon');
    }

    public function testEmployeeInput() {
        $empInfo = new employeeInfo();
        $empInfo->setEmployeeInput('Mercurio', 23, 'Maroon');
        $this->assertEquals($empInfo->getEmployeeInput(), 'Mercurio', 23, 'Maroon');
    }

}