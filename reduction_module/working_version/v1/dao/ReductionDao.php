<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  ReductionDao.php
 *  创 建 者 :  Shi Rui
 *  创建日期 :  2018/08/27 18:29
 *  文件描述 :  满减数据层
 *  历史记录 :  -----------------------
 */
namespace app\reduction_module\working_version\v1\dao;
use app\reduction_module\working_version\v1\model\ReductionModel;

class ReductionDao
{

    /**
     * 名  称 : reduction()
     * 功  能 : 声明：满减添加
     * 输  入 : (string) $Full => '满减金额';
     * 输  入 : (string) $Less => '减多少钱;
     * 输  出 : [ 'msg'=>'success' , 'data'=>true ]
     * 创  建 : 2018/06/16 13:42
     */
    public function reduction($Full,$Less)
    {

        $collectModel = new ReductionModel();
        $collectModel->full  = $Full;
        $collectModel->less  = $Less;
        // 保存数据
        $res = $collectModel->save();
        if(!$res) return returnData('error');

        // 返回数据
        return returnData('success',true);

    }


    /**
     * 名  称 : reductionSel()
     * 功  能 : 声明：满减查询
     * 输  入 : (string) $ID => '满减id';
     * 输  出 : [ 'msg'=>'success' , 'data'=>true ]
     * 创  建 : 2018/06/16 13:42
     */
    public function reductionSel($ID='')
    {

        $collectModel = new ReductionModel();
        if($ID == ''){
            $list = $collectModel->select();
        }else{
            $list = $collectModel->where('id',$ID)->find();
        }

        if(!$list){
            return returnData('error',false);
        }

        // 返回数据
        return returnData('success',true);

    }


    /**
     * 名  称 : reductionDel()
     * 功  能 : 声明：满减
     * 输  入 : (string) $ID => '满减id';
     * 输  出 : [ 'msg'=>'success' , 'data'=>true ]
     * 创  建 : 2018/06/16 13:42
     */
    public function reductionDel($ID)
    {

        $collectModel = new ReductionModel();
        // 执行删除操作
        $del = $collectModel->where('id',$ID)->delete();
        // 验证
        if(!$del){
            return returnData('error',false);
        }
        // 返回数据
        return returnData('success',true);

    }
}
