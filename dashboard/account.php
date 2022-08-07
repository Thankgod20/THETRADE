<?php include("../db/session.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="OGHVTHISIS, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SMARTBUZZCRYPTO | ACCOUNT INFO</title>

<link rel="icon" type="image/png" href="../assets/img/favicons/favicon-32x32.png" sizes="32x32" />
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
<link href="../index.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
        }
    </style>
    <script src="../assets/dist/js/jquery.js"></script>
    <script src="../assets/dist/js/jquery-ui.min.js"></script>
    <script>

$(document).ready(function() {

  let json = JSON.parse($(".amount").val());
  $(".openPst").html("Open Positions: "+json.open.length)
  $(".openPst2").html("Open Positions: "+json.open.length)
  
});
    </script>
    
    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
    </head>
    <body>
    
<nav class="navbar navbar-expand-md mb-4" style="margin-bottom: 1px !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="./"><img src="https://smartbuzzcrypto.com/assets/img/favicons/favicon.png" alt="sbc" style="width: 25%;margin-right: 2vw;"><b>SB-CRYPTO</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class='bx bx-menu' style="font-size: 30px;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trade Option</a>
          <ul class="dropdown-menu dropdown-menu-dark drop-dzn row" aria-labelledby="navbarDarkDropdownMenuLink">
            <div class="row">
              <div class="col-md-6">
                <li><h3><i class='bx bx-run' ></i><b>Deposit & Withdraw</b></h3></li>
                <li><a class="dropdown-item" href="./fund.php"><h5><i class='bx bx-wallet-alt' ></i>   Funding</h5></a></li>    
                <li><a class="dropdown-item" href="./withdrawal.php"><h5><i class='bx bx-wallet-alt' ></i>   Withdrawal</h5></a></li>            
              </div>
              <div class="col-md-6">
                <li><h3><i class='bx bx-money' ></i>Bonus</h3></li>
                <li><a class="dropdown-item" href="./fund.php#CBONUS"><h5><i class='bx bx-user-circle' ></i>  Account type Bonuse</h5> </a></li>
                <li><a class="dropdown-item" href="./fund.php#CBONUS"><h5><i class='bx bx-wallet-alt' ></i> Funding and Withdrawal Bonus</h5>  </a></li>  
              </div>              
            </div>


          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./account.php">Personal Information</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="./trades.php">Trade History</a>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled">Acct:-100243410</a>
        </li>
      </ul>
      <form class="d-flex">
        
        <a class="btn btn-outline-success" href="../db/logout.php">Logout</a>
      </form>
    </div>
  </div>
</nav>
<main>
    <section class="container">
    
      <div class="bg-light p-5 rounded bg-img">
        <div class="row">
          <div class="col-md-6">    
              <h1 class="headtext"><b>Account Information </b> </h1>
              <p class="lead">Instant deposit with crypto
              </p>
              
          </div>
          <div class="col-md-6"></div>
        </div>
  
      </div>
    </section>
    <section class="container">
    
        <div class="bg-gray p-5 rounded">
          <div class="row">
  
              <h1 class="row"><div align="center" class="col-md-2"></div><div align="center" class="col-md-10"><b>Account Summary</b></div> </h1>
                <p class="lead">
                  <h3>Account Main Balance: <?php echo $amount?> USD</h3>
                  <h3>Account Demo Balance: <?php echo $row['demo']?> USD</h3>
                  <h4 class="openPst">Open Positions: 0</h4>
                  <h2><b>In seven Days</b></h2>
                  <h5 class="openPst2">Total current trades: </h5>
                  
                </p>
                
           
            
          </div>
    
        </div>
      </section>
      <section class="container">
    
        <div class="bg-light p-5 rounded">
          <div class="row">
            <div class="col-md-6">    
              <h1 class="row"><div align="center" class="col-md-2"><div class="circle" style="padding:20px;width: 10px;height: 10px;border: 2px solid black;border-radius: 100px;"></div></div><div align="center" class="col-md-10"><b>Personal Information</b></div> </h1>

                
            </div>
            <div class="col-md-6">
                <h4>First name:- <?php echo $row['firstname']?></h4>
                <h4>Last name:- <?php echo $row['lastname']?></h4>
                <h4>Email:-<?php echo $row['email']?></h4>
                <h4>Country:-<?php echo $row['country']?></h4>
                <h4>Phone Number:-<?php echo $row['phone']?></h4>
                <h4>Account umber:-1002434<?php echo $row["id"]?></h4>
            </div>
          </div>
    
        </div>
      </section>


</main>
<footer>
    <section>
        <div  style="padding: 10%; background-color:rgb(210, 209, 209)">
          <h6 class="footertext">
            The financial services provided by this website carry a high level of risk and can result in the loss of all of your funds. You should never invest money that you cannot afford to lose. Please ensure you read our terms and conditions before making any operation in our trading platform. Under no circumstances the company has any liability to any person or entity for any loss or damage cause by operations on this website. SmartBuzzCrypto nor its agents or partners are not registered and do not provide any services on the USA territory.
          </h6>
          <div class="row">
            <div class="col-md-6"><h6 class="footertext">© 2018</h6></div>
            <div class="col-md-6" align="right"><a class="abtC" href="../terms"><h6 class="footertext">terms and conditions</h6></a></div>
          </div>
        </div>
      </section>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="//code.tidio.co/sfrxplmrpumibp6lmisltzkrdmitfiib.js" async></script>
</body>
</html>