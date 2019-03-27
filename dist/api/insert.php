<?php

    /*将注册信息插入数据库*/
    include 'conn.php';

    //接收数据
	$name = isset($_POST['name']) ? $_POST['name'] : '';
    $psw = isset($_POST['psw']) ? $_POST['psw'] : '';
    
    $sql = "INSERT INTO login(NAME,password) VALUES('$name','$psw')";

    //执行
    $res = $conn->query($sql);

    if($res){
        //注册成功
        echo'yes';
    }else{
        echo'no';
    }

    //关闭数据库

    // $res->close();
    // $conn->close();
?>