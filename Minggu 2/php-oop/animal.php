<?php

class Animal
{
    public $name = ""; // "shaun"
    public $legs = "2"; // 2
    public $cold_blooded = "false"; // false

    public function __construct($name) {
        $this->name = $name;
    }
}
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>