<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if( !(empty($name) || empty($email) || empty($message))){
if(isset($_POST['submit'])){
    $to = "uiu.151007@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
   // $name = $_POST['name'];
   // $message = $_POST['message'];
    $subject = "Complain";
    $subject2 = "Copy of your form submission";
    $message1 = $name  . "\n\n" . $message; 
    $message2 =  $name . "\n\n" . $message;//"Here is a copy of your message " 

    $headers = "From:" . $from ;
    $headers2 = "From:" . $to ;
    
    
    
    mail($to,$subject,$message1,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will check your mail shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
} else {
    echo "you should fill up every input";
}
?>
