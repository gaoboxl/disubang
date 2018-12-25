<?php
namespace drive;


class Pay
{
	
	/**
	 * 支付工厂 
	 *
	 * @param  string  $type [支付名称]
	 */
	public static function name($type)
    {
       
		switch ($type) {
			case 'wxpay':
				
				return new \drive\pay\driver\Wxpay;
				break;
			
			case 'alipay':
			
				return new \drive\pay\driver\Alipay;
				break;
		}

		throw new \think\exception\HttpException(500, '该支付不存在');
    }
	
	
	
	
	
}