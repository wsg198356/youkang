<?php
namespace app\admin\controller;
class Sems extends Base
{
    /**
     * 发送短信
     */
    public function sms()
    {
        if (request()->isAjax()) {
            $param = input('param.');
            $mobile = $param['mobile'];
            $tplCode = $param['tplCode'];
            $tplParam['code'] = $param['tplCode'];
            $msgStatus=sendMsg
        }
    }
}