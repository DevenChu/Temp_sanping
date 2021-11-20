<?php

	$DB_HOST	= "localhost";	  //資料庫主機位置
	$DB_LOGIN	= "root";	  //資料庫的使用帳號
	$DB_PASSWORD	= "520360";	  //資料庫的使用密碼
	$DB_NAME	= "sanping_act"; //資料庫名稱


	header ( "Content-type:text/html;charset=utf-8" );

	$conn = mysqli_connect($DB_HOST, $DB_LOGIN, $DB_PASSWORD);
	mysqli_select_db($conn,$DB_NAME);

?>
