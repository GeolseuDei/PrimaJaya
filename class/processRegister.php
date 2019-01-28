<?php
// Start the session
session_start();
// konek db
include_once ("connection.php");

//data ke set?
if(isset($_POST['regis'])){
	//cek password
	if ($_POST['password']!=$_POST['cekpassword']) {
		$_SESSION["register"] = "gagal";
		$_SESSION["Email"]="Password tidak sama silahkan input kembali";
		header("Location:../register.php");
		exit();
	}

	//cek sudah punya akun apa belum
	$sql="SELECT `Email` FROM `user` WHERE `Email`= '".$_POST['email']."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		//ada akun yang sama
		$_SESSION["register"] = "gagal";
		$_SESSION["Email"]="Email sudah terdaftar di sistem, silahkan ke halaman login";
		header("Location:../register.php");
		exit();
	}

	$sql ="INSERT INTO `user` (`Email`, `Password`, `NamaDepan`, `NamaBelakang`, `Alamat`) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['namaDepan']."', '".$_POST['namaBelakang']."', '".$_POST['alamat']."')";
	
	//berhasil
	if ($result = $conn->query($sql)) {
	// Set session variables
		$_SESSION["register"] = "sukses";
		header("Location:../login.php");
		exit();
	}
	//gagal
	else{
	// Set session variables
		$_SESSION["register"] = "gagal";
		$_SESSION["Email"]="gagal input data ke database";
		header("Location:../register.php");
		exit();
	}
}
//data ga ke set
else{
	// Set session variables
	$_SESSION["register"] = "gagal";
	$_SESSION["Email"]="data gagal terkirim";
	header("Location:../register.php");
	exit();
}


?>