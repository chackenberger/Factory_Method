<?php
/**
 * Created by PhpStorm.
 * User: Christoph
 * Date: 25.01.15
 * Time: 11:50
 */

class YamlPassword implements Element {

    private $value;

    public function setValue($value) {
        $this->value = $value;
    }

    public function toString() {
        return "password: ".$this->value;
    }
}