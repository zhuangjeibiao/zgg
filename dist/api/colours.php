<?php
    /*	
	 	需求：查询数据库数据，做成指定字符串格式传给前端
	 		* 查询第几页往后多少条
	 		* limit index,num;
	 		* (page-1)*num=index
	 		
	 */
    //按条数做数据渲染,点击焦点实现换页

     //链接数据库
     include 'conn.php';

     //接收前端数据;
     $page = isset($_POST['page'])? $_POST['page'] : '';
     $num = isset($_POST['num'])? $_POST['num'] : '';

    // echo $page,$num;

    $xiabiao = ($page - 1) * $num;
    $sql = "SELECT * FROM listtable LIMIT $xiabiao,$num";

    $res = $conn->query($sql);

    $arr = $res->fetch_all(MYSQLI_ASSOC);//获取所有查询到的记录内容

    // var_dump($arr);

    $sql2 = "SELECT * FROM list";
    $res2 = $conn->query($sql2);
    // $arr2 = $res2->fetch_all(MYSQLI_ASSOC);
    // var_dump($arr2);

    $list = array(
		'data' => $arr,//查询到的一段数据
		'total' => $res2->num_rows,//总条数
		'page' => $page,
		'num' => $num
  );
    
  echo json_encode($list,JSON_UNESCAPED_UNICODE);

?>