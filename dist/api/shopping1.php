<?php
    // 购物车渲染
     //链接数据库
     include 'conn.php';


    // echo $page,$num;

    $sql = "SELECT * FROM shopping";

    $res = $conn->query($sql);

    $arr = $res->fetch_all(MYSQLI_ASSOC);//获取所有查询到的记录内容

    // var_dump($arr);

    
  echo json_encode($arr,JSON_UNESCAPED_UNICODE);

?>