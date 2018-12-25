<?php
namespace drive;

/**
 * ====================== 
 * 说明:加密和验证
 *
 * 作者:小李子
 *
 * 时间：2018-12-25
 * ======================
 */

class Hash
{
    
    /**
     * 创建一个hash字符串
     *
     * @param  string  $value
	 * @return string  $hash
     */
    public function make($value)
    {
        $hash = password_hash($value, PASSWORD_BCRYPT);

        if ($hash === false) {
			
            throw new \think\exception\HttpException(500, '无法生成散列值');
        }

        return $hash;
    }

	
    /**
     * hash验证字符串
     *
     * @param  string  $value
     * @param  string  $hashedValue
     * @return bool
     */
    public function check($value, $hashedValue)
    {
        if (empty($hashedValue)) {
            return false;
        }

        return password_verify($value, $hashedValue);
    }
	
}