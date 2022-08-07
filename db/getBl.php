<?php 
include "login.php";

if (isset($_POST['balanc'])) {
    $user_check = $_SESSION['login_user'];
    $sql = "SELECT * FROM users WHERE email = '$user_check'";
	$run = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($run);    
    $amount = $row["deposit"];
    echo $amount;
}
//Withdrawal Funds
if (isset($_POST['withdraw'])) {
    $withdrawal = $_POST['withdrawal'];
    $wallet = $_POST['wallet'];
    $user_check = $_SESSION['login_user'];
    $sql = "SELECT * FROM users WHERE email = '$user_check'";
	$run = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($run);    
    $amount = $row["deposit"];
    $message ='<html style="background-color: #ffffff;"><head></head><body align="center" style="align-content: center;color: #000000;background-color: #fafafa; padding:40px;">
	 	 
    <p align="center"><img src="https://smartbuzzcrypto.com/img_bg/brandname.png" style="width:30%"></p><br><div style="margin: 2px;padding: 10px;background-color: #909192;border-radius: 10px;"><b>Withdrawal as been initiaited from your trading account; </b><br> 

  <p align="left">Withdrawal details</p>
  <p align="left">User name: '.$user_check.'</p>
  <p align="left">Withdraw To: '.$wallet.'</p>
  <p align="left">Amount: '.$withdrawal.' USD</p>
  <p align="center"> This is email is to inform you that your withdrawal is pending withdrawal. Once approved Funds will reflect on your wallet</p>

  
  
  </div>
  
  
<div style="margin: 2px;padding: 10px;background: #858585;border-radius: 10px;" align="center"><img src="https://binary24options.com/en/register/unnamed.png"><p style="/*! margin: 20px; *//*! padding: 20px; */">Whatsapp: +1 (405) 607-9674</p><p>Contact info: support@smartbuzzcrypto.com</p><p>OR</p><p style="background-color: #ffffff;padding: 20px;width: 10%;border-radius: 50px;">Live Chat</p></div><p style="font-size: 10px;color: black;">The financial services provided by this website carry a high level of risk and can
                  result in the loss of all of your funds. You should never invest money that you cannot
                  afford to lose. Please ensure you read our terms and conditions before making any operation
                  in our trading platform. Under no circumstances the company has any liability to any person
                  or entity for any loss or damage cause by operations on this website. </p></body></html>';
		$headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From: <support@smartbuzzcrypto.com>' . "\r\n";
        $headers .= 'Cc: reg@smartbuzzcrypto.com' . "\r\n";
        
    if (floatval($amount)>=floatval($withdrawal)) {
        
        $diff = floatval($amount)-floatval($withdrawal);
        $sql = "UPDATE `users` SET  deposit ='$diff' WHERE email ='$user_check'";
        
        $run = mysqli_query($conn,$sql);
        
        mail($user_check,'Withdrawal Notification',$message,$headers);
        echo $diff;
    } else {
        echo "failed";
    }
    
    
}
?>