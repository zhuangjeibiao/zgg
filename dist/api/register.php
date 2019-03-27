<?php
    /*登录功能
        *查询数据库是否有没有这个账号和密码
        *并且返回给前端
    */
    include 'conn.php';

    //接收数据
	$name = isset($_POST['name']) ? $_POST['name'] : '';
    $psw = isset($_POST['psw']) ? $_POST['psw'] : '';
    // $name = $_POST['usernames'];
    // $psw = $_POST['password'];
    // echo $name;
    $sql = "SELECT * FROM login WHERE NAME='$name' AND PASSWORD='$psw'";
    // var_dump($aql);
    //执行
    $res = $conn->query($sql);
    // var_dump($res);
    if($res->num_rows){
        //存在
        echo'yes';
    }else{
        echo'no';
    }

    //关闭数据库

    // $res->close();
    // $conn->close();
    // 1	张三	d1234567
?>