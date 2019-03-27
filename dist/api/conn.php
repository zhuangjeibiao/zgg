<?php
    //防止乱码
    // header('content-type:text/html;charset=utf-8');

    $servername = "localhost";
    $username = "root"; //数据库登录名
    $password = ""; //数据库密码
    $dbname = 'h1812';//数据库名字

    //创建连接
    $conn = new mysqli($servername,$username,$password,$dbname);
    $conn->query("SET NAMES utf8");//编码
    //检查连接
    if($conn ->connect_error){
        die("连接失败：" .$conn->connect_error);
    }

    //查询前设置编码，防止输出乱码
    // $conn->set_charset('utf8');

    //echo "连接成功";


    // //编写sql语句
    // $sql = 'select * from list';
    // //获取查询结果
    // $result = $conn->query($sql);

    // //查询结果集，得到数组
    // $row = $result->fetch_all(MYSQLI_ASSOC);

    // //将结果输出到前台，转为对象类型
    // echo json_encode($row,JSON_UNESCAPED_UNICODE);
    // // var_dump($row);

?>