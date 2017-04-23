<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 14:34
 */
namespace Modules\Terminal\Repositories;

use App\Models\TerminalComSourceDomian;

class SourceDomian  implements Terminal
{

    public $model;

    public function __construct(TerminalComSourceDomian $sourceDomian)
    {
        $this->model = $sourceDomian;
    }


    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($param)
    {
        $sourceDomian = $this->model->firstOrCreate([
            'url' => $param
        ]);
        $sourceDomian->count ++;
        $sourceDomian->save();
        return $sourceDomian;
    }

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id)
    {
        $sourceDomian = $this->model->find($id);
        if ($sourceDomian->count >= 1){
            $sourceDomian->delete();
        }
        $sourceDomian->count --;
        $sourceDomian->save();
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