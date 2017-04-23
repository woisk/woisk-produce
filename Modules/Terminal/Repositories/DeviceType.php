<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 14:04
 */
namespace Modules\Terminal\Repositories;

use App\Models\TerminalComDeviceType;
use Jenssegers\Agent\Agent;


class DeviceType implements Terminal
{
    public $model;

    public function __construct(TerminalComDeviceType $deviceType,Agent $agent)
    {
        $this->model = $deviceType;
        $this->Agent = $agent;
    }
    /**
     * 判断终端类型
     * @return string
     */
    public function isTerminal()
    {

        if ($this->Agent->isMobile()) {

            return '移动设备';

        } elseif ($this->Agent->isTablet()) {

            return '平板设备';

        } elseif ($this->Agent->isDesktop()) {

            return '桌面设备';

        }
    }
    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($param)
    {
        $deviceType = $this->model->firstOrCreate([
            'name' => $this->isTerminal(),
        ]);
        $deviceType->count ++;
        $deviceType->save();
        return $deviceType;
    }

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id)
    {
        $deviceType = $this->model->find($id);
        if ($deviceType->count >= 1){
            $deviceType->delete();
        }
        $deviceType->count --;
        $deviceType->save();
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