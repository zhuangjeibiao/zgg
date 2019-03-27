<?php

    /*将注册信息插入数据库*/
    include 'conn.php';

    //接收数据
	$id = isset($_POST['id']) ? $_POST['id'] : '';
    $img = isset($_POST['img']) ? $_POST['img'] : '';
    $num = isset($_POST['num']) ? $_POST['num'] : '';
    $pir = isset($_POST['pir']) ? $_POST['pir'] : '';
    $agoPir = isset($_POST['agoPir']) ? $_POST['agoPir'] : '';
    $writer = isset($_POST['writer']) ? $_POST['writer'] : '';
    $press = isset($_POST['press']) ? $_POST['press'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $shu = isset($_POST['shu']) ? $_POST['shu'] : '';
    
    // echo $number
    $sql = "INSERT INTO shopping(img,num,pir,agoPir,writer,press,date,name,number,shu) VALUES('$img','$num','$pir','$agoPir','$writer','$press','$date','$name','$number','$shu')";

    // //执行
    $res = $conn->query($sql);
    // echo $res;
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