<?php
require('db.php');
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

if(isset($_POST['title']) && isset($_POST['text']) &&  isset($_SESSION['username'])){
	$id = $_SESSION['username'];
	$title= $_POST['title'];
    $text= $_POST['text'];  
	$title = addcslashes($title, "'");
	$text = addcslashes($text, "'");
    $sql = "INSERT INTO post (user_id, title, text)
        VALUES ('$id', '$title','$text')";

    if (mysqli_query($conn, $sql)) {
        header('location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}else{


}


require('head.php');
require('header.html');
//Start the Session

require('db.php');
require('postForm.php')





 
?>

