<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  collect_route_api.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/08/07 19:49
 *  文件描述 :  个人收藏模块路由文件
 *  历史记录 :  -----------------------
 */

// -------------------------------------------
// : 前台接口，用户处理商品收藏接口
// -------------------------------------------

/**
 * 路由名称: reduction_route_api
 * 传值方式: POST
 * 路由功能: 满减添加接口
 */
Route::post(
    'v1/reductione_module/collect_post',
    'reduction_module/v1.controller.ReductionController/reduction'
);

/**
 * 路由名称: reduction_route_api
 * 传值方式: POST
 * 路由功能: 满减删除
 */
Route::post(
    'v1/reductione_module/collectdel_post',
    'reduction_module/v1.controller.ReductionController/reductionDel'
);


/**
 * 路由名称: reduction_route_api
 * 传值方式: post
 * 路由功能: 满减查询
 */
Route::post(
    'v1/reductione_module/collectsel_post',
    'reduction_module/v1.controller.ReductionController/reductionSel'
);

