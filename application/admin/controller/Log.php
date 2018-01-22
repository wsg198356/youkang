<?php
namespace app\admin\controller;
use com\IpLocation;
use think\Db;

class Log extends Base
{
    /**
     * 操作日志
     */
    public function oprate_log()
    {
        $key = input('key');
        $map = [];
        if ($key && $key !== '') {
            $map['admin_id'] = $key;
        }
        $arr = Db::name('admin')->column('id,username');
        $Nowpage = input('get.page') ? input('get.page') : 1;
        $limits = config('list_rows');
        $count = Db::name('log')->where($map)->count();
        $allpage = intval(ceil($count / $limits));
        $lists = Db::name('log')->where($map)->page($Nowpage, $limits)->order('add_time desc')->select();
        $Ip = new IpLocation("UTFWry.dat");
    }
}