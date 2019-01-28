<?php
// Start the session
session_start();

//data ke set?
if(isset($_POST['kirim'])){
	$_SESSION["register"] = "sukses";
	header("Location:../login.php");
	exit();
}
?>