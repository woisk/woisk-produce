<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 14:18
 */
namespace Modules\Terminal\Repositories;

use App\Models\TerminalComComputerName;

class ComputerName implements Terminal
{

    public $model;

    public function __construct(TerminalComComputerName $pcName)
    {
        $this->model = $pcName;
    }
    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($param)
    {
        $pcName = $this->model->firstOrCreate([
            'name' => $_SERVER['COMPUTERNAME']
        ]);
        $pcName->count ++;
        $pcName->save();
        return $pcName;
    }

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id)
    {
        $pcName = $this->model->find($id);
        if ($pcName->count >= 1){
            $pcName->delete();
        }
        $pcName->count --;
        $pcName->save();
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