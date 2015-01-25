<?php

class YamlFactory extends ElementFactory {

    protected function createElement($type) {
        switch($type) {
            case "adapter": return new YamlAdapter();
            case "dsn": return new YamlDsn();
            case "user": return new YamlUser();
            case "password": return new YamlPassword();
        }
    }
}