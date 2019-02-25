<?php
	//top of page
	 session_start();
	//set values	
	if (isset($_SESSION['name']) && !empty($_SESSION['name'])){
		$ses = $_SESSION['name'];
		$id = $_SESSION['id'];	
		$st = $_SESSION['status'];
		$rl = $_SESSION['role'];
		$mail = $_SESSION['mail'];
	}else{
		$_SESSION['name'] = " ";
		$id = $_SESSION['id'] = " ";	
		$st = $_SESSION['status'] = " ";
		$rl = $_SESSION['role'] = " ";
		$mail = $_SESSION['mail'] = " ";
	}
?>



