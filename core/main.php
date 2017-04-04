<?php
	session_start();
	try
	{
		$mainClass = new $arr_path[0]();

		// check for extra '/'
		$count =  count($arr_path);
		foreach( $arr_path as $v )
		{
			if( !$v )
				$count--;
		}

		switch( $count )
		{
			case 1:
				try
				{
					include "view/".$mainClass->index().".php";
				}
				catch(Exception $e)
				{
					echo "Error Message here";
				}
			break;
			case 2:
				try
				{
					include "view/".$mainClass->$arr_path[1]().".php";
				}
				catch(Exception $e)
				{
					echo "Error Message here";
				}
			break;
			case 3: // ajax returns here
				echo $mainClass->$arr_path[1]( $arr_path[2], $_POST );
			break;
			default:
				echo "Error message here";
			break;
		}
	}
	catch(Exception $e)
	{
		echo "Error message here";
	}
?>