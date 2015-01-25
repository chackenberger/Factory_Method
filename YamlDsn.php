<?php
/**
 * Created by PhpStorm.
 * User: Christoph
 * Date: 25.01.15
 * Time: 11:49
 */

class YamlDsn implements Element {

    private $value;

    public function setValue($value) {
        $this->value = $value;
    }

    public function toString() {
        return "dsn: ".$this->value;
    }
}