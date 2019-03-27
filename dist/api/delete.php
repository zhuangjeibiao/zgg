<?php
// 删除购物车数据
    include 'conn.php';

    $numid = isset($_POST['dataId']) ? $_POST['dataId'] : '22';
    // echo $numid;

    $sql = "delete FROM shopping where number='$numid'";
    // echo $sql;
    // //执行
    $res = $conn->query($sql);
    // echo $res;
    $data = $res->fetch_all(MYSQLI_ASSOC);
    // echo $data;
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
    
?>