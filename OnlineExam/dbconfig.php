<?php
require_once "ExamDAO.php";
require_once "Exam.php";
	$config = array(
		'host' => 'localhost',
		'password' => 'root',
		'database' => 'online_exam');

	$db = mysql_connect($config['host'],$config['password']) && mysql_select_db($config['database']);

 ?>