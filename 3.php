<?php

class Vector {

    private $vect;

    function __construct($v) {
        $this->vect = $v;
    }

    public function add($x) {
        foreach ($this->vect as &$coord) {
            $coord += $x;
        }
    }

    public function multi($x) {
        foreach ($this->vect as &$coord) {
            $coord *= $x;
        }
    }

    public function toArray() {
        return $this->vect;
    }
}

$v = new Vector([1, 14, 52]);

$v->add(42);
echo '<p>';
echo implode(', ', $v->toArray()),"\n"; // 43, 56, 94


$v->multi(-1.2);
echo '<p>';
echo implode(', ', $v->toArray()),"\n"; // -51.6, -67.2, -112.8
