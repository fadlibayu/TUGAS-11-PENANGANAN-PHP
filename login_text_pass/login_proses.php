<?php 
if(isset($_POST['Login'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	if($user=="Cindra" && $pass=="Cindra123"){
		echo("<h2>Login berhasil, selamat datang </h2>");
	}else{
		echo "<h2> Login Gagal, ulang lagi </h2>";
	}
}
?>