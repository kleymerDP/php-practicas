<?php

class Degree {

    private $degree;

    public function __construct(string $degree) {
        $this -> degree = $degree;
    }

    public function getDegree() : string {
        return $this -> degree;
    }

}