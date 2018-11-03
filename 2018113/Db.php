<?php

class Db
{
	function __construct(){
		 mysql_connect('127.0.0.1','root','root');
           mysql_select_db('03q');
	}


	function add($chu,$mu,$piao){
		$sql = "insert into piao values(null,'$chu','$mu','$piao')";
		$res=mysql_query($sql);
		return $res;
	}
	function update($id){
		$sql = "update piao set piao=piao-1 where id = '$id'";
		// print_r($sql);die;
		$res=mysql_query($sql);
		return $res;
	}
	function del($id){
		$sql = "delete from piao where id = '$id'";
		$res=mysql_query($sql);
		return $res;
	}
	function select(){
		$sql = "select * from piao";
		$res=mysql_query($sql);
		$list = array();
        while($arr=mysql_fetch_assoc($res)){
        	$list[]=$arr;
		}
		// print_r($list);die;
		return $list;
	}

	function sel($id){
		$sql = "select * from piao where id ='$id'";
		// print_r($sql);die;
		$res=mysql_query($sql);
		// $res['piao']==0;
		$data = mysql_fetch_assoc($res);
		// print_r($res);die;
		return $data;
	}


}
