<?php
	$eror2="";
	if (!isset($_SESSION)) {
		if (isset($_POST['login'])) {
			if (!empty($_POST['username']) && !empty($_POST['password']) ){
				$db = new PDO('mysql:host=localhost;dbname=medsosapp;','root','');
				$state = $db->prepare("SELECT * FROM `user` WHERE USERNAME=:username AND PASSWORD=:password ;");
				$state->bindValue(':username',$_POST['username']);
				$state->bindValue(':password',$_POST['password']);
				$state->execute();
				$hasil=$state->fetchAll(PDO::FETCH_ASSOC);
				$idSave='';
				foreach ($hasil as $key) {
					$idSave=$key['IDUSER'];
				}
				$count=$state->rowCount();
				if ($count>0) {
					session_start();
					$_SESSION['username']=$_POST['username'];
					$_SESSION['id_user']=$idSave;
					header("location: user/index.php");
					exit();
				}
				else {
					$eror2="* Inputan salah";
				}
			}
			
		}
	}
	else {
		header("location: user/index.php");
		exit();
	}
	

?>