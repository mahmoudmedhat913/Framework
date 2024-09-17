<?php

namespace NSFWK;

abstract class base {
    protected $_data = [];
    protected $_payload = [];

    public function __get($name) {
        return $this->_data[$name];
    }

    public function __set($name, $value) {
        switch ($name) {
            case $name:
                $this->_data[$name] = $value;
                break;
        }
    }

    public function __construct($arrData = [], $arrPayload = []) {
        $this->_data = $arrData;
        $this->_payload = $arrPayload;
    }
}
