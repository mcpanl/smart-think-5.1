<?php


namespace Mcpanl\SmartThink51\pojo;


class SmartResult
{
    // 数据
    protected $data;

    // 错误信息
    protected $error;

    /**
     * 设置原始数据
     * @param $data
     */
    public function setData($data) {
        $this->data = $data;
    }

    /**
     * 获取原始数据
     */
    public function getData() {
        return $this->data;
    }

    /**
     * 设置错误信息
     * @param SmartError $smartError
     */
    public function setError(SmartError $smartError) {
        $this->error = $smartError;
    }

    /**
     * 获取转为JSON字符串后的数据
     */
    public function toJson() {

    }

    /**
     * 获取转为数组后的数据
     */
    public function toList() {

    }
}