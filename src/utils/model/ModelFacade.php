<?php


namespace Mcpanl\SmartThink51\utils\model;


use Mcpanl\SmartThink51\pojo\ModelQueryOption;

trait ModelFacade
{



    public static function init() {
        $model = new static();

        $model->modelQueryOption = new ModelQueryOption();

        return $model;
    }
}