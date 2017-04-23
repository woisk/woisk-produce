<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/4/21
 * Time: 12:18
 */
namespace Modules\Terminal\Repositories;

use App\Models\TerminalComBrowser;
use Jenssegers\Agent\Agent;

class BrowserRespo implements Terminal
{
    public $model;

    public function __construct(TerminalComBrowser $browser,Agent $agent)
    {
        $this->model = $browser;
        $this->Agent = $agent;

    }

    /**
     * 取出或创建实例
     * @param $param (模型参数)
     * @return mixed
     */
    public function firstOrCreate($param)
    {
       $browser = $this->model->firstOrCreate([
           'kernel' => $this->Agent->device(),
           'name' =>$this->Agent->browser(),
           'version' =>$this->Agent->version($this->Agent->browser())
       ]);
        $browser->count ++;
        $browser->save();
        return $browser;
    }

    /**
     * 虚拟软删除id
     * @param $id
     * @return mixed
     */
    public function del($id)
    {
        $browser = $this->model->find($id);
        if ($browser->count >= 1){
            $browser->delete();
        }
        $browser->count --;
        $browser->save();
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