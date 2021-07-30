<?php


namespace Mcpanl\SmartThink51\pojo;


class ModelLimitOption
{
    private $offset;
    private $count;

    /**
     * ModelLimitOption constructor.
     * @param $count
     * @param $offset
     */
    public function __construct($count, $offset = 0)
    {
        $this->count = $count;
        $this->offset = $offset;
    }


    /**
     * @return mixed
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param mixed $offset
     */
    public function setOffset($offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count): void
    {
        $this->count = $count;
    }


}