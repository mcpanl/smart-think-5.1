<?php


namespace Mcpanl\SmartThink51\pojo;


class ModelQueryOption
{

    private $options = [];

    public function set($key, $value) {
        $this->options->$key = $value;
    }

    public function get($key, $default = null) {
        if(!isset($this->options->$key)) {
            return $default;
        }

        return $this->options->$key;
    }
}