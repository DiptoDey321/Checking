<?php
//get data from form  
$trxid = $_POST['trxid']
$name = $_POST['name'];
$email = $_POST['email'];
$donate= $_POST['donate'];
$to = "diptodey2005@gmail.com";
$subject = "Mail From G4H";

$trxid ="TrxID Of The Transaction = ". $trxid . "\r\n  Name Of The Donator = " . $name . "\r\n Number of Donation Number =" . $donate . "\r\n Email Address Of The Donator =" . $email . "\r\n  Donated Amount = " . $donate .;
$headers = "From: G4H website" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thankYou.html");
}
//redirect

?>