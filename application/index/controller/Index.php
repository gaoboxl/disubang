<?php
namespace app\index\controller;

use think\Controller;
use app\common\model\User;
use app\index\repository\UserRepository;
use drive\facade\{Crypts,Hash};
use drive\Pay;

class Index extends Controller
{
	
	protected $repository;
	
	public function __construct(User $user)
	{
		$this->repository = new UserRepository($user);
	}
	

    public function index()
    {
		echo  Pay::name('alipay')->transfer('100');	
		
		echo "</br>";
		
		echo Crypts::encrypt(123456);
		
		echo "</br>";
	
		$str =  Hash::make(123);
		
		if(Hash::check(123,$str)){
			
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
