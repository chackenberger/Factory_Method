<?php
/**
 * Created by PhpStorm.
 * User: Christoph
 * Date: 25.01.15
 * Time: 11:27
 */

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