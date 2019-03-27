<?php
    /*用户名是否已经存在*/
    include 'conn.php';

    //接收用户名
    // $name = $_POST['name'];
    //接收用户名：isset()判断是否接收到值，接收到就用接收的数据，否则为空
    $name = isset($_POST['name'])? $_POST['name']:'';

    //查询数据
    // echo $name;

    $sql = "SELECT * FROM login WHERE NAME='$name'";

    //执行sql语句：结果集
    $res = $conn->query($sql);

    // var_dump($sql);
    
    if($res->num_rows){
        //存在
        echo'no';
    }else{
        echo'yes';
    }

    $res->close();
    $conn->close();

?>