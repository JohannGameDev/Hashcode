<?php

	$form_data = [];
	$fname        	= $_POST['fname'];
	$email        	= $_POST['email'];


	$message     	= "First Name: $fname, \n Email: $email ";

	if(mail('hackathon@inf.fu-berlin.de', "[HackathonFu2017] New Registration!", $message))
		$form_data['success'] = true;
	else
		$form_data['success'] = false;

	echo json_encode($form_data);
	return;
?>
