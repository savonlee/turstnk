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
use think\Request;

class Solution extends Controller
{
    /**
     * Make one feild rule
     * @param object $field
     * @return array|string
     * @throws Exception
     */
    private $data;
    private $title;
    //private $main;
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        try{
            $this->data=Db::name('main')->find();
            //$title=$data['title'];
            $main=[
                'title'=>$this->data['title'],
                'description'=>$this->data['description'],
                'keywords'=>$this->data['keywords'],
                'company_name'=>$this->data['company_name'],
            ];
        }catch (\mysqli_sql_exception $exception){
        }
    }

    public function index($id=1)
    {
        try{
            $data=Db::name('main')->find();
            $title=$data['title'];
            $main=[
                'title'=>'解决方案-' . $id . $data['title'],
                'description'=>$data['description'],
                'keywords'=>$data['keywords'],
                'company_name'=>$data['company_name'],
            ];
        }catch (\mysqli_sql_exception $exception){
        }
        $this->assign('main',$main);
        return $this->fetch();
    }
    public function catering(){
        try{
            $result=Db::name('main')->where('page','solution_catering')->find();
            $main=[
                'title'=>$result["title"] ,
                'description'=>$result['description'],
                'keywords'=>$result['keywords'],
                'company_name'=>$this->data['company_name'],
            ];
        }catch (\mysqli_sql_exception $exception){
        }
        $this->assign('main',$main);
        return $this->fetch();
    }
    public function biulding(){
        try{
            $result=Db::name('main')->where('page','solution_biulding')->find();
            $main=[
                'title'=>$result["title"] ,
                'description'=>$result['description'],
                'keywords'=>$result['keywords'],
                'company_name'=>$this->data['company_name'],
            ];
        }catch (\mysqli_sql_exception $exception){
        }
        $this->assign('main',$main);
        return $this->fetch();
    }
    public function furniture(){
        try{
            $result=Db::name('main')->where('page','solution_furniture')->find();
            $main=[
                'title'=>$result["title"] ,
                'description'=>$result['description'],
                'keywords'=>$result['keywords'],
                'company_name'=>$this->data['company_name'],
            ];
        }catch (\mysqli_sql_exception $exception){
        }
        $this->assign('main',$main);
        return $this->fetch();
    }
    public function cloth(){
        try{
            $result=Db::name('main')->where('page','solution_cloth')->find();
            $main=[
                'title'=>$result["title"] ,
                'description'=>$result['description'],
                'keywords'=>$result['keywords'],
                'company_name'=>$this->data['company_name'],
            ];
        }catch (\mysqli_sql_exception $exception){
        }
        $this->assign('main',$main);
        return $this->fetch();
    }
    public function fruit(){
        try{
            $result=Db::name('main')->where('page','solution_fruit')->find();
            $main=[
                'title'=>$result["title"] ,
                'description'=>$result['description'],
                'keywords'=>$result['keywords'],
                'company_name'=>$this->data['company_name'],
            ];
        }catch (\mysqli_sql_exception $exception){
        }
        $this->assign('main',$main);
        return $this->fetch();
    }
    public function industry(){
        try{
            $result=Db::name('main')->where('page','solution_industry')->find();
            $main=[
                'title'=>$result["title"] ,
                'description'=>$result['description'],
                'keywords'=>$result['keywords'],
                'company_name'=>$this->data['company_name'],
            ];
        }catch (\mysqli_sql_exception $exception){
        }
        $this->assign('main',$main);
        return $this->fetch();
    }
}