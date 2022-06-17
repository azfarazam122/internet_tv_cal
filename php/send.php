<?php



if($_SERVER['REQUEST_METHOD']=='POST'){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $customerEmail=$_POST['customeremail'];
  $message=$_POST['emailmessage'];
  $mailHost=$_POST['mailhost'];
  $mailPort=$_POST['mailport'];
  $mailEncryption=$_POST['mailencryption'];
  $mailAuth=$_POST['mailauth'];
  $mailFrom=$_POST['mailfrom'];
  $mailUsername=$_POST['mailusername'];
  $mailPassword=$_POST['mailpassword'];
 
 // $message=$_POST['message'];

      //  $to1="losel88@gmail.com";	
       	//	$to1="hello@mybizsell.com";   
		
		$subject1="Message From " .$name;
		$from= $email;
		$headers="From:".$from;
		$body1=' 
Some one sent email from Message From Emeraldsof contact form,
here are the details:-

Name:'.$name.'
Email:'.$email.'
Results:-'.$message.'';
 
			//mail("emeraldsoft2@gmail.com","Activity in calculator",$body1,"Message From Emeraldsoft");
			//mail("ibrahimanjum93@outlook.com","Activity in calculator",$body1,"Message From Emeraldsoft");
			
		 require 'class.smtp.php';
	 require 'class.phpmailer.php';
	
    $mail = new PHPMailer();
  //  $mail->IsSMTP();
  //      $mail->Host = $mailHost;
  //       // _____________
  //       $mail->Port = $mailPort;
  //       $mail->SMTPSecure = $mailEncryption;
  //       $mail->SMTPAuth = $mailAuth;
  //       // _____________
  //       $mail->From = $mailFrom;
  //       $mail->Username = $mailUsername;
  //       $mail->Password = $mailPassword;
  //      $mail->AddAddress($email);
  //      $mail->AddAddress($customerEmail);
  //       $mail->Subject  = "Message from Internet Tv Cal";
  //       $mail->Body = $body1;
  //       $mail->WordWrap = 50;
   $mail->IsSMTP();
    $mail->Host = "mail.emeraldsoft.uk";
    // _____________
    // $mail->Port = "587";
    // $mail->SMTPSecure = "tls";
    // $mail->SMTPAuth = true;
    // _____________
    $mail->From = "ibrahim@emeraldsoft.uk";
    $mail->Username = "ibrahim@emeraldsoft.uk";
    $mail->Password = "zamurdStone_tea1";
   // $mail->AddAddress("ibrahimanjum93@outlook.com");
   $mail->AddAddress("emeraldsoft2@gmail.com");
    $mail->Subject  = "Message from website contact form";
    $mail->Body = $body1;
    $mail->WordWrap = 50;

    if(!$mail->Send()) {
          echo 'Message was not sent.';
          echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
}
?>