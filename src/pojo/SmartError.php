<?php


namespace Mcpanl\SmartThink51\pojo;


class SmartError
{
    private $code;
    private $message;
    private $stackTrace;

    /**
     * SmartError constructor.
     * @param $code
     * @param $message
     * @param $stackTrace
     */
    public function __construct($code=500, $message='服务器发生了未知异常', $stackTrace=null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->stackTrace = $stackTrace;
    }


    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getStackTrace()
    {
        return $this->stackTrace;
    }

    /**
     * @param mixed $stackTrace
     */
    public function setStackTrace($stackTrace): void
    {
        $this->stackTrace = $stackTrace;
    }


}