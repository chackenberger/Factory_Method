<?php
/**
 * Created by PhpStorm.
 * User: Christoph
 * Date: 03.12.14
 * Time: 21:06
 */

abstract class ElementFactory {

    public function getElement($type,$value) {
        $element = $this->createElement($type);
        $element->setValue($value);
        return $element;
    }

    abstract protected function createElement($type);
} 