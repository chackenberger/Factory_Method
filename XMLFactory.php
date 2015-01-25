<?php

class XMLFactory extends ElementFactory{


    protected function createElement($type) {
        switch($type) {
            case "adapter": return new XMLAdapter();
            case "dsn": return new XMLDsn();
            case "user": return new XMLUser();
            case "password": return new XMLPassword();
        }
    }
}