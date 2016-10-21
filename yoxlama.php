<?php

	$name = $_POST['name'];
	$email = $_POST['e-mail'];
	$password = $_POST['password'];
	$message = $_POST['message'];


	if (empty($name) || empty($email) || empty($password) || empty($message)) {
	echo "Ad yerini boş buraxa bilməzsiniz";
	}
	else{
		echo "Salam $name - sizin ısmarıcınız qeydə alındı , Cavab -$email- göndəriləcək";
	}



?>