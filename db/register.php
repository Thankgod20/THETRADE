<?php
include "db.php";


if (isset($_POST['sub'])) {
	
	$tbl = "user_details";
    $first_name = $_POST["fn"];
    $last_name = $_POST["ln"];
	$email = $_POST["em"];
	$password = $_POST["pw"];
    $phone = $_POST["pn"]; 
    $country = $_POST["cn"]; 
    $opnP = '{"open":[]}';
	 $sql_query = "SELECT * FROM `users` WHERE email = '$email'";
	 
	 $run = mysqli_query($conn,$sql_query) or die($sql_query);
	 
	 $message ='<html style="background-color: #ffffff;"><head></head><body align="center" style="align-content: center;color: #000000;background-color: #fafafa; padding:40px;">
	 	 
    <p align="center"><img src="https://smartbuzzcrypto.com/img_bg/brandname.png" style="width:30%"></p><br><div style="margin: 2px;padding: 10px;background-color: #909192;border-radius: 10px;"><b>Thank you for choosing to trade with smartbuzzcrypto, please find the login details below for your secure client area </b><br> 

  <p align="left">Your Login Credentials</p>
  <p align="left">User name: '.$email.'</p>

  
  
  </div>
  
  
<div style="margin: 2px;padding: 10px;background: #858585;border-radius: 10px;" align="center"><img src="https://binary24options.com/en/register/unnamed.png"><p style="/*! margin: 20px; *//*! padding: 20px; */">Whatsapp: +1 (405) 607-9674</p><p>Contact info: support@smartbuzzcrypto.com</p><p>OR</p><p style="background-color: #ffffff;padding: 20px;width: 10%;border-radius: 50px;">Live Chat</p></div><p style="font-size: 10px;color: white;">The financial services provided by this website carry a high level of risk and can
                  result in the loss of all of your funds. You should never invest money that you cannot
                  afford to lose. Please ensure you read our terms and conditions before making any operation
                  in our trading platform. Under no circumstances the company has any liability to any person
                  or entity for any loss or damage cause by operations on this website. </p></body></html>';
		$headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From: <support@smartbuzzcrypto.com>' . "\r\n";
        $headers .= 'Cc: reg@smartbuzzcrypto.com' . "\r\n";
	 
	 
	 if (mysqli_num_rows($run)>0) {
		
		echo "exist";
		
		exit();
	} else {
	 
	 $sql = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `country`, `deposit`, `demo`, `kyc`, `billing`, `numpostion`, `openposition`, `bankdetails`, `bankname`, `ssn`) VALUES (NULL,'$first_name','$last_name','$email','$password','$phone','$country','0.0','10000',0,'',0,'$opnP','','','')";
    //$sql = "INSERT INTO $tbl (`id`, `username`, `password`, `amount`, `profit`, `phoneNumber`, `demo_amount`,`demo_profit`,`First_name`,`imf_fee`,`broker_fee`,`upgrade`,`history`) VALUES (NULL, '$email', '$password','0.00','0.00',  '$phone',  '10000.00', '100.00','$first_name', '0.00', '0.00',0,'')";
	$run_query = mysqli_query($conn,$sql)or die($sql);
	
	if ($run_query) {
		
	 mail($email,'Account Creation',$message,$headers);
    echo "<b style='color:green'> Registration successfull Proceed to <a href='../login'>Login Page</a></b>";
	} else {
		echo "error";
	}
	}
	
}
	
	
	
	


?>