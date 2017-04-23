<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 14:41
 */
namespace Modules\Terminal\Repositories;

use App\Models\TerminalComDisplaySize;

class DisplaySize implements Terminal
{
    public $model;

    public function __construct(TerminalComDisplaySize $displaySize)
    {
        $this->model = $displaySize;
    }

    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($param)
    {
        $displaySize = $this->model->firstOrCreate([
            'name' => $param
        ]);
        $displaySize->count ++;
        $displaySize->save();
        return $displaySize;
    }

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id)
    {
        $displaySize = $this->model->find($id);
        if ($displaySize->count >= 1){
            $displaySize->delete();
        }
        $displaySize->count --;
        $displaySize->save();
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