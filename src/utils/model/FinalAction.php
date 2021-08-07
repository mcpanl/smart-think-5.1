<?php


namespace Mcpanl\SmartThink51\utils\model;


use Mcpanl\SmartThink51\pojo\SmartError;
use Mcpanl\SmartThink51\pojo\SmartResult;

trait FinalAction
{

    public function getResult() {
        $smartResult = new SmartResult();


        try {

            $this->makeThink();

            // pagination
            if($this->modelQueryOption->get('pagination', false)) {
                // 开启分页
                $data = $this->paginate();
            }else{
                // 未开启分页
                $data = $this->selectOrFail();
            }

            $smartResult->setData($data);
        } catch (\Exception $e) {
            $smartError = new SmartError();

            $smartResult->setError($smartError);
        }

        return $smartResult;
    }


    /**
     * 生成适用于Thinkphp的一些数据
     */
    private function makeThink() {

        // think_where
        $this->makeThinkWhere();
        $this->where($this->modelQueryOption->get('think_where', []));

        // think_order
        $this->makeThinkOrder();
        $this->order($this->modelQueryOption->get('think_order', []));


    }


    /**
     * 生成适用于Thinkphp的Where条件数组
     */
    private function makeThinkWhere() {

        // 是否展示已被逻辑删除的数据
        if (!$this->modelQueryOption->get('show_delete_data') === true) {
            $this->addWhere([
                ['is_delete', '=', '0']
            ]);
        }

        // 组合自定义的where条件
        $this->addWhere($this->modelQueryOption->get('where', []));
    }

    /**
     * 生成适用于Thinkphp的Order排序规则数据
     */
    private function makeThinkOrder() {

        // 暂无需要自动追加的规则

    }


    /**
     * 追加where条件
     *
     * @param $where
     */
    private function addWhere($where) {
        $now_where = $this->modelQueryOption->get('think_where', []);

        array_push($now_where, $where);

        $this->modelQueryOption->set('think_where', $now_where);
    }


    /**
     * 追加order排序规则
     *
     * @param $order
     */
    private function addOrder($order) {
        $now_order = $this->modelQueryOption->get('think_order', []);

        array_push($now_order, $order);

        $this->modelQueryOption->set('think_order', $now_order);
    }
}