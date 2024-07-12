<?php

if(isset($_POST['sendcontact'])){
$to="hr@buildrich.in";
$name=$_POST['fname'];
$email=$_POST['Email'];
$Telephone=$_POST['phone'];
$Subject=$_POST['referance'];
$message=$_POST['message'];
$sub="New Contact Enquiry | BuildRich Website";
$msg="Name:$name\n Contact No:$Telephone\n Email:$email\n Subject:$Subject \n Message:$message";
$headers = "From: admin@buildrich.in" . "\r\n" .
     "Cc: collinmarketingsolutions@gmail.com \r\n" . 
    "Reply-To: ".$email. "\r\n" .
    
    "X-Mailer: PHP/" . phpversion();

$sent=mail($to,$sub,$msg,$headers);
if($sent)
{
    header("Location:contact-us.php?msg=1");
}
else{
    header("Location:contact-us.php?error=1");
} } 

if(isset($_POST['sendquote'])){
    $to="hr@buildrich.in";
    $name=$_POST['fname'];
    $email=$_POST['Email'];
    $Telephone=$_POST['phone'];
    $Subject=$_POST['referance'];
    $message=$_POST['message'];
    $sub="New Quote Request | BuildRich Website";
    $msg="Name:$name\n Contact No:$Telephone\n Email:$email\n Subject:$Subject \n Message:$message";
    $headers = "From: admin@buildrich.in" . "\r\n" .
        "Cc: collinmarketingsolutions@gmail.com \r\n" .
        "Reply-To: ".$email. "\r\n" .
        
        "X-Mailer: PHP/" . phpversion();
    
    $sent=mail($to,$sub,$msg,$headers);
    if($sent)
    {
        header("Location:get-quote.php?msg=1");
    }
    else{
        
        header("Location:get-quote.php?error=1");
   
    } } 
?>
