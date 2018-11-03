<?php
header("content-type:text/html;charset=utf8");
$data=$_POST;
$chu = $data['chu'];
$mu = $data['mu'];
$piao = $data['piao'];
 // spl_autoload_register()
function __autoload($class){
	// echo $class;die;
	require("$class.php");
}
$aa = new DB();
$res = $aa->add($chu,$mu,$piao);
if($res){
	echo "<script>alert('成了');location.href='show.php'</script>";
}else{
	echo "添加失败";
}