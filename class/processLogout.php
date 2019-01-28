<?php
// Start the session
session_start();
//user klik logout?
if(isset($_POST['logout'])){
	session_destroy();
	header("Location:../index.php");
	exit();
}
?>