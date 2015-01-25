<?php

class XMLPassword implements Element {

    private $value;

    public function setValue($value){
        $this->value = $value;
    }

    public function toString() {
        return "<password>".$this->value."</password>";
    }
}