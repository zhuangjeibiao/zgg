<?php

    /*购物车加减数量*/
    include 'conn.php';

    //接收数据
	$dis = isset($_POST['dis']) ? $_POST['dis'] : '';
    $shu = isset($_POST['shu']) ? $_POST['shu'] : '';
    
    $sql = "UPDATE shopping SET shu='$shu' WHERE number='$dis'";

    //执行
    $res = $conn->query($sql);

    if($res){
        //修改成功
        echo'yes';
    }else{
        echo'no';
    }

    //关闭数据库

    // $res->close();
    // $conn->close();
?>