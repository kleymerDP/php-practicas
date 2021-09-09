<?php

class Profesor {

    private $strName;
    private $intAge;
    protected $strDegree;

    public function __construct(string $name, int $age, degree $degree) {
        $this -> strName = $name;
        $this -> intAge = $age;
        $this -> strDegree = $degree;
    }

    public function getInfo() : string {
        $infoProfessor = "
        Name   : {$this -> strName}<br>
        Age    : {$this -> intAge}<br>
        Degree : {$this -> strDegree -> getDegree()}<br>
        ";
        return $infoProfessor;
    }

    public function getName() : string {
        return $this -> strName;
    }

    public function getAge() : int {
        return $this -> intAge;
    }

}