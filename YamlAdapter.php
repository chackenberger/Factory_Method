<?php

class YamlAdapter implements Element {

    private $value;

    public function setValue($value) {
        $this->value = $value;
    }

    public function toString() {
        return "adapter: ".$this->value;
    }
}