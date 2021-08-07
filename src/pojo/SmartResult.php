<?php


namespace Mcpanl\SmartThink51\pojo;


class SmartResult
{
    // 数据
    protected $data;

    /**
     * @var SmartError
     */
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
     * 获取Http响应格式数据
     */
    public function getHttpResponse() {
        if(is_null($this->error)) {
            return [
                'code' => 0,
                'msg' => '操作成功',
                'data' => $this->data
            ];
        }else{
            return [
                'code' => 500,
                'msg' => '服务器命令执行异常，请稍后重试！',
                'data' => $this->error->getStackTrace()->getMessage()
            ];
        }
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