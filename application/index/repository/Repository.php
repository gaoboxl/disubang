<?php
namespace app\index\repository;


/**
 * 数据仓库接口
 */

interface Repository
{
	
	//获取全部数据
	public function all($field, $order_by);
	
	
	//获取分页数据
    public function paginate($limit);
	
	
	//新增数据
    public function create($data);
	
	
	//更新数据
    public function update($data, $value, $attribute='id');
	
	
	//删除数据
    public function delete($id);
	
	
	//获取单条数据
    public function find($id);
	
	
	//根据条件获取数据
    public function findBy($field, $value, $attribute='id');
		
}