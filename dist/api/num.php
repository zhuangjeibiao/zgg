<?php
// 销量查询
/*将注册信息插入数据库*/
include 'conn.php';

//接收数据
$num = isset($_POST['numm']) ? $_POST['numm'] : '';
$pages = isset($_POST['pages']) ? $_POST['pages'] : '';
$shu = isset($_POST['shu']) ? $_POST['shu'] : '';//多少条数据
$paixu  = isset($_POST['paixu']) ? $_POST['paixu'] : '';
// echo $num;
$xiabiao = ($pages - 1) * $shu;
// echo $shu;
$sql = "SELECT * FROM listtable ORDER BY $num $paixu LIMIT $xiabiao,$shu";

// //执行
$res = $conn->query($sql);
// echo $res;
$data = $res->fetch_all(MYSQLI_ASSOC);
// echo $data;
echo json_encode($data,JSON_UNESCAPED_UNICODE);

?>