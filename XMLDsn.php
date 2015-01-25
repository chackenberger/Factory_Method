<?php

class XMLDsn implements Element {

    private $value;

    public function setValue($value) {
        $this->value = $value;
    }

    public function toString() {
        return "<dsn>".$this->value."</dsn>";
    }
}