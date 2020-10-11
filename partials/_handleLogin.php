<?php 
$showError = "fasle";
if ($_SERVER["REQUEST_METHOD"]=="POST") {

	include '_dbconnect.php';
	$email = $_POST['loginEmail'];
	$pass = $_POST['loginPass'];
	
	$sql = "SELECT * FROM users WHERE user_email = '$email' ";
	$result = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($result);

	if ($numRows == 1) {
		$row = mysqli_fetch_assoc($result);
		if (password_verify($pass, $row['user_pass'])) {
			
			session_start();
			 $_SESSION['loggedin'] = true;
			 $_SESSION['sno'] = $row['sno'];
			 $_SESSION['username'] = $email;
			 echo "loggedin".$email;
			 
			 
		}
		header("Location: /forumWebsite/index.php");
		
	}
	header("Location: /forumWebsite/index.php");
	 
}
?>