<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['rollno'] = $row['rollno'];
            	$_SESSION['Course'] = $row['Course'];
            	$_SESSION['id'] = $row['id'];
            	$_SESSION['Year'] = $row['Year'];
              $_SESSION['Photo'] = $row['Photo'];
              $_SESSION['number'] = $row['number'];
              $_SESSION['attendence'] = $row['attendence'];
              $_SESSION['performance'] = $row['performance'];
              $_SESSION['fee'] = $row['fee'];
              $_SESSION['email'] = $row['email'];
              $_SESSION['f1'] = $row['f1'];
              $_SESSION['f2'] = $row['f2'];
              $_SESSION['f3'] = $row['f3'];
              $_SESSION['f4'] = $row['f4'];
              $_SESSION['f5'] = $row['f5'];
              
                            




            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}