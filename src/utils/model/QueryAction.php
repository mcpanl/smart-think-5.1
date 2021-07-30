<?php


namespace Mcpanl\SmartThink51\utils\model;


use Mcpanl\SmartThink51\pojo\ModelLimitOption;
use Mcpanl\SmartThink51\pojo\ModelQueryOption;

trait QueryAction
{

    /**
     * 附加查询条件
     *
     * @param array $where
     * @return $this
     */
    public function withWhere($where = []) {
        $this->modelQueryOption->set('where', $where);

        return $this;
    }

    /**
     * 附加排序规则
     *
     * @param array $order
     * @return $this
     */
    public function withOrder($order = []) {
        $this->modelQueryOption->set('order', $order);

        return $this;
    }

    /**
     * 指定返回记录数
     *
     * @param int $rows 返回记录数
     * @param int $offset 偏移量
     * @return $this
     */
    public function withLimit($rows, $offset = 0) {
        $this->modelQueryOption->set('limit_rows', $rows);
        $this->modelQueryOption->set('limit_offset', $offset);

        return $this;
    }

    /**
     * 显示已被逻辑删除的数据
     *
     * @return $this
     */
    public function showDeleteData() {
        $this->modelQueryOption->set('show_delete_data', true);

        return $this;
    }


    /**
     * 开启分页功能
     *
     * @return $this
     */
    public function openPagination() {
        $this->modelQueryOption->set('pagination', true);

        return $this;
    }


}