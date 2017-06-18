<?php 
	if(!empty($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 1;
	}
	if(!empty($_GET['pre_page'])){
		$pre_page = $_GET['pre_page'];
	}else{
		$pre_page = 1;
	}
	$url = "http://api.shudong.wang/v1/db.php?page=".$page."&pre_page=".$pre_page;

	echo $data = file_get_contents($url);