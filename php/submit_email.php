<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $customerEmail = $_POST['customeremail'];
    $mailHost = $_POST['mailhost'];
    $mailPort = $_POST['mailport'];
    $mailEncryption = $_POST['mailencryption'];
    $mailAuth = $_POST['mailauth'];
    $mailFrom = $_POST['mailfrom'];
    $mailUsername = $_POST['mailusername'];
    $mailPassword = $_POST['mailpassword'];
    $inputsMsg = $_POST['inputsmessage'];
    $summaryMsg = $_POST['summarymessage'];
    $customerWebsiteLink = $_POST['uniqueLinkOfCustomer'];

    require 'class.smtp.php';
    require 'class.phpmailer.php';

    $body = "";

    // $body .= "<br>Thank you for your order";
    $body .= "<br><div style='text-align:center; background: #0099CC;height:75px;'><img src='https://quote.360homeconnect.com/images/logo.png' style='width:auto;height:75px;'></div>";

    $body .= "</br><p style='font-size:24px'>Unique link For Cutomer </p>" . $customerWebsiteLink;
    $body .= "	<div>
			<div>
				<hr style='height: 8px; background-color: #0099cc' />
				<div style='width: 77%; margin-left: auto; margin-right: auto'>
					<div
						style='
							background-color: black;
							color: #0099cc;
							font-size: 35px;
							font-weight: bold;
							text-align: center;
							padding: 20px;
							border: 6px solid #0099cc;
						'
					>
						Thank you for your order!
					</div>
				
				</div>
				<div style='text-align:center'>
					<div style='justify-content: center !important; display: inline-flex !important;flex-direction: row !important;flex-wrap: wrap !important;'>
						<div
							style='
								margin: 5px;
								background-color: #0099cc;
								width: 200px;
								height: 200px;
								text-align: center;
							'
						>
							<img
								src='https://quote.360homeconnect.com/images/tick.png'
								style='margin-top: 15px'
								width='40%'
								alt=''
							/>
							<p
								style='
									font-size: 22px;
									line-height: 25px;
									margin-top: 15px;
									font-weight: bold;
								'
							>
								Ordered on 17th Feb
							</p>
						</div>
						<div
							style='
								margin: 5px;
								background-color: #0099cc;
								width: 200px;
								height: 200px;
								text-align: center;
							'
						>
							<img
								src='https://quote.360homeconnect.com/images/truck.png'
								style='margin-top: 15px'
								width='60%'
								alt=''
							/>
							<p
								style='
									font-size: 22px;
									line-height: 25px;
									margin-top: 15px;
									font-weight: bold;
								'
							>
								Ready To Ship
							</p>
						</div>
						<div
							style='
								margin: 5px;
								background-color: #0099cc;
								width: 200px;
								height: 200px;
								text-align: center;
							'
						>
							<img
								src='https://quote.360homeconnect.com/images/bike.png'
								style='margin-top: 15px'
								width='40%'
								alt=''
							/>
							<p
								style='
									font-size: 22px;
									line-height: 25px;
									margin-top: 15px;
									font-weight: bold;
								'
							>
								Expected Delivery
							</p>
						</div>
					</div>
				</div>
			</div>

			<div
				style='
					background-color: #0099cc;
					padding: 10px;
					width: 88%;
					margin-left: auto;
					margin-right: auto;
					margin-top: 50px;
				'
			>
				<div
					style='
						background-color: black;
						color: white;
						font-size: 45px;
						text-align: center;
						width: 90%;
						padding: 5px;
						margin-left: auto;
						margin-right: auto;
					'
				>
					Client Details
				</div>
			</div>
			<div style='margin-left: 5%;margin-right: 5%;background: #e4e4e6;padding: 80px;'>
				<div>" . $inputsMsg . "</div>
				<div>" . $summaryMsg . "</div>
			</div>
			<footer style='background-color: black; text-align: center;margin-left: 5%;margin-right: 5%;'>
				<div
					style='color: white; text-align: center; padding: 10px; line-height: 10px'
				>
					<p
						style='color: #0099cc; font-size: 30px; padding: 15px; font-weight: bold'
					>
						Contact Us
					</p>
					<p style='font-weight: bold; margin-bottom: 20px'>Justin Sigman</p>
					<p>Managing Partner</p>
					<p>360 Home Connect</p>
					<p>Cell: (321) 543-9452</p>
					<p>Office: (773) 543-9452</p>
				</div>
				<div style='display: flex; flex-direction: row'></div>
				<img src='https://quote.360homeconnect.com/images/logo.png' width='100px' height='60px' alt='' />
			</footer>
		</div>";
    // $body .= "</br>" . $inputsMsg;
    // $body .= "</br>" . $summaryMsg;

    $subject = "Details";
    $from = "360HomeConnect";

    $mail = new PHPMailer();

    $mail->SMTPDebug = true;
    $mail->Host = "smtp.office365.com";
    $mail->Port = "587";
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);

    // For Checking On Ibrahim Bhai Server
    // $mail->IsSMTP();
    // $mail->CharSet = 'UTF-8';
    // $mail->Host = "mail.emeraldsoft.uk";
    // $mail->Port = "587";
    // $mail->SMTPAuth = true;
    // $mail->isHTML(true);

    $mail->setFrom($from, '360HomeConnect Team'); // Mail Form

    // For Testing Purpose (Ibrahim Bhai Data)
    // $mail->From = "ibrahim@emeraldsoft.uk";
    // $mail->Username = "ibrahim@emeraldsoft.uk";
    // $mail->Password = "zamurdStone_tea1";

    // // Actual One
    $mail->From = $mailUsername;
    $mail->Username = $mailUsername;
    $mail->Password = $mailPassword;

    // For Testing Purpose
    // $mail->From = "cjp@360homeconnect.com";
    // $mail->Username = "cjp@360homeconnect.com";
    // $mail->Password = "P@n@d3r0";

    $mail->addAddress($mailUsername);
    $mail->addAddress($customerEmail);

    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody = $body;

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Feedback has been sent";

    }
    // __________________________________________________________________________
}