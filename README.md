Reduction_Module : 满减模块
===============

> 模块基于ThinkPHP5.1目录开发，以项目开发基础目录为标准

## 目录结构

~~~
├─reduction_module             模块目录
│  ├─config                配置目录
│  │  ├─v1_tableName.php   数据表配置文件
│  │  ├─v1_rightConfig.php 权限管理模块路由
│  │  └─ ...               更多配置
│  ├─working_version       工作版本目录
│  │  ├─v1                 版本1目录
│  │  └─ ...               更多版本目录      
│  └─common.php            模块函数文件
├─README.md                模块说明文件
~~~

## v1版本接口说明：添加满减   .删除满减 . 查看满减

### `自行设计满减`

## 接口文档：

### ``


## 添加满减接口

~~~
[api]
post:/v1/reductione_module/collect_post
*full#满减金额
*less#减多少钱
<<<
success
{"errNum":0,"retMsg":"添加成功","retData":true}
<<<
error
{"errNum":1,"retMsg":"请求失败","retData":false}
~~~


## 查看满减
~~~
[api]
post:v1/reductione_module/collectsel_post
<<<
success
{"errNum":0,"retMsg":"请求成功","retData":true}
~~~

## 删除满减
~~~
[api]
post:/v1/reductione_module/collectdel_post
<<<
success
{"errNum":0,"retMsg":"删除成功","retData":true}
~~~