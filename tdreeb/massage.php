<?php 
include 'config.php';

   if(isset($_POST['send'])) {
   // Prepare the email
   $message = $_POST['message'];
   $id = $_POST['id'];
   // Send it
   $sql = "INSERT INTO student (massage) VALUES ('$message') where StudID='$id'";
   $sent = mail($to, $subject, $message);
   if($sent) {
   echo 'Your message has been sent successfully!';
   } else {
   echo 'Sorry, your message could not send.';
   }
   }


?>
