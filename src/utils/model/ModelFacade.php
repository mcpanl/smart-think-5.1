<?php


namespace Mcpanl\SmartThink51\utils\model;


trait ModelFacade
{



    public static function init() {

        return new static();
    }
}