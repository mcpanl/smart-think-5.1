<?php


namespace Mcpanl\SmartThink51;


use Mcpanl\SmartThink51\pojo\ModelQueryOption;
use Mcpanl\SmartThink51\utils\model\FinalAction;
use Mcpanl\SmartThink51\utils\model\ModelFacade;
use Mcpanl\SmartThink51\utils\model\QueryAction;
use Mcpanl\SmartThink51\utils\model\QueryLinkAction;
use think\Model;

class BaseModel extends Model
{
    use ModelFacade;
    use QueryAction;
    use QueryLinkAction;
    use FinalAction;

    /**
     * @var ModelQueryOption
     */
    protected $modelQueryOption;



}