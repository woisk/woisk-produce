<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 10:05
 */

namespace Modules\Terminal\Repositories;


use App\Models\TerminalComIp;
use Zhuzhichao\IpLocationZh\Ip;

class IPRespo implements Terminal
{
    public $model;

    public function __construct(TerminalComIp $ip)
    {
        $this->model = $ip;
    }

    /**
     * IP归属地转换字符串存入数据表
     * @param $ipg
     * @return string
     */
    public function getIpGui($ipg)
    {

        if ($ipg['0'] == $ipg['1']) {
            return $ipg['0'];
        }
        return implode($ipg);
    }

    /**
     * IP组归属地址
     * @param $ip
     * @return \Illuminate\Http\JsonResponse
     */
    public function numberIp($ip)
    {
        return response()->json([
            $ip => Ip::find($ip)
        ]);
    }

    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($request)
    {
        $ip = $this->model->firstOrCreate([
            'ip_info' => $request->getClientIp(),
            'city' => $this->getIpGui(Ip::find($request->getClientIp()))
        ]);
        $ip->count += 1;
        $ip->save();
        return $ip;
    }

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id)
    {
        $ip = $this->model->find($id);
        if ($ip->count >= 1){
            $ip->delete();
        }
        $ip->count --;
        $ip->save();
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