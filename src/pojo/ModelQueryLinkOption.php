<?php


namespace Mcpanl\SmartThink51\pojo;


class ModelQueryLinkOption
{
    private $autoLink = true;

    private $unLinkField = [];

    private $linkTable;

    public function closeAutoLink() {
        $this->autoLink = false;
    }

    public function addUnLinkField($field) {
        array_push($this->unLinkField, $field);
    }

    public function setUnLinkField($field) {
        $this->unLinkField = $field;
    }

    /**
     * 手动关联表
     *
     * @param $selfField
     * @param $otherModelName
     * @param $otherField
     */
    public function newLink($selfField, $otherModelName, $otherField) {

    }

    /**
     * 根据字段名自动关联
     *
     * @param $field
     */
    public function linkByField($field) {

    }
}