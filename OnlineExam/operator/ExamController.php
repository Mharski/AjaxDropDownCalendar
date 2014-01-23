<?php 
	require_once('operator/controller.php');
	$control = new Control();
	/*
	* Array $config(configuration) for the Datas
	* Building Connection to the Database
	* Selecting of Database
	*/
	$config = array('file' => 'localhost', 
	               'username' => 'root', 
	               'password' => '', 
	               'database' => 'online_exam');

	mysql_connect($config['file'], 
	              $config['username'], 
	              $config['password']);
	mysql_select_db($config['database']);

         $request = isset($_POST['action'])?$_POST['action']:"";

         if ($request == "forward"){
             $bible->getForward($_POST['id'],
                                $_POST['testQuestion'],
                                $_POST['choiceA'],
                                $_POST['choiceB'],
                                $_POST['choiceC'],
                                $_POST['choiceD']);
         }
         
 ?>