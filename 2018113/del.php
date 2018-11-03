<?php
header("content-type:text/html;charset=utf8");
//修改
$id = $_GET['id'];

function __autoload($class){
	// echo $class;die;
	require("$class.php");
}
// require "./db.class.php";

$aa = new DB();
$res = $aa->sel($id);
// var_dump($res);die;
if($res['piao']>0){
	$res = $aa->update($id);
	// print_r($res);die;
	if($res==''){
		echo "<script>alert('抢票失败');location.href='show.php'</script>";
	}else{
	echo "<script>alert('抢票成功');location.href='show.php'</script>";
	}
}
else{
	echo "<script>alert('抢票失败');location.href='show.php'</script>";
}