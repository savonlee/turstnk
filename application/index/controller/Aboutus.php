<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/27 0027
 * Time: 21:31
 * @throws Exception
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\exception;

class Aboutus extends Controller
{
    /**
     * Make one feild rule
     * @param object $field
     * @return array|string
     * @throws Exception
     */
    public function index()
    {
        try{
            $data=Db::name('main')->find();
            $title=$data['title'];
            $main=[
                'title'=>'产品中心-' . $data['title'],
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