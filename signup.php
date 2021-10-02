<?php

$db = mysqli_connect('localhost', 'root', '', 'tododb');

if(isset($_POST['submit'])) {

	$Email = $_POST['Email'];
	$Name = $_POST['name'];
	$Password = $_POST['password'];
	$Password2 = $_POST['password2'];

	if($Password == $Password2) {

		$sql = "INSERT INTO users(Email, name, password) VALUES('$Email', '$Name', '$Password')";

		$result = mysqli_query($db, $sql);

		echo "Successfully registered";
		header('Location: index.php');

	}

	else {
		echo "<script> window.alert('Passwords mismatch') </script>";

	}

}

?>