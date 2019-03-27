<?php

    /*添加到购物车之前先判断，购物车有没有这条，有的话修改数量，没有择添加*/
    include 'conn.php';

    //接收数据
	$dataId = isset($_POST['dataId']) ? $_POST['dataId'] : '';
    // $psw = isset($_POST['psw']) ? $_POST['psw'] : '';
    
    $sql = "SELECT * FROM shopping WHERE number='$dataId'";

    //执行
    $res = $conn->query($sql);
    // echo $res;
    $data = $res->fetch_all(MYSQLI_ASSOC);
    // echo $data;
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>