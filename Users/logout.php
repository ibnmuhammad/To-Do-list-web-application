<?php
	session_start();

	//remove all sessions
	session_unset();

	//destroy the sessions
	session_destroy();

	header('Location: ../index.php');
?>