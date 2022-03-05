<?php

class modulusValue {
    
    private $modulus_num;
    
    public function __construct($modulus_num) {

        $this->modulus_num = $modulus_num;
    }

    public function modulusNumber($divisor) {

        if($divisor > $this->modulus_num) {

            throw new \InvalidArgumentException("Divisor should not be greater than dividend!");
        }

        else if(!is_numeric($divisor)) {

            throw new \InvalidArgumentException("Divisor is not a number!");
        }

        return $this->modulus_num % $divisor;
    }
}