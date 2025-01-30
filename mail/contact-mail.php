<?php 
if(isset($_POST['submit'])){
    $to = "smile@sriramdental.com"; // this is your Email address 
    $from = $_POST['sendername']; // this is the sender's Email address
    $name = $_POST['sendername'];
    $email = $_POST['emailaddress'];
    $subject = $_POST['sendersubject'];
    $sendermess = $_POST['sendermessage'];
    $mobile = $_POST['telephone'];
    $message = "Looking For : " . $subject . "\n\n Name : " . $name . "\n\n Email : " . $email .  "\n\n Mobile No: " .  $mobile .  "\n\n Message: " .  $sendermess;
    $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);
    echo "<script> alert('Thank you for the message. We will contact you shortly.');
        window.location = '/'</script>";
  
    }
	
?>