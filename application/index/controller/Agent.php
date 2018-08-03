<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/31 0031
 * Time: 15:53
 */
namespace app\index\controller;
use think\Controller;
use think\Db;

class Agent extends Controller
{
    public function index($id=1)
    {
        try{
            $data=Db::name('main')->find();
            $title=$data['title'];
            $main=[
                'title'=>$data['title'],
                'description'=>$data['description'],
                'keywords'=>$data['keywords'],
                'company_name'=>$data['company_name'],
            ];
        }catch (\mysqli_sql_exception $exception){
        }
        $this->assign('main',$main);
        return $this->fetch();
    }
}