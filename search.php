<?php
// api/share.php
//文件注释：：本文件
//初始化日志和db组件
//require "cfg.php";
//---------------------------------数据库配置  默认从环境变量读取
$showDbgEcho=true;


include __DIR__."/conn.php";
var_dump_local( '$mysql_conf:'.json_encode($mysql_conf) );
// // error_log(json_encode($mysql_conf));
 
 
 $sql="select * from wp_posts where post_title    like '%".addslashes($_GET['s'])."%' " ;

//$sql = "select * from mac_vod where vod_name like '%$vname%' order by vod_time_add desc limit 500"  ;


foreach ($rows as $k => &$v) {
     

    $tit=$v['post_title'];
    $hit=$v['post_content'];
    $v['linkHref_app'] = "/vod_app/app_play.html?vid=$vodid&title=$tit&hit=$hit";




}



 echo json_encode( pdo_query($sql)) ;
 