<?php

class YamlUser implements Element{

    private $value;

    public function setValue($value) {
        $this->value = $value;
    }

    public function toString() {
        return "user: ".$this->value;
    }
}