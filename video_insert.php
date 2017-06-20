<?php

include_once 'database.php';
include_once 'session.php';

$url         =  ($_POST['video']);
$title       =  ($_POST['title2']);

    
    $step1 = explode('v=', $url);
    $step2 = explode('&',$step1[1]);
    $vedio_id = $step2[0];
    
    
    
    
    
    $query = sprintf("INSERT INTO posts(user_id, title, yturl, type) 
        VALUES (%s,'%s','%s', '%s')", mysqli_real_escape_string($link, $_SESSION['user_id']), mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $vedio_id), mysqli_real_escape_string($link, '1'));

    mysqli_query($link, $query);
    //shrani si zadnji id, ki je bil dodan v bazo
    $id = mysqli_insert_id($link);
    
    header('location: index.php')

    
?>



<iframe src="http://www.youtube.com/embed/ "width="320" height="240" frameborder="0"> </iframe>