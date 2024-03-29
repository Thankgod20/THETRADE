$(document).ready(function() {
    let hrf = window.location.href;
    let isPaid = 0;
    let amount = (hrf.split("?")[1].split("=")[1]);
    $(".amtt").val(amount);
    let min = 19;
    let sec = 10;
    let setTimer = null;
    let monitor = null;
    let socktwtcx = null;

    function timer(txt) {
        if (txt == "Bitcoin" || txt == "Bitcoin Cash") {
            lstBtc();
        } else if (txt == "Ether" || txt == "Tether US-ERC20") {
            lstETH();
        } else {
            lstBSC()
        }
        $(".payment").css("background-color","white");
        setTimer = setInterval(function() {
            sec -=1;
            if (sec<0) {
                sec = 60;
                min -=1;
            }  else if (min == 0) {
                if (sec>50)
                    $(".payment").css("background-color","#ffe2ac");
                else if (sec>30 && sec <50)
                    $(".payment").css("background-color","#ff7e00");
                else if (sec <30)
                    $(".payment").css("background-color","red");
            }
            else if (min < 0)
            {
                min = 0;
                sec = 0;
                //clearInterval(this)
                endTimer(txt)
            }
            //console.log("Time:-"+min+":"+sec+"min:sec")
            $(".timer").html(min+":"+sec+" (min:sec)")
    
        },1000)
    }

   // timer();

    function endTimer(txt) {
        if (txt == "Bitcoin" || txt == "Bitcoin Cash") {
            socktwtcx.close()
        } else if (txt == "Ether" || txt == "Tether US-ERC20") {
            clearInterval(monitor);
            monitor=null;
        } else {
            clearInterval(monitor);
            monitor = null;
        }

        $(".payment").fadeOut(function () {
            $(".expired").fadeIn()
        });
        clearInterval(setTimer)
        min =19;
        sec =10;
    }
    $(".crypto").click(function() {
        $(".crypto").removeClass("clicked");
        $(this).addClass("clicked");
        let netwrk = $(this).find(".col-10 h3").html();
        //alert(netwrk)
        let icon = "";
        let netNm = "";
        let cuxicon = "";
        let cuxname = "";
        let amount = "";
        let address = "";
        let updtCurr = (cuxicon,cuxname,amount,address) =>{
           let currx = `
                    <li class="crypto currenxSel">
                        <div class="row">
                            <div class="col-2">
                                <img src="./PNG/`+cuxicon+`.png" style="width: 90%;" alt="" srcset="">
                            </div>
                            <div class="col-10">
                                <h3>`+cuxname+`</h3>
                                
                                <h5 id="`+amount+`"></h5>
                            </div>
                            <input type="hidden" value="`+address+`" id="addr" class="addr">
                        </div>
                    </li>
            `; 
            return currx;

        }
        //
        if (netwrk == "Bitcoin") {
           icon = "BTC";
           netNm = "Bitcoin";
           let currJson = {"currency":[{"name":"Bitcoin","address":"bc1qutngz6jkusguqgnjnkc68hwdls34xll5fre8qj","icon":"BTC","amount":"BTCUSDT_t"},{"name":"Bitcoin Cash","address":"qz0sl7shtuus67g2dhh922qdq7mws7k9lgha6wm4mg","icon":"BCH","amount":"BCHUSDT_t"}]}

           $(".curry").html("");

           for (let i =0; i <currJson.currency.length;i ++) {
            cuxicon= currJson.currency[i].icon;
            cuxname= currJson.currency[i].name;
            amount= currJson.currency[i].amount;
            address= currJson.currency[i].address;
            //console.log(updtCurr(cuxicon,cuxname,amount,address))
            $(".curry").append(updtCurr(cuxicon,cuxname,amount,address))
           }

        } else if (netwrk == "Ethereum") {
            icon = "ETH";
           netNm = "Ethereum";
           let currJson = {"currency":[{"name":"Ether","address":"0x850cf49e835eE8D5Da3Be0aCBd4587eD56f7E7E3","icon":"ETH","amount":"ETHUSDT_t"},{"name":"Tether US-ERC20","address":"0x850cf49e835eE8D5Da3Be0aCBd4587eD56f7E7E3","icon":"USDT","amount":"BUSDUSDT_t"}]}

           $(".curry").html("");

           for (let i =0; i <currJson.currency.length;i ++) {
            cuxicon= currJson.currency[i].icon;
            cuxname= currJson.currency[i].name;
            amount= currJson.currency[i].amount;
            address= currJson.currency[i].address;
            //console.log(updtCurr(cuxicon,cuxname,amount,address))
            $(".curry").append(updtCurr(cuxicon,cuxname,amount,address))
           }
        } else if (netwrk == "Binance (BSC)") {
            icon = "BNB";
            netNm = "Binance";
            let currJson = {"currency":[{"name":"Binance Smart Chain","address":"0x850cf49e835eE8D5Da3Be0aCBd4587eD56f7E7E3","icon":"BNB","amount":"BNBUSDT_t"},{"name":"Tether US-BEP20","address":"0x850cf49e835eE8D5Da3Be0aCBd4587eD56f7E7E3","icon":"USDT","amount":"BUSDUSDT_t"}]}

           $(".curry").html("");

           for (let i =0; i <currJson.currency.length;i ++) {
            cuxicon= currJson.currency[i].icon;
            cuxname= currJson.currency[i].name;
            amount= currJson.currency[i].amount;
            address= currJson.currency[i].address;
            //console.log(updtCurr(cuxicon,cuxname,amount,address))
            $(".curry").append(updtCurr(cuxicon,cuxname,amount,address))
           }
        } 
        let seldNt = `
        <div class="col-2">
                        <a href="#" class="bk-min " style="text-decoration: none;"> Back</a>
                    </div>
                    <div class="col-2">
                        <img src="./PNG/`+icon+`.png" style="width: 90%;" alt="" srcset="">
                    </div>
                    <div class="col-8">
                        <h3>`+netNm+`</h3>
                        
                        <h5>Select currency</h5>
                    </div>
        `;
        
        $(".ntw").html(seldNt)
        $(".select").fadeOut(function () {
                $(".currency").fadeIn()
        })
    })

    //$(".bk-min").click(function() {
    $(document).on('click','.bk-min', function() {
        $(".currency").fadeOut(function () {
                $(".select").fadeIn()
        })
    })

    $(document).on('click','.currenxSel', function() {
        let curx = ($(this).find("h3").html())
        $(".currency").fadeOut(function () {
                $(".payment").fadeIn();
                timer(curx);
        });
        
        $(".walletPaymet").html("Make Payment through "+curx)
        let addr =$(this).find("#addr").val()
        let qr_cd = `
        <img style="width:60%" src="https://api.qrserver.com/v1/create-qr-code/?data=`+addr+`&size=300x300" alt="">
        `;
        $(".qr-div").html(qr_cd)
        $("#inptAddr").val(addr)

        
    });
    //exp-btn
    $(document).on('click','.exp-btn', function() {
        $(".expired").fadeOut(function () {
                $(".select").fadeIn()
        });
        let addr =$(this).find("#addr").val()
        let qr_cd = `
        <img style="width:60%" src="https://api.qrserver.com/v1/create-qr-code/?data=`+addr+`&size=300x300" alt="">
        `;
        $(".qr-div").html(qr_cd)
        $("#inptAddr").val(addr)

        
    });
    //Update Prices
    function webSK() {
        //websocket for watchlist
        const watchlist ='wss://stream.binance.com:9443/ws/!miniTicker@arr';
        const socktwtc = new WebSocket(watchlist);

        socktwtc.onopen = function(e) {
            console.log('opened');
        };

        socktwtc.onmessage = function(event) {
            //console.log('received', event.data);
            //document.getElementById("sym").innerHTML ="";
            //updtwtclst(JSON.parse(event.data))
            let watcJson = JSON.parse(event.data);
             
            for (let i =0; i<watcJson.length;i++) {
                if (document.getElementById(watcJson[i].s))
                {
                    //console.log(watcJson[i].s)
                    let chng = Math.abs(parseFloat(watcJson[i].c)-parseFloat(watcJson[i].o))/parseFloat(watcJson[i].o);
                    
                    document.getElementById(watcJson[i].s).innerHTML = "Current Price:-"+ parseFloat(watcJson[i].c);
                    //document.getElementById(watcJson[i].s+"_t").innerHTML = "Current Price:-"+ parseFloat(watcJson[i].c);
                }
                if (document.getElementById(watcJson[i].s+"_t"))
                {
                    //console.log(watcJson[i].s)
                    let chng = Math.abs(parseFloat(watcJson[i].c)-parseFloat(watcJson[i].o))/parseFloat(watcJson[i].o);
                    
                    //document.getElementById(watcJson[i].s).innerHTML = "Current Price:-"+ parseFloat(watcJson[i].c);
                    document.getElementById(watcJson[i].s+"_t").innerHTML = "Current Price:-"+ parseFloat(watcJson[i].c);
                }
            }
            
            //
            //socket.send('{"method": "SUBSCRIBE","params":["btcusdt@miniTicker"],"id": 1}')
            //console.log('miniTicker', event.data);
        }

        socktwtc.onclose = function(event) {
            console.log(`Closed, clean ${event.wasClean} code ${event.code} reason ${event.reason}`);
        };

        socktwtc.onerror = function(error) {
            console.error(`Error ${error.message}`);
            
        };
    }

    webSK()


    //bitcoin websocket

    let lstBtc =  () => {
        isPaid = 0;
        const watchlist ="wss://ws.blockchain.info/inv";
        socktwtcx = new WebSocket(watchlist);

        socktwtcx.onopen = function(e) {
            console.log('Btc opened');
            socktwtcx.send('{"op": "ping"}');
        };

        socktwtcx.onmessage = function(event) {
            socktwtcx.send('{"op": "unconfirmed_sub"}');
            let addr = JSON.parse(event.data).x.out;
            //console.log("evetns",addr)

            for (let i =0; i < addr.length ; i++) {
                //console.log(addr[i].addr)
                if (addr[i].addr == "bc1qutngz6jkusguqgnjnkc68hwdls34xll5fre8qj") {
                    let amount = addr[i].value;

                    console.log("Amount paid", amount);
                    let Price =  parseFloat(document.getElementById("BTCUSDT").innerHTML.split("-")[1]);
                    console.log("BTC price", Price);

                    let amountPaid = parseFloat(amount/100000000) * Price;

                    console.log("Amount Paid,", amountPaid);
                    console.log("+=============FOUND=============+")
                    $(".payment").fadeOut(function () {
                        $(".paid").fadeIn();
                        socktwtcx.close();
                        isPaid = 1;
                    });
                }
            }
        }

        socktwtcx.onclose = function(event) {
            console.log(`BTC Closed, clean ${event.wasClean} code ${event.code} reason ${event.reason}`);
            if (isPaid <1) {
                $(".payment").fadeOut(function () {
                $(".select").fadeIn()
                });
            }
            
        };

        socktwtcx.onerror = function(error) {
            console.error(`BTC Error ${error.message}`);
            
        };
    }

    //lstBtc();
    let lstBSC = async () => {
        const url ="https://bsc-dataseed1.binance.org/" //
        var options = {
                        timeout: 30000,
                        clientConfig: {
                            maxReceivedFrameSize: 100000000,
                            maxReceivedMessageSize: 100000000,
                        },
                        reconnect: {
                            auto: true,
                            delay: 5000,
                            maxAttempts: 15,
                            onTimeout: false,
                        },
                    };
        var web3 = new Web3(new Web3.providers.HttpProvider(url, options));
        //web3.eth.getAccounts(console.log);
        
        monitor = setInterval(async function () {
            let blockNum = await web3.eth.getBlockNumber();

            console.log(parseInt(blockNum)-2000)
        
            web3.eth.getPastLogs({fromBlock:(parseInt(blockNum)-20),address:'0x55d398326f99059ff775485246999027b3197955'})
            .then(res => {
            res.forEach(rec => {
               
                let addressxx = rec.topics[2].split("000000000000000000000000")[0]+rec.topics[2].split("000000000000000000000000")[1]
                //console.log(rec.blockNumber, rec.transactionHash, Web3.utils.toChecksumAddress(addressxx));

                if (Web3.utils.toChecksumAddress(addressxx)==Web3.utils.toChecksumAddress("0x850cf49e835eE8D5Da3Be0aCBd4587eD56f7E7E3")) {
                    let minedBkNm = parseInt(rec.blockNumber);
                    if ((parseInt(blockNum)-minedBkNm)<5) {
                        console.log("==================xxx+====================")
                        let toDec = parseInt(rec.data,16)
                        //console.log(rec)
                        //getAmount
                        let wei = 1000000000000000000;
                        let amtPd = parseInt(toDec)/wei;

                        console.log("Amount Paid",amtPd);
                        $(".payment").fadeOut(function () {
                            $(".paid").fadeIn()
                            clearInterval(monitor)
                        });
                    } else {
                        console.log((parseInt(blockNum)-minedBkNm))
                    }
                    
                }
            });
            }).catch(err => {console.log("getPastLogs failed", err);$(".payment").fadeOut(function () {
                $(".select").fadeIn()
            });clearInterval(monitor)});


            ///Listen for BNB
            let apiUrl = "https://api.bscscan.com/api?module=account&action=txlist&address=0x850cf49e835eE8D5Da3Be0aCBd4587eD56f7E7E3&startblock=0&endblock=99999999&page=1&offset=10&sort=desc&apikey=41B2URZ35U5KTGBXN6HD1XWBBTMUHPZ57W";

            
		$.getJSON(apiUrl, function(data) {
            let timeT = Date.now();
			console.log(data.result[0],"Time S",parseInt(timeT/1000) )
            console.log(parseInt(timeT/1000)-parseInt(data.result[0].timeStamp))

            if ((parseInt(timeT/1000)-parseInt(data.result[0].timeStamp))<15) {
                let wei = 1000000000000000000;
                let ethV = parseInt(data.result[0].value);
                let prx = parseFloat(document.getElementById("BNBUSDT_t").innerHTML.split("-")[1]);
                let truV = (ethV/wei) * prx
                console.log(truV)
                $(".payment").fadeOut(function () {
                    $(".paid").fadeIn();
                    clearInterval(monitor)
                });
            }

            //"1666292174"
            //"1666292604073"
		});
        },10000)

        monitor;
        //web3.eth.getBlockNumber().then(console.log)
        
    }
    //setInterval(lstBSC(),10000)
    //lstBSC();

    let lstETH = () => {
        const url ="https://mainnet.infura.io/v3/56bb53b84c2e439fa277c9e6522044fe" //
        var options = {
                        timeout: 30000,
                        clientConfig: {
                            maxReceivedFrameSize: 100000000,
                            maxReceivedMessageSize: 100000000,
                        },
                        reconnect: {
                            auto: true,
                            delay: 5000,
                            maxAttempts: 15,
                            onTimeout: false,
                        },
                    };
        var web3 = new Web3(new Web3.providers.HttpProvider(url, options));
        //web3.eth.getAccounts(console.log);
        
        monitor = setInterval(async function () {
            let blockNum = await web3.eth.getBlockNumber();

            console.log(parseInt(blockNum)-2000)
        
            web3.eth.getPastLogs({fromBlock:(parseInt(blockNum)-200),address:'0x850cf49e835eE8D5Da3Be0aCBd4587eD56f7E7E3'})
            .then(res => {
               
                let addressxx = rec.topics[2].split("000000000000000000000000")[0]+rec.topics[2].split("000000000000000000000000")[1]
                //console.log(rec.blockNumber, rec.transactionHash, Web3.utils.toChecksumAddress(addressxx));

                if (Web3.utils.toChecksumAddress(addressxx)==Web3.utils.toChecksumAddress("0x850cf49e835eE8D5Da3Be0aCBd4587eD56f7E7E3")) {
                    let minedBkNm = parseInt(rec.blockNumber);
                    if ((parseInt(blockNum)-minedBkNm)<5) {
                        console.log("==================xxx+====================")
                        let toDec = parseInt(rec.data,16)
                        //console.log(rec)
                        //getAmount
                        let wei = 1000000000000000000;
                        let amtPd = parseInt(toDec)/wei;

                        console.log("Amount Paid",amtPd);
                        $(".payment").fadeOut(function () {
                            $(".paid").fadeIn();
                            clearInterval(monitor)
                        });
                    } else {
                        console.log((parseInt(blockNum)-minedBkNm))
                    }
                    
                }
            }).catch(err =>{console.log("getPastLogs failed", err);$(".payment").fadeOut(function () {
                $(".select").fadeIn()
            });clearInterval(monitor)});


            let apiUrl = "https://api.etherscan.io/api?module=account&action=txlist&address=0x850cf49e835eE8D5Da3Be0aCBd4587eD56f7E7E3&startblock=0&endblock=99999999&page=1&offset=10&sort=desc&apikey=ZFE87ZZFWMI821WJYBMJ9X48EKBBX9YG13";

            
		$.getJSON(apiUrl, function(data) {
            let timeT = Date.now();
			console.log(data.result[0],"Time S",parseInt(timeT/1000) )
            console.log(parseInt(timeT/1000)-parseInt(data.result[0].timeStamp))

            if ((parseInt(timeT/1000)-parseInt(data.result[0].timeStamp))<15) {
                let wei = 1000000000000000000;
                let ethV = parseInt(data.result[0].value);
                let prx = parseFloat(document.getElementById("ETHUSDT_t").innerHTML.split("-")[1]);
                let truV = (ethV/wei) * prx
                console.log(truV)
                $(".payment").fadeOut(function () {
                    $(".paid").fadeIn();
                    clearInterval(monitor)
                });
            }

            //"1666292174"
            //"1666292604073"
		});
        },10000)

        monitor;
        //web3.eth.getBlockNumber().then(console.log)
        
    }

    //lstETH()
})