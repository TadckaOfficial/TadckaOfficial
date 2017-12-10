<?php 

if($_POST['request']) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$sendMessage = $_POST['sendMessage'];

	$link = mysqli_connect('localhost', 'root', 'root', 'frontend_message') or die;

	$query = "INSERT INTO form_message (name, email, subject, message) VALUES('" .$name . "','" . $email . "','" . $subject . "','" . $sendMessage . "')";
	
	if(mysqli_query($link, $query)) {
		echo "omg you send message :OOO !!!";
	}else{
		echo "no way!!!! dont panic please try again!!!";
	}
}

?>