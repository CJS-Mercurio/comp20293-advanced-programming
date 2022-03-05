<?php

class employeeInfo {

    private $empName;
    private $empAge;
    private $empFavCoLor;

    public function setName($empName) {

        $this->empName = $empName;
    }

    public function setAge($empAge) {

        $this->empAge = $empAge;
    }

    public function setEmpFavColor($empFavCoLor) {

        $this->empFavCoLor = $empFavCoLor;
    }

    public function setEmployeeInput($empName,$empAge,$empFavCoLor) {

        $this->empName = $empName;
        $this->empAge = $empAge;
        $this->empFavCoLor = $empFavCoLor;

    }


    public function getName() {

        if(!ctype_alpha($this->empName)) {

            throw new \InvalidArgumentException('Input must be an Alphabet');
        }

        return $this->empName;
    }

    

    public function getAge() {

        if(!is_numeric($this->empAge)) {

            throw new \InvalidArgumentException('Input must be an Alphabet');
        }

        return $this->empAge;
    }
      
    public function getEmpFavColor() {

        if(!ctype_alpha($this->empFavCoLor)) {

            throw new \InvalidArgumentException('Input must be an Alphabet');
        }

        return $this->empFavCoLor;
    }

    public function getEmployeeInput() {
        
        return $this->empName;
        return $this->empAge;
        return $this->empFavCoLor;
    }

}