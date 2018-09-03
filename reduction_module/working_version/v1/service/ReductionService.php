<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  ReductionService.php
 *  创 建 者 :  Shi Rui
 *  创建日期 :  2018/08/27 18:29
 *  文件描述 :  满减逻辑层
 *  历史记录 :  -----------------------
 */
namespace app\reduction_module\working_version\v1\service;
use app\reduction_module\working_version\v1\dao\ReductionDao;

class ReductionService
{

    /**
     * 名  称 : reduction()
     * 功  能 : 满减操作
     * 输  入 : (string) $Full => '满减金额';
     * 输  入 : (string) $Less => '减多少钱;
     * 输  出 : [ 'msg'=>'success' , 'data'=>true ]
     * 创  建 : 2018/08/30 14:54
     */
    public function reduction($Full,$Less)
    {
        // 引入RoleDao数据层
        $res=(new ReductionDao)->reduction($Full,$Less);
        if($res['msg']=='error') return returnData('error','失败');
        // 返回数据
        return returnData('success',true);
    }



    /**
     * 名  称 : reductionSel()
     * 功  能 : 满减查询
     * 输  入 : (string) $ID => '满减id';
     * 输  出 : [ 'msg'=>'success' , 'data'=>true ]
     * 创  建 : 2018/08/30 14:54
     */
    public function reductionSel($ID='')
    {
        // 引入RoleDao数据层
        $res=(new ReductionDao)->reductionSel($ID);
        if($res['msg']=='error') return returnData('error','失败');
        // 返回数据
        return returnData('success',true);
    }





    /**
     * 名  称 : reductionDel()
     * 功  能 : 满减操作
     * 输  入 : (string) $ID => '满减id';
     * 输  出 : [ 'msg'=>'success' , 'data'=>true ]
     * 创  建 : 2018/08/30 14:54
     */
    public function reductionDel($ID)
    {
        // 引入RoleDao数据层
        $res=(new ReductionDao)->reductionDel($ID);
        if($res['msg']=='error') return returnData('error','失败');
        // 返回数据
        return returnData('success',true);
    }
}
