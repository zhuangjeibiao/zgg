<?php
    // 主页手风琴渲染
    //按条数做数据渲染,点击焦点实现换页

     //链接数据库
     include 'conn.php';

     //接收前端数据;
     $num = isset($_POST['num'])? $_POST['num'] : '';

    // echo $qidian;

    $sql = "SELECT * FROM other LIMIT 0,$num";

    $res = $conn->query($sql);
    // echo $res;
    $data = $res->fetch_all(MYSQLI_ASSOC);
    // echo $data;
    echo json_encode($data,JSON_UNESCAPED_UNICODE);

?>