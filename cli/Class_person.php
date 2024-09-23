<?php

class Person{
    private $firsName;
    private $lastName;
    private $personalCode;
    private $distanceTotal

    public function __construct($firsName, $lastName, $personalCode, $distanceTotal) {
        $this->firstName = $firsName;
        $this->lastName = $lastName;
        $this->personalCode = $personalCode;
        $this->distanceTotal = $distanceTotal;
    }

    function walk(){
        echo "is walking";
    }

    function walks($distance){
        t = $distanceTotal;
    }

}
?>