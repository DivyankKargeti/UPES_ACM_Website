<?php 

 if(isset($_POST['submit']))
 {
 	$name = $_POST['fname'];
 	$email = $_POST['email'];
 	$msg = $_POST['message'];

 	$to = 'hdrdivyank@gmail.com';
 	$subject1 = 'UPES ACM | Website Form Submission';
 	$message1 = "Name: ".$name."\n"."Message:".$msg."\n";
 	$header  = "From: ".$email;

 	if(mail($to, $subject1, $message1, $header))
 	{
 		?>
 		<script>alert('Message Sent Successfully,Thanks for contacting me!');
     window.open('index.html','_self'); 
 	</script>
 		<?php
     	}
 	else
 	{
 		echo "wrong";
 	}
 }
 ?>