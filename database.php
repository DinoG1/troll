<?php
    $user = 'root';
    $pass = '';
    $server = 'localhost';
    $db_name = 'troll1';
	$db_salt = 'sdhg7432t55$&$%&';
    //povežem se s strežnikom
    $link = mysqli_connect($server, $user, $pass, $db_name);
        
?>