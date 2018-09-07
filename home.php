<?php 
	session_start();
	if(isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		echo "Welcome,". $email. "!";
        echo "<a href='logout.php'>Logout</a>";
        include 'Entertainment.html';
		
	}
	if(empty($email)){
		echo "You're not an authorized user. Please <a href='index.php'>login</a>.";
	}
    
    
?>

