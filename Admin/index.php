<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMARTBUZZCRYPTO | ADMIN</title>
    

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
        let user = $(".email").val();
        let pass = $(".pass").val();
        $(".fund").prop('disabled', true);
        $(".fund").html("Please wait...")
        //alert(pass);
        $.ajax({
              url: "../db/update.php",
              type:'post',
              data:({fund:1,email:user,amount:pass}),
              success: function(results) {
               
                if (results == "true") {
                    $(".report").html("<b style='color:green'> Successful </b>");
                } else {
                    $(".report").html("<b style='color:red'> Failed </b>");   
                }
                
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
                        <img src="../img_bg/EnterOTPpana.svg" alt="" style ="margin-top: 20vh;">
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div align="center" class="lbdy">
                        <h3 style="padding:40px" class="mlogo"><img src="https://smartbuzzcrypto.com/assets/img/favicons/favicon.png" alt="sbc" style="width: 20vw;margin-right: 2vw;"><b>SB-CRYPTO</b></h3>
                        <h4><b>Admin Control Panel</b></h4>
                        <h5>Fund Your clients here</h5>
                        <br>
                        <br>
                        <div class="report" style="color: red;"></div>
                        <form action="../db/login.php" method="post" class="form">
                            <input type="email" name="email" class="email" placeholder="Enter Client Email Address"required>
                            <br>
                            <input type="text" name="pass" class="pass" placeholder="Enter amount">
                            <br>
                            <br>
                            <br>
                            <button type="submit" name="sub" class="sub">Fund</button>
                        </form>
                        <hr>
                        <br>
                        
                    </div>                    
                </div>
            </div>
        </section>
    <main>

</body>
</html>