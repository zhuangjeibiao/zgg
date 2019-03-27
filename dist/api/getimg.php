<?php
// header("content-type:text/html;charset=utf-8")
// 以id查询数据并传输
    include 'conn.php';

    $numid = isset($_POST['dataId']) ? $_POST['dataId'] : '22';
    // echo $numid;

    $sql = "SELECT * FROM listtable WHERE number=$numid";
    // echo $sql;
    // //执行
    $res = $conn->query($sql);
    // echo $res;
    $data = $res->fetch_all(MYSQLI_ASSOC);
    // echo $data;
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
    
?>