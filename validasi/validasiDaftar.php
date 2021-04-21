<?php
	$eror2="";
	if (!isset($_SESSION)) {
		if (isset($_POST['daftar'])) {
			if (!empty($_POST['username']) && !empty($_POST['password']) ){
				$db = new PDO('mysql:host=localhost;dbname=medsosapp;','root','');
				$state = $db->prepare("SELECT `USERNAME` FROM `user` WHERE USERNAME=:username;");
				$state->bindValue(':username',$_POST['username']);			
				$state->execute();
				$count=$state->rowCount();
				if ($count>0) {
					$eror2="* Username tersebut Sudah terdaftar";
				}
				else {
                    $state = $db->prepare("INSERT INTO `user`(`USERNAME`, `PASSWORD`) VALUES  (:username,:password);");
                    $state->bindValue(':username',$_POST['username']);
                    $state->bindValue(':password',$_POST['password']);
                    $state->execute();
                    $count=$state->rowCount();
                    if ($count>0) {
                        $eror2="* Anda Berhasil Daftar";
                        header("location: index.php");
                        exit();
                    }
                    else {
                        $eror2="* inputan anda salah";
                    }
					
				}
			}
			
		}
	}
	else {
		header("location: user/index.php");
		exit();
	}
	

?>