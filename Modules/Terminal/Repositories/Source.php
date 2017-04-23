<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 14:27
 */
namespace Modules\Terminal\Repositories;

use App\Models\TerminalComSource;

class Source implements Terminal
{
    public $model;

    public function __construct(TerminalComSource $source)
    {
        $this->model = $source;
    }

    /**
     * 来源转换函数
     */
    public function SourceTransform()
    {

    }

    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($param)
    {
        $source = $this->model->firstOrCreate([
            'name' => $param
        ]);
        $source->count ++;
        $source->save();
        return $source;
    }

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id)
    {
        $source = $this->model->find($id);
        if ($source->count >= 1){
            $source->delete();
        }
        $source->count --;
        $source->save();
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
