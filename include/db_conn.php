<?php

	$DB_HOST	= "localhost";	  //��Ʈw�D����m
	$DB_LOGIN	= "root";	  //��Ʈw���ϥαb��
	$DB_PASSWORD	= "520360";	  //��Ʈw���ϥαK�X
	$DB_NAME	= "sanping_act"; //��Ʈw�W��


	header ( "Content-type:text/html;charset=utf-8" );

	$conn = mysqli_connect($DB_HOST, $DB_LOGIN, $DB_PASSWORD);
	mysqli_select_db($conn,$DB_NAME);

?>
