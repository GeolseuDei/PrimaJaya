<?php
// Start the session
session_start();
// konek db
include_once ("connection.php");

//data ke set?
if(isset($_POST['login'])){
	//cek sudah punya akun apa belum
	$sql="SELECT `Email`,`Password` FROM `user` WHERE `Email`= '".$_POST['email']."'";
	$result = $conn->query($sql);

	//punya akun
	if ($result->num_rows > 0) {
    // output data of each row
		while ($row = $result->fetch_assoc()) {
			if($row['Password']==$_POST['password']){
				$_SESSION["login"] = "sukses";
				header("Location:../index.php");
				exit();
			}
			else{
				$_SESSION["login"] = "gagal";
				$_SESSION["note"]="Password Salah";
				header("Location:../login.php");
				exit();
			}
		}
	}

	//akun tidak terdaftar
	else{
		$_SESSION["login"] = "gagal";
		$_SESSION["note"]="Akun anda belum terdaftar, silahkan daftar terlebih dahulu";
		header("Location:../login.php");
		exit();
	}
}
?>