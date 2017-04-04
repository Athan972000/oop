<?php
	try
	{
		$arr_path = explode('/',$_GET['path']);
		// var_dump($arr_path);exit();
		require "core/config.php";
		require "controller/" . $config['controller']['prefix'] . $arr_path[0] . ".php";
		require "core/main.php";
	}
	catch(Exception $e)
	{
		echo "Error message here";
	}
?>