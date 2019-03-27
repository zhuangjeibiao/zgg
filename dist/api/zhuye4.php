<?php
    // <!-- 主体功能第四部分 -->
    //     <!-- 出版社专区 -->
    // 上下轮播效果

     //链接数据库
     include 'conn.php';

     //接收前端数据;
     $num = isset($_POST['num'])? $_POST['num'] : '';

    // echo $qidian;

    $sql = "SELECT * FROM author LIMIT 0,$num";

    $res = $conn->query($sql);
    // echo $res;
    $data = $res->fetch_all(MYSQLI_ASSOC);
    // echo $data;
    echo json_encode($data,JSON_UNESCAPED_UNICODE);

?>