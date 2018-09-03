<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  ReductionController.php
 *  创 建 者 :  Shi Rui
 *  创建日期 :  2018/08/27 18:29
 *  文件描述 :  满减控制器
 *  历史记录 :  -----------------------
 */
namespace app\reduction_module\working_version\v1\controller;
use think\Controller;
use think\Request;
use app\reduction_module\working_version\v1\service\ReductionService;

class ReductionController extends Controller
{

    /**
     * 名  称 : reduction()
     * 功  能 : 满减添加
     * 变  量 : --------------------------------------
     * 输  入 : (string) $Full => '满减金额';
     * 输  入 : (string) $Less => '减多少钱;
     * 输  出 : {"errNum":0,"retMsg":"请求失败","retData":true}
     * 创  建 : 2018/08/30 13:42
     */
    public function reduction(Request $request)
    {
        // 获取满减价格
        $Full = $request->post('full');
        $Less = $request->post('less');
        // 引入Service层代码
        $res = (new ReductionService)->reduction($Full,$Less);
        // 验证数据结构
        if($res['msg']=='error')  return returnResponse(1,'请求失败');
        // 返回数据
        return returnResponse(0,'添加成功');

    }



    /**
     * 名  称 : reductionSel()
     * 功  能 : 满减查询
     * 变  量 : --------------------------------------
     * 输  入 : (string) $ID => '满减id';
     * 输  出 : {"errNum":0,"retMsg":"请求失败","retData":true}
     * 创  建 : 2018/08/30 13:42
     */
    public function reductionSel(Request $request)
    {
        // 获取满减价格
        $ID = $request->post('id');
        // 引入Service层代码
        $res = (new ReductionService)->reductionSel($ID);
        // 验证数据结构
        if($res['msg']=='error')  return returnResponse(1,'请求失败');
        // 返回数据
        return returnResponse(0,'查询成功');

    }



    /**
     * 名  称 : reductionDel()
     * 功  能 : 满减删除
     * 变  量 : --------------------------------------
     * 输  入 : (string) $ID => '满减id';
     * 输  出 : {"errNum":0,"retMsg":"请求失败","retData":true}
     * 创  建 : 2018/08/30 13:42
     */
    public function reductionDel(Request $request)
    {
        // 获取删除ID
        $ID = $request->post('id');
        // 引入Service层代码
        $res = (new ReductionService)->reductionDel($ID);
        // 验证数据结构
        if($res['msg']=='error') return returnResponse(1,'删除失败');
        // 返回数据
        return returnResponse(0,'删除成功',true);

    }
}
