<?php
namespace app\index\controller;
use think\Session;
class Index
{
    public function index()
    {
        $s = session();
        return 'name'.$s;
    }
}
