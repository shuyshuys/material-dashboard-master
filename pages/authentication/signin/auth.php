<?php
session_start();
require('../../../assets/db/db.php');
				$username = $_POST['username'];
					$password = $_POST['password'];
					$query = "SELECT * FROM login WHERE username='$username' AND password ='$password'";
					$login = mysqli_query($con, $query);
					$cek = mysqli_num_rows($login);
					if($cek > 0){
						$data = mysqli_fetch_array($login);
						
						$_SESSION['username'] = $data['username'];
						header("location:../../../index.php");
					}else{
				echo"eror ";					
}
?>