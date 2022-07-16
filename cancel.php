<?php

session_start();

if (isset($_SESSION["uid"])) {
	session_destroy();
	header("location:profile.php");
}else{
	header("location:profile.php");
}

?>

