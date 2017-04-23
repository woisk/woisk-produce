<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 12:56
 */
namespace Modules\Terminal\Repositories;
interface Terminal
{
    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($param);

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id);

    /**
     * 查询记录信息
     * @param $id
     * @return mixed
     */
    public function show($id);

}