<?php

class ResearcheProfesor extends Profesor {

    private $topic;
    private $salary;

    public function __construct(string $name, int $age, degree $degree, string $topic, float $salary) {

        parent :: __construct($name, $age, $degree);

        $this -> topic = $topic;
        $this -> salary = $salary;

    }

    public function setDegree(degree $degree) : void {
        $this -> degree = $degree;
    }

    public function setSalary(float $salary) : void {
        $this -> salary = $salary;
    }

    public function getAllInfo() : string {
        return "{$this -> getInfo()}, Topic: {$this -> topic}, Salary: {$this -> salary}";
    }

}