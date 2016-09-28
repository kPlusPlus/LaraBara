<?php

/*
https://davidwalsh.name/backup-mysql-database-php
*/
$br = "\r\n";
$br = "<br>";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED);

echo "Start" . $br;

backup_tables('localhost','kreso','kreso1004','sakila');


/* backup the db OR just a table */
function backup_tables($host,$user,$pass,$name,$tables = '*')
{
	//echo "trace 1" . $br;
	$link = mysqli_connect($host,$user,$pass);
	mysqli_select_db($link,$name);
	echo "Trace 2";
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysqli_query($link,'SHOW TABLES');
		while($row = mysqli_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$result = mysqli_query($link,'SELECT * FROM '.$table);
		$num_fields = mysqli_num_fields($result);
		
		$return.= 'DROP TABLE IF EXISTS '.$table.';';
		$row2 = mysqli_fetch_row(mysqli_query($link,'SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysqli_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j < $num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					//$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					echo $row[$j];
					$row[$j] = preg_replace("#\n#","#\\n#",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j < ($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	//save file
	$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
}



?>