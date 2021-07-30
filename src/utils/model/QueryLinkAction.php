<?php


namespace Mcpanl\SmartThink51\utils\model;


use Mcpanl\SmartThink51\pojo\ModelQueryLinkOption;

trait QueryLinkAction
{
    /**
     * @var ModelQueryLinkOption
     */
    private $modelQueryLinkOption;


    /**
     * 关闭自动关联查询并手动指定需要关联的字段
     *
     * @param string|array $field 字段名或字段列表
     * @return $this
     */
    public function withLink($field) {
        $this->modelQueryLinkOption->closeAutoLink();

        if(is_array($field)) {
            // 遍历关联数组
            foreach ($field as $value) {
                if(is_string($value)) {
                    // 处理简单的字段名
                    $this->modelQueryLinkOption->linkByField($value);
                }else{
                    // 处理较复杂的关联关系

                    // 完善中...
                }
            }
        }else{
            // 处理简单的字段名
            $this->modelQueryLinkOption->linkByField($field);
        }

        return $this;
    }

    /**
     * 在自动关联查询的基础上手动删除不需要关联的字段
     *
     * @param string|array $field 字段名或字段列表
     * @return $this
     */
    public function removeLink($field) {
        if(is_array($field)) {
            foreach ($field as $value) {
                $this->modelQueryLinkOption->addUnLinkField($value);
            }
        }else{
            $this->modelQueryLinkOption->addUnLinkField($field);
        }

        return $this;
    }
}