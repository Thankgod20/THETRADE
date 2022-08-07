<?php include("../db/session.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="OGHVTHISIS, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SMARTBUZZCRYPTO | HOME PAGE</title>

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

    
    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">


    <script src="../assets/dist/js/jquery.js"></script>
    <script src="../assets/dist/js/jquery-ui.min.js"></script>
<script>

$(document).ready(function() {
    var mainPair = "";
    let json = JSON.parse($(".amount").val());
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
                            keyboard: false
                        });
    var initTrade = new bootstrap.Modal(document.getElementById('trade'), {
                            keyboard: false
                        });
/**
{"s":"BTC-USD","p":"23738.66000000","q":"0.00211000","dc":"0.4008","dd":"95.1500","t":1659275138111}

 */
    //websocket
    var socket = new WebSocket('wss://ws.eodhistoricaldata.com/ws/crypto?api_token=demo');
    socket.onopen = function(e) {
    console.log('Connection Established')
        // socket.send("My name is John");
    };

    socket.onmessage = function(event) {
        //console.log(event.data);
        var price = JSON.parse(event.data);
        if (price.s == "BTC-USD")
          $(".price").val(JSON.stringify(price.p).substr(1,10))
        if (price.s == mainPair) {
          $(".cprix").val(JSON.stringify(price.p).substr(1,10));
          $(".trd_btn").prop('disabled', false);
          $(".trd_btn").html("Trade")
        }
          

        wsUpdatepair(price.s,price)  
        socket.send('{"action": "subscribe", "symbols": "ETH-USD"}')
        socket.send('{"action": "subscribe", "symbols": "BTC-USD"}')
        
    };

    socket.onclose = function(event) {
    if (event.wasClean) {
        console.log('[close] Connection closed cleanly, code=${event.code} reason=${event.reason}')
    } else {
        // e.g. server process killed or network down
        // event.code is usually 1006 in this case
        console.log('[close] Connection died');
    }
    };

    socket.onerror = function(error) {
        console.log('[error] ${error.message}')
    };

    function wsUpdatepair(pair,price) {
      var profit = 0;
      
      $.each($(".pftList"),function() {
        let y = $(this).find(".cprix").html() != "" ? parseFloat($(this).find(".cprix").html()):0;
        let mX = $(this).find(".camtx").html() != "" ? parseFloat($(this).find(".camtx").html()):0;
        let pValue = $(this).find(".vpl").html();
        let pst = $(this).find(".pst").html();

        if (pair == pValue) {
            if (pst == "BUY") {
              let mainP = JSON.stringify(price.p).substr(1,10);
              let x = parseFloat(mainP);
              let CHG = (x-y)/y;
              let incX = mX *CHG;
              let nwX = mX + incX;
              $(this).find("."+pair).html(nwX.toFixed(3))              
            } else {
              let mainP = JSON.stringify(price.p).substr(1,10);
              let x = parseFloat(mainP);
              let CHG = (y-x)/y;
              let incX = mX *CHG;
              let nwX = mX + incX;
              //$(this).find(".close").find(".trdPtf").val(nwX)       
              $(this).find("."+pair).html(nwX.toFixed(3))  
                      
            }


        }

         
        let tpft = $(this).find(".lsPft").html() != "" ? parseFloat($(this).find(".lsPft").html()):0;
        profit+=tpft
        //console.log(tpft)
      })
      $(".profit").html(profit.toFixed(2)+" USD")
      //console.log(profit)
    }
    //update all open positions
    updateP();
    function updateP() {
      $(".opnpp").html("")
      $.each(json.open, function(key,value){
      //alert(key)
        var output = "<li class='pftList'><div class='row'><div class='col-md-2 vpl'>"+value.pair+"</div><div class='col-md-2 cprix'>"+value.cprice+"</div><div class='col-md-2 camtx'>"+value.amount+"</div><div class='col-md-2 lsPft "+value.pair+"'></div><div class='col-md-2 pst'>"+value.position+"</div><div class='col-md-2 close'><input type='hidden' value='"+key+"' class='key'><input type='hidden' class='trdPtf' value='x'>close</div></div></li>";
        $(".opnpp").append(output);
        //console.log(JSON.stringify(value))
      })      
    }
    //close position
    $(document).on('click','.close', function() {
      let key = $(this).find(".key");
      var user = $(".user_m").val()
      let cprt = $(this).parent().find(".lsPft").html()
      console.log(cprt)
      
      if(cprt == "") {
        myModal.toggle()
          $("#myModal").find(".modal-body").html("<b>Loading trade Please wait...</b>")  
      } else {
        $.ajax({
              url: "../db/getBl.php",
              type:'post',
              data:({balanc:1}),
              success: function(results) {
                  console.log(results);
                  closePostit(key.val(),user,parseFloat(cprt),parseFloat(results))
                  //opnPostit(user,pair,parseFloat(amt),pos,ccpri,parseFloat(results));              
              }
      })
        
      }
      
    });
    //$('.pair').focusout
   /**  $(".pair").focusout(function() {
      
      let p = $(".pair").val()
      mainPair = p;
      socket.send('{"action": "subscribe", "symbols":"'+mainPair+'"}')
    })*/
    //Start trade
    $(".inittrade").submit(function(e) {
      e.preventDefault()
      var user = $(".user_m").val();
      var amt = $(".positAmount").val();
      var pos = $(".positType").val();
      var pair = $(".selectd").html()//$(".pair").val();
      var ccpri = $(".cprix").val();
      $.ajax({
              url: "../db/getBl.php",
              type:'post',
              data:({balanc:1}),
              success: function(results) {
                
                if(parseFloat(results) >parseFloat(amt)) {
                  console.log(results);
                  opnPostit(user,pair,parseFloat(amt),pos,ccpri,parseFloat(results));
                } else {
                  myModal.toggle()
                  $("#myModal").find(".modal-body").html("<b>Account Balance Low. Please</b>")  
                }
              }
      })
     // 
      initTrade.toggle(); 
    });
//Buy
    $(".buy").click(function() {
        var user = $(".user_m").val()
        var amt = $(".amtpost").val();
        $(".trd_btn").prop('disabled', true);
        $(".trd_btn").html("Loading..")
        $(".cprix").val("");
        if (parseFloat(amt)>0){
          $("#trade").find(".positAmount").val(parseFloat(amt))
          $("#trade").find(".positType").val("BUY")
          initTrade.toggle();
          
          //opnPostit(user,"SOL_USDT",parseFloat(amt),"BUY");          
        }
        else{
          myModal.toggle()
          $("#myModal").find(".modal-body").html("<b>Enter Amount</b>")          
        }

          //alert("Enter Amount")
    });

    //Sell
    $(".sell").click(function() {
        var user = $(".user_m").val()
        var amt = $(".amtpost").val();
        $(".trd_btn").prop('disabled', true);
        $(".trd_btn").html("Loading..")
        $(".cprix").val("");
        if (parseFloat(amt)>0){
          $("#trade").find(".positAmount").val(parseFloat(amt))
          $("#trade").find(".positType").val("SELL")
          initTrade.toggle();          
          //opnPostit(user,"SOL_USDT",parseFloat(amt),"SELL");          
        }
        else{
          myModal.toggle()
          $("#myModal").find(".modal-body").html("<b>Enter Amount</b>")          
        }
    });

    function closePostit(key,user,ttpft,bnx) {
      let remove = json.open.splice(parseInt(key),parseInt(1))
      console.log(parseInt(key),parseInt(1))
      console.log(JSON.stringify(json))
      let balance = bnx//$(".bala").html()
      console.log(balance);
      $.ajax({
              url: "../db/update.php",
              type:'post',
              data:({update:1,email:user,data:"closeposition",val:JSON.stringify(json),amount:(parseFloat(balance)+parseFloat(ttpft)).toFixed(2)}),
              success: function(results) {
                console.log(results)
                updateP();
                $(".bala").html((parseFloat(balance)+parseFloat(ttpft)).toFixed(2)+" USD")
              }
            }) 
    }

    function opnPostit(user,pair,amount,trade,cprice,bnx) {
        let newPosition = {"pair":pair,"cprice":cprice,"amount":amount,"position":trade};
        //console.log(newPosition)
        let balance = bnx;//$(".bala").html();

        //alert(parseFloat(balance))
        console.log(balance);
        json.open.push(newPosition)
        console.log(json);
             //e.preventDefault()
            $.ajax({
              url: "../db/update.php",
              type:'post',
              data:({update:1,email:user,data:"openposition",val:JSON.stringify(json),amount:(parseFloat(balance)-parseFloat(amount))}),
              success: function(results) {
                console.log(results)
                updateP();
                $(".bala").html((parseFloat(balance)-parseFloat(amount))+" USD")
              }
            })    
    }
    $(".min").click(function() {
      let val = $(this).html()
      $(".time").html(val)
    })
    $(".selePair").click(function() {
      let val = $(this).html()
      $(".selectd").html(val)
      mainPair = val
      socket.send('{"action": "subscribe", "symbols":"'+val+'"}');
      console.log('{"action": "subscribe", "symbols":"'+val+'"}')
    })

})
</script>
    </head>
  
<body class="dash-bg">
<!-- Modal alert -->
<div class="modal fade" id="trade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Trade</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  method="post" class="inittrade">
        <label for="tradet">Pair</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle selectd" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%;    border-radius: 5px !important;">
              Select Pair
            </button>
            <ul class="dropdown-menu"  style="width: 100%;"aria-labelledby="dropdownMenuButton1">
              <li align="center" class="selePair">BTC-USD</li>
              <li align="center" class="selePair">ETH-USD</li>
              
            </ul>
        </div>
        <br>
        <label for="tradet">Current Price</label>
        <input type="text" class="form-control cprix" disabled required>
        <br>
        <label for="tradet">Position Type</label>
        <input type="text" class="form-control positType" disabled>
        <br>
        <label for="Amount">Lots</label>
        <input type="number" class="form-control positAmount" disabled>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary trd_btn" disabled>Loading...</button>
      </form>
      </div>
    </div>
  </div>
</div> 
<!-- Modal alert -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Alert</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body alert">
        ...
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div> 
<nav class="navbar navbar-expand-md mb-4 dashnav" style="margin-bottom: 1px !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://smartbuzzcrypto.com/assets/img/favicons/favicon.png" alt="sbc" style="width: 25%;margin-right: 2vw;"><b>SB-CRYPTO</b></a>
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
          <a class="nav-link disabled">Acct:-1002434<?php echo $row["id"]?></a>
        </li>
      </ul>
      <form class="d-flex">
        
        <a class="btn btn-outline-success" href="../db/logout.php">Logout</a>
      </form>
    </div>
  </div>
</nav>
<main>
  <div class="news">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Markets</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    },
    {
      "description": "Ethereum",
      "proName": "BINANCE:ETHUSDT"
    },
    {
      "description": "Polygon",
      "proName": "BINANCE:MATICUSDT"
    },
    {
      "description": "Solana",
      "proName": "BINANCE:SOLUSDT"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": true,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
  </div>
    <div class="row chart">
      
      <div class="col-md-2 cntrl">
        <div class="bal">
          <label align="center" for="balance">Balance</label>
          <h4 align="center" ><b class="bala"><?php echo $amount?> USD</b></h4>
        </div>
        <div>
          <label align="center" for="Amount">Amount</label>
          <input align="center" type="number" placeholder="10.00" value="" class="amtpost">
          <label align="center" for="time">Time</label>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle time" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Time
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li align="center" class="min">1 min</li>
              <li align="center" class="min">2 min</li>
              <li align="center" class="min">5 min</li>
            </ul>
          </div>
          <label align="center" for="profit">Profit</label>
          <h3 style="color:green" class="profit" align="center">50.55 USD</h3>
          <br>
          <button class="form-control btn buy"> BUY</button>
          <br>
          <br>
          <input type="text" class="price" disabled>
          <br>
          <br>
          <button class="form-control btn sell" data-toggle="modal" data-target="#exampleModal"> SELL</button>

        </div>
      </div>

      <div class="col-md-10" style="background-color: #131722;border-radius:10px">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div id="tradingview_6cd98"></div>
          <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Chart</span></a> by TradingView</div>
          <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
          <script type="text/javascript">
          new TradingView.widget(
          {
          "autosize": true,
          "symbol": "BINANCE:BTCUSDT",
          "interval": "D",
          "timezone": "Etc/UTC",
          "theme": "dark",
          "style": "1",
          "locale": "en",
          "toolbar_bg": "#f1f3f6",
          "enable_publishing": false,
          "allow_symbol_change": true,
          "watchlist": [
            "BINANCE:BTCUSDT",
            "BINANCE:ETHUSDT",
            "BINANCE:MATICUSDT",
            "BINANCE:SOLUSDT",
            "BINANCE:DOTUSDT",
            "BINANCE:OPUSDT",
            "BINANCE:LINKUSDT"
          ],
          "studies": [
            "MACD@tv-basicstudies"
          ],
          "container_id": "tradingview_6cd98"
        }
          );
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </div>
    <section>
          <div style="background-color: #07080a;padding: 20px;">
            <h3 align="center" style="color: white;">Open Positions</h3>
            <ul class="" style="color:white">
              <li class=''>
                <div class='row'>
                  <div class='col-md-2'>PAIR</div>
                  <div class='col-md-2'>TRADED PRICE</div>
                  <div class='col-md-2'>AMOUNT TRADED</div>
                  <div class='col-md-2'>PROFIT</div>
                  <div class='col-md-2 pst'>BUY/SELL</div>
                  <div class='col-md-2 close'>close</div>
                </div>
              </li>
            </ul>
            <ul class="opnpp" style="color:white"></ul>
          </div>
    </section>
</main>
<footer>
    <section>
        <div  class="dashfoot" style="padding: 10%; background-color:rgb(12, 14, 32)">
          <h6 class="footertext">
            The financial services provided by this website carry a high level of risk and can result in the loss of all of your funds. You should never invest money that you cannot afford to lose. Please ensure you read our terms and conditions before making any operation in our trading platform. Under no circumstances the company has any liability to any person or entity for any loss or damage cause by operations on this website. SmartBuzzCrypto nor its agents or partners are not registered and do not provide any services on the USA territory.
          </h6>
          <div class="row">
            <div class="col-md-6"><h6 class="footertext">© 2018</h6></div>
            <div class="col-md-6" align="right"><a class="abtC" href="#"><h6 class="footertext">terms and conditions</h6></a></div>
          </div>
        </div>
      </section>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="//code.tidio.co/sfrxplmrpumibp6lmisltzkrdmitfiib.js" async></script>
</body>
</html>