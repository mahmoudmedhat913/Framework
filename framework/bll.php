<?php

namespace NSFWK;

abstract class bll {
    protected $_data = [];

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

    abstract protected function _load($objDAL);
    abstract protected function _save($objDAL);
    abstract protected function _delete($objDAL);

    public function Save () {
        
    }

    public function Delete () {
        
    }

    public function Load ($objFilter) {
        
    }
}
