<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/18 0018
 * Time: 17:55
 */
namespace app\admin\controller;
use think\Config;
use think\ENV;

class Index
{
    public function index()
    {
        //dump($_ENV['id']);//此方法不行
        //dump(Env::get('status','prod'));
        //dump(Env::get('database.username'));
        // $res=Env::get("status");
        //    dump($res);
        //dump($_ENV);
        dump(Config());
    }
}
