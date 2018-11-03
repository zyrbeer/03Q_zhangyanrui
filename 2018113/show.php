<?php

function __autoload($class){
	// echo $class;die;
	require("$class.php");
}
	
$aa = new Db();
$data = $aa->select();
// print_r($data);die;
// foreach ($data as $key => $value) {

// }
// print_r($arr);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="">
		<a href="add.php">添加</a>
		<th>出发地</th>
		<th>目的地</th>
		<th>票数</th>
		<th>操作</th>
		
		<?php foreach ($data as $key => $value): ?>
			<tr>
				<td><?php echo $value['chu']?></td>
				<td><?php echo $value['mu']?></td>
				<td><?php echo $value['piao']?></td>
				<td><a href="del.php?id=<?php echo $value['id']?>">抢票</a></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>