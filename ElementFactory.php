<?php

abstract class ElementFactory {

    public function getElement($type,$value) {
        $element = $this->createElement($type);
        $element->setValue($value);
        return $element;
    }

    abstract protected function createElement($type);
} 