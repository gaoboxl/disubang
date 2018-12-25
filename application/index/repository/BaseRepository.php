<?php
namespace app\index\repository;

class BaseRepository implements Repository
{
	
	protected $model;
	
	public function __construct(Model $model)
	{
		$this->model  = $model;
	}
	
	
	/**
	 * 获取全部数据
	 *
	 * @param array  $field 需要查询的字段
	 * @param string $order_by 排序
	 */
	public function all($field, $order_by)
	{
		return $this->model->field($field)->order($order_by)->select();
	}
	
	
	/**
	 * 获取分页数据
	 *
	 * $param integer $limit 分页条数
	 */
    public function paginate($limit)
	{
		return $this->model->paginate($limit);
	}
	
	
	/**
	 * 新增数据
	 *
	 * @param $data array 创建数据
	 */
    public function create($data)
	{
		try{
			
			$this->model->create($data);
			
		}catch(\Exception $e){
			
			return api(500,$e->getMessage());
		}
		
		return api(200,'新增成功');
	}
	
	
	/**
	 * 更新数据
	 *
	 * @param array  $data 更新数据
	 * @param string $id   更新条件值
	 * @param stirng $attribute 更新条件字段
	 */
    public function update($data, $value, $attribute='id')
	{
		try{
			
			$map[$attribute] = $value;
			
			$this->model->save($data, $map);
			
		}catch(\Exception $e){
			
			return api(500,$e->getMessage());
		}
		
		return api(200,'更新成功');
		
	}
	
	
	/**
	 * 删除数据
	 *
	 * @param integer $id 主键id
	 */
    public function delete($id)
	{
		try{
	
			$this->model->destroy($id);
			
		}catch(\Exception $e){
			
			return api(500,$e->getMessage());
		}
		
		return api(200,'删除成功');
	}
	
	
	/**
	 * 获取单条数据
	 *
	 * @param integer $id 主键id
	 */
    public function find($id)
	{
		return $this->model->get($id);
	}
	
	
	/**
	 * 根据条件获取数据
	 * 
	 * @param array  $field 需要查询的字段
	 * @param string $value 查询条件的值
	 * @param string $attribute 查询条件的字段
	 */
    public function findBy($field, $value, $attribute='id')
	{
		return $this->model->where($attribute,$value)->field($field)->find();
	}
	
	
}