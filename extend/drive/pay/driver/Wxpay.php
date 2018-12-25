<?php
namespace drive\pay\driver;

use drive\pay\Driver;

class Wxpay extends Driver
{
	
	//支付
	public function pay($amount)
	{
		
		return "微信支付{$amount}";
	}
	
	
	//订单退款
	public function refund($amount, $trade_no='')
	{
		return "微信退款{$amount}";
		
	}
	
	
	//单笔转账
	public function transfer($amount, $payee_account='', $payee_type='', $out_biz_no='')
	{
		return "微信转账{$amount}";
		
	}
	
}