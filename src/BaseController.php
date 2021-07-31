<?php


namespace Mcpanl\SmartThink51;


use Mcpanl\SmartThink51\pojo\SmartResult;
use think\Controller;
use think\exception\HttpResponseException;
use think\Response;

class BaseController extends Controller
{
    /**
     * Controller层方法末尾
     *
     * @param SmartResult $smartResult
     */
    public function smartEnd(SmartResult $smartResult) {
        // 记录日志

        // 响应

        $data = $smartResult->getHttpResponse();

        $response = Response::create($data, 'json')->header([])->options(['jump_template' => $this->app['config']->get('dispatch_success_tmpl')]);

        throw new HttpResponseException($response);
    }
}