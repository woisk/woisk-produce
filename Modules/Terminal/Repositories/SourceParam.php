<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 14:38
 */
namespace Modules\Terminal\Repositories;

use App\Models\TerminalComSourceParam;

class SourceParam
{
    public $model;

    public function __construct(TerminalComSourceParam $sourceParam)
    {
        $this->model = $sourceParam;
    }
    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($id,$param)
    {
        $sourceParam = $this->model->firstOrCreate([
            'domian'=>$id,
            'param' => $param
        ]);
        return $sourceParam;
    }

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id)
    {
        $sourceParam = $this->model->find($id);
        $sourceParam->delete();

        return true;
    }

    /**
     * 查询记录信息
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->model-find($id);
    }
}