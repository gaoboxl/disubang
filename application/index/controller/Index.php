<?php
namespace app\index\controller;

use think\Controller;
use app\common\model\User;
use app\index\repository\UserRepository;
use drive\facade\{Crypts,Hash};

class Index extends Controller
{
	
	protected $repository;
	
	public function __construct()
	{
		//$this->repository = new UserRepository(User);
	}
	

    public function index()
    {
        
		//return Pay::name('wxpay')->transfer('100');	
	
		//Crypts::encrypt(123456);
	
		$str =  Hash::make(123);
		
		if(Hash::check(1235,$str)){
			return 'success';
		}else{
			return 'error';
		}
		
	
		
	}
	
	
	//测试
	public function test()
	{
		
		//$crypts =  new  Crypts;
		//$dd 	=  encrypt(4444);
		//echo $dd;
		//echo decrypt($dd);
		
		
	}

   

   
}
