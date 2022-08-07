<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMARTBUZZCRYPTO | Registration</title>
    <meta name="description" content="Forex and CRYPTO trading with SB-Crypto is easy and secure. Innovative Forex and CRYPTO platform with live assistance.">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="Forex and CRYPTO Trading with SB-Crypto">
<meta itemprop="description" content="Forex and CRYPTO trading with SB-Crypto is easy and secure. Innovative Forex and CRYPTO platform with live assistance.">
<meta itemprop="image" content="">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://smartbuzzcrypto.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="Forex and CRYPTO Trading with SB-Crypto">
<meta property="og:description" content="Forex and CRYPTO trading with SB-Crypto is easy and secure. Innovative Forex and CRYPTO platform with live assistance.">
<meta property="og:image" content="">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Forex and CRYPTO Trading with SB-Crypto">
<meta name="twitter:description" content="Forex and CRYPTO trading with SB-Crypto is easy and secure. Innovative Forex and CRYPTO platform with live assistance.">
<meta name="twitter:image" content="">

<link rel="icon" type="image/png" href="../assets/img/favicons/favicon-32x32.png" sizes="32x32" />

</head>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
<link href="../index.css" rel="stylesheet">
<script src="../assets/dist/js/jquery.js"></script>
    <script src="../assets/dist/js/jquery-ui.min.js"></script>
<script>

$(document).ready(function() {
    $('.form').submit(function(e) {
        
        e.preventDefault()
        let fn = $(".fn").val();
        let ln = $(".ln").val();

        let user = $(".email").val();
        let pass = $(".pass").val();
        let pn = $(".pn").val();
        let cn = $(".cn").val();
        $(".sub").prop('disabled', true);
        $(".sub").html("Please wait...")
        //alert(pass);
        $.ajax({
              url: "../db/register.php",
              type:'post',
              data:({sub:1,em:user,pw:pass,fn:fn,ln:ln,pn:pn,cn:cn}),
              success: function(results) {
                  if (results == "exist") {
                    $(".sub").prop('disabled', false);
                    $(".sub").html("Login");
                    $(".report").html("Email already Used")
                  } else if (results == "error") {
                    $(".sub").prop('disabled', false);
                    $(".sub").html("Login");
                    $(".report").html("Registration Failed")
                  } else {
                      $(".report").html(results)
                  }
                  
                   //console.log(results);
              }
            }) 
    })
})
</script>
<body>
    <main>
        <section>
            <div class="row loginx">
                <div class="col-md-6 mbd">
                    <h3 style="padding:40px"><img src="https://smartbuzzcrypto.com/assets/img/favicons/favicon.png" alt="sbc" style="width: 10vw;margin-right: 2vw;"><b>SB-CRYPTO</b></h3>
                    <div class="mbdx">
                        <img src="../img_bg/Signin-amico.svg" alt="" style ="margin-top: 20vh;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div align="center" class="lbdy">
                        <h3 style="padding:40px" class="mlogo"><img src="https://smartbuzzcrypto.com/assets/img/favicons/favicon.png" alt="sbc" style="width: 20vw;margin-right: 2vw;"><b>SB-CRYPTO</b></h3>
                        <h4><b>Sign Up to Our Platform</b></h4>
                        <h5>Securely buy crypto and start trading on a trusted exchange</h5>
                        <br>
                        <br>
                        <h5>Please fill all field as they are all required</h5>
                        <div class="report" style="color: red;"></div>
                        <form action="../db/login.php" method="post" class="form">
                            <div class="row" style="margin: 0 10%;">
                                <div class="col-md-6">
                                    <input type="text" placeholder="First Name" class="fn" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name" class="ln" required>
                                </div>
                            </div>
                            <input type="email" name="email" class="email" placeholder="Enter Your Email Address"required>
                            <br>
                            <input type="password" name="pass" class="pass" placeholder="Password" required>
                            <br>
                            <div class="row" style="margin: 0 10%;">
                                <div class="col-md-6">
                                    <input type="tel" placeholder="+xxxxxxxxxx" class="pn" pattern="[+]{1}[0-9]{11,14}" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Country" class="cn"  required>
                                </div>
                            </div>
                            <br>
                            <br>
                            <button type="submit" name="sub" class="sub">Signup</button>
                        </form>
                        <hr>
                        <br>
                        <b>Have An account ? </b><a href="#">Login</a>
                    </div>                    
                </div>
            </div>
        </section>
    <main>

</body>
</html>