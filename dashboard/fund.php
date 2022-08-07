<?php include("../db/session.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="OGHVTHISIS, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SMARTBUZZCRYPTO | FUND PAGE</title>

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
function copyToClipboard() {
            var copyLink=$('#copyLink').val();
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(copyLink).select();
            document.execCommand("copy");
            $temp.remove();
            alert("Copied On clipboard");
    }
function copyToClipboardeth() {
            var copyLink=$('#copyLinketh').val();
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(copyLink).select();
            document.execCommand("copy");
            $temp.remove();
            alert("Copied On clipboard");
    }
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
              <h1 class="headtext"><b>Fund </b> </h1>
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
              <h1 class="row"><div align="center" class="col-md-2"><div class="circle" style="padding:20px;width: 10px;height: 10px;border: 2px solid black;border-radius: 100px;"></div></div><div align="center" class="col-md-10"><b>Crypto Fund</b></div> </h1>
               
                <div class="row">
                  <div class="col-md-4">
                    <img src="../img_bg/Bitcoin-Logo.wine.svg" style ="width: 100%;" alt="" srcset="">
                  </div>
                  <div class="col-md-4">
                    <img src="../img_bg/Ethereum-Logo.wine.svg" style ="width: 100%;" alt="" srcset="">
                  </div>
                  <div class="col-md-4">
                    <img src="../img_bg/Binance-Logo.wine.svg" style ="width: 100%;" alt="" srcset="">
                  </div>
                  
              </div>
                
            </div>
            <div class="col-md-6">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Fund With Bitcoin
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>A minimum of 250 USD is required to fund the trading account</h5>.

                      <div align="center"><img style="width:80%" src="https://api.qrserver.com/v1/create-qr-code/?data=bc1q5qjl7nzeklw8e58kcdre2ukn6m3fp7pch8ard0&size=300x300" alt="">
                            <br><br>
                            <div style="border:1px solid black; padding:5px; border-radius:5px; overflow-x:hidden">
                                <b style="font-size:10px">bc1q5q...ard0<span style="font-size:15px;background:white; border:1px solid white" class="btn" onclick="copyToClipboard()"><i class='bx bxs-copy'></i></span></b>
                                <input type="hidden" value="bc1q5qjl7nzeklw8e58kcdre2ukn6m3fp7pch8ard0" id="copyLink">
                            </div><br><br>
                            <a target="_top" href="bitcoin:bc1q5qjl7nzeklw8e58kcdre2ukn6m3fp7pch8ard0?amount=0.81565848" class="payment__details__instruction__open-wallet__btn action-button btn" align="center" style="color:white"><span style="margin-left: 0px;">Open in wallet</span></a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      Fund With Ethereum
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>A minimum of 250 USD is required to fund the trading account</h5>.
                      <div align="center"><img style="width:80%" src="https://api.qrserver.com/v1/create-qr-code/?data=0x77F41C2b9dA71d8C1046D81672a557E275d8F6E0&size=300x300" alt=""><br><br>
                      <div style="border:1px solid black; padding:5px; border-radius:5px; overflow-x:hidden">
                                <b style="font-size:10px">0x77F4...F6E0<span style="font-size:15px;background:white; border:1px solid white" class="btn" onclick="copyToClipboardeth()"><i class='bx bxs-copy'></i></span></b>
                                <input type="hidden" value="0x77F41C2b9dA71d8C1046D81672a557E275d8F6E0" id="copyLinketh">
                            </div><br><br>
                            <a target="_top" href="bitcoin:0x77F41C2b9dA71d8C1046D81672a557E275d8F6E0?amount=0.81565848" class="payment__details__instruction__open-wallet__btn action-button btn" align="center" style="color:white"><span style="margin-left: 0px;">Open in wallet</span></a></div>
                      
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                      Fund With BSC
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>A minimum of 250 USD is required to fund the trading account</h5>.
                      <div align="center"><img style="width:80%" src="https://api.qrserver.com/v1/create-qr-code/?data=0x77F41C2b9dA71d8C1046D81672a557E275d8F6E0&size=300x300" alt=""><br><br>
                      <div style="border:1px solid black; padding:5px; border-radius:5px; overflow-x:hidden">
                                <b style="font-size:10px">0x77F4...F6E0<span style="font-size:15px;background:white; border:1px solid white" class="btn" onclick="copyToClipboardeth()"><i class='bx bxs-copy'></i></span></b>
                                <input type="hidden" value="0x77F41C2b9dA71d8C1046D81672a557E275d8F6E0" id="copyLinketh">
                            </div><br><br>
                            <a target="_top" href="bitcoin:0x77F41C2b9dA71d8C1046D81672a557E275d8F6E0?amount=0.81565848" class="payment__details__instruction__open-wallet__btn action-button btn" align="center" style="color:white"><span style="margin-left: 0px;">Open in wallet</span></a></div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
        </div>
      </section>
      <section class="container">
    
        <div class="bg-gray p-5 rounded">
          <div class="row">
            

            <div class="col-md-6">
              <form action="" method="post">
                <label for="wallet">Account Number (Includind IBAN or Routering number)</label>
                <input type="text" class="form-control" value="0012404334503" placeholder="wallet address" disabled>  
                <br>
                <label for="amount">Enter Amount <span>in USD</span></label>   
                <input type="Text" class="form-control"  value=">250 USD"placeholder="20USDT" disabled>  
                <label for="amount">Bank <span></span></label>   
                <input type="text" class="form-control" value="CITI BANK" placeholder="Citi Bank" disabled>   
                <br>
                <br>
               
              </form>
            </div>
            <div class="col-md-6" >    
              <h1 class="row" ><div align="center" class="col-md-2"><div class="circle" style="padding:20px;width: 10px;height: 10px;border: 2px solid black;border-radius: 100px;"></div></div><div align="center" class="col-md-10"><b>Bank Transfer</b></div> </h1>
                <p class="lead" align="center">Bank transfer take approximately 24hrs
                </p>
                
            </div>
          </div>
    
        </div>
      </section>
      <section class="container" id="CBONUS">
    
        <div class="bg-light p-5 rounded">
          <div class="row">
            <div class="col-md-6">    
              <h1 class="row"><div align="center" class="col-md-2"><div class="circle" style="padding:20px;width: 10px;height: 10px;border: 2px solid black;border-radius: 100px;"></div></div><div align="center" class="col-md-10"><b>BONUS</b></div> </h1>
              <p align="center">
                Explore the list of bonuses assigned to different users based on their interaction with the platform
              </p>
               
                
                
            </div>
            <div class="col-md-6">
              <div class="accordion" id="accordionExampleT">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneB" aria-expanded="true" aria-controls="collapseOne">
                      Crypto Bonus
                    </button>
                  </h2>
                  <div id="collapseOneB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExampleT">
                    <div class="accordion-body">
                      <h5>For every 250 crypto deposit a 10% bonus is given to client</h5>.
                      
                      
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      Bronze Account Bonuse
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExampleT">
                    <div class="accordion-body">
                      <h5>For Bronze Account users (new User) 5% bonus of initial deposit is added</h5>.
                      
                      
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                      Silver and Gold Account Users
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExampleT">
                    <div class="accordion-body">
                      <h5>Long term users are entitled to 20% bonus of the initial deposit</h5>.
                      
                      
                    </div>
                  </div>
                </div>
              </div>
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