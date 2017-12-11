<?php

	$form_data = [];
	$fname        	= $_POST['fname'];
	$email        	= $_POST['email'];


	$message     	= "First Name: $fname, \n Email: $email ";

	if(mail('hackathon@johannstrama.de', "[HackathonFu2016] New Registration!", $message))
		$form_data['success'] = true;
	else
		$form_data['success'] = false;

	echo json_encode($form_data);
	return;
?>
