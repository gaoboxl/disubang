<?php
namespace drive\pay\driver;

use drive\pay\Driver;

class Alipay extends Driver
{
	
	//支付
	public function pay($amount)
	{
		
		return "支付宝支付{$amount}";
	}
	
	
	//订单退款
	public function refund($amount, $trade_no='')
	{
		return "支付宝退款{$amount}";
		
	}
	
	
	//单笔转账
	public function transfer($amount, $payee_account='', $payee_type='', $out_biz_no='')
	{
		return "支付宝转账{$amount}";
		
	}
	
}