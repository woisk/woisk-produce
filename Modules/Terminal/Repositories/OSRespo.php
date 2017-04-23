<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 13:52
 */
namespace Modules\Terminal\Repositories;

use App\Models\TerminalComO;
use Jenssegers\Agent\Agent;


class OSRespo implements Terminal
{
    public $model;

    public function __construct(TerminalComO $os,Agent $agent)
    {
        $this->model = $os;
        $this->Agent =$agent;
    }

    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($param)
    {
        $os = $this->model->firstOrCreate([
            'name' => $this->Agent->platform(),
            'version' => $this->Agent->version($this->Agent->platform()),
        ]);
        $os->count ++;
        $os->save();
        return $os;
    }

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id)
    {
        $os = $this->model->find($id);
        if ($os->count >= 1){
            $os->delete();
        }
        $os->count --;
        $os->save();
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