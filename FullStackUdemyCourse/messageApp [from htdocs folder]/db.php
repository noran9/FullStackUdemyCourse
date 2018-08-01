<?php

	$conn = mysqli_connect('localhost', 'root', '123456', 'messageApp');

	if (mysqli_connect_errno()){
		echo 'DB Connecton error: ' . mysqli_connect_error();
	}

