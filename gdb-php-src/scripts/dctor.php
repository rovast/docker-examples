<?php

class Demo {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function __destruct() {
        echo "dctor from " . $this->name . " \n";
    }
}

$a = new Demo("a");

$b = new Demo("b");
unset($b);

$c = new Demo("c");
$c = null;
