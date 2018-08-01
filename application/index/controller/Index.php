<?php
namespace app\index\controller;
use think\Config;
use think\ENV;
use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

    public function index()
    {
        $data=Db::name('main')->find();
    	$main=[
    	    'title'=>$data['title'],
            'description'=>$data['description'],
            'keywords'=>$data['keywords'],
            'company_name'=>$data['company_name'],
        ];
    	$this->assign('main',$main);
    	//dump(\config());
    	return $this->fetch();
    }
}
