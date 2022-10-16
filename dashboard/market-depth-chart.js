let pair ="";

const wtclst = (pair) => {
	let watchlJson = [{"e":"24hrMiniTicker","E":1665778598150,"s":"ETHBTC","c":"0.06778000","o":"0.06666300","h":"0.06788400","l":"0.06633000","v":"102155.49470000","q":"6874.09078075"},{"e":"24hrMiniTicker","E":1665778597734,"s":"BNBBTC","c":"0.01406400","o":"0.01398600","h":"0.01410300","l":"0.01385400","v":"43171.28700000","q":"602.70477879"},{"e":"24hrMiniTicker","E":1665778598188,"s":"BTCUSDT","c":"19182.10000000","o":"19478.02000000","h":"19951.87000000","l":"19100.01000000","v":"363872.29609000","q":"7119945056.15496440"},{"e":"24hrMiniTicker","E":1665778598321,"s":"ETHUSDT","c":"1300.00000000","o":"1298.43000000","h":"1343.12000000","l":"1283.39000000","v":"679312.26670000","q":"895299722.79019900"},{"e":"24hrMiniTicker","E":1665778598058,"s":"BNBUSDT","c":"269.60000000","o":"272.40000000","h":"276.80000000","l":"268.40000000","v":"308881.49000000","q":"84357843.71500000"},{"e":"24hrMiniTicker","E":1665778598345,"s":"XLMUSDT","c":"0.11280000","o":"0.11350000","h":"0.11660000","l":"0.11170000","v":"72153704.00000000","q":"8261609.15260000"},{"e":"24hrMiniTicker","E":1665778598046,"s":"TRXUSDT","c":"0.06377000","o":"0.06111000","h":"0.06550000","l":"0.06074000","v":"927226667.30000000","q":"58530705.11405400"},{"e":"24hrMiniTicker","E":1665778598195,"s":"HOTUSDT","c":"0.00196400","o":"0.00199000","h":"0.00204400","l":"0.00196000","v":"1811848122.00000000","q":"3635211.45436100"},{"e":"24hrMiniTicker","E":1665778598445,"s":"KEYUSDT","c":"0.00474800","o":"0.00394200","h":"0.00490000","l":"0.00392000","v":"603387691.00000000","q":"2670117.36840600"},{"e":"24hrMiniTicker","E":1665778598409,"s":"BTCBUSD","c":"19181.08000000","o":"19478.38000000","h":"19956.57000000","l":"19108.84000000","v":"181842.38278000","q":"3558693728.83920830"},{"e":"24hrMiniTicker","E":1665778597675,"s":"BUSDUSDT","c":"1.00000000","o":"0.99990000","h":"1.00000000","l":"0.99990000","v":"453194038.00000000","q":"453170683.54450000"},{"e":"24hrMiniTicker","E":1665778597777,"s":"ETHBUSD","c":"1300.06000000","o":"1298.30000000","h":"1343.20000000","l":"1282.59000000","v":"429242.30010000","q":"565644106.07247600"},{"e":"24hrMiniTicker","E":1665778598411,"s":"USDTTRY","c":"18.82900000","o":"18.82300000","h":"18.83300000","l":"18.75000000","v":"43430215.00000000","q":"816118036.73800000"},{"e":"24hrMiniTicker","E":1665778598241,"s":"COTIUSDT","c":"0.09590000","o":"0.10060000","h":"0.10280000","l":"0.09570000","v":"26206455.00000000","q":"2610504.36150000"},{"e":"24hrMiniTicker","E":1665778598123,"s":"SOLUSDT","c":"30.14000000","o":"30.84000000","h":"31.98000000","l":"29.97000000","v":"2360321.41000000","q":"73430509.85240000"},{"e":"24hrMiniTicker","E":1665778597685,"s":"MATICBUSD","c":"0.78640000","o":"0.78270000","h":"0.82260000","l":"0.77480000","v":"23558654.10000000","q":"18892519.84661000"},{"e":"24hrMiniTicker","E":1665778597733,"s":"GBPUSDT","c":"1.11800000","o":"1.13100000","h":"1.13600000","l":"1.11500000","v":"9439569.70000000","q":"10621638.52250000"},{"e":"24hrMiniTicker","E":1665778597734,"s":"AUDUSDT","c":"0.62130000","o":"0.62890000","h":"0.63410000","l":"0.62020000","v":"15498195.00000000","q":"9752336.31430000"},{"e":"24hrMiniTicker","E":1665778597603,"s":"JSTBTC","c":"0.00000151","o":"0.00000131","h":"0.00000152","l":"0.00000130","v":"28524308.00000000","q":"39.33006630"},{"e":"24hrMiniTicker","E":1665778598376,"s":"UNIUSDT","c":"6.21000000","o":"6.16000000","h":"6.53000000","l":"6.08000000","v":"3516414.67000000","q":"22146847.82400000"},{"e":"24hrMiniTicker","E":1665778597653,"s":"BTCBRL","c":"102387.00000000","o":"102963.00000000","h":"105000.00000000","l":"101918.00000000","v":"590.95208000","q":"60994655.16602000"},{"e":"24hrMiniTicker","E":1665778598086,"s":"USDTBRL","c":"5.33600000","o":"5.28800000","h":"5.36100000","l":"5.24100000","v":"10413480.40000000","q":"55159990.15250000"},{"e":"24hrMiniTicker","E":1665778597707,"s":"AXSUSDT","c":"10.84000000","o":"11.21000000","h":"11.52000000","l":"10.82000000","v":"488087.92000000","q":"5483569.92030000"},{"e":"24hrMiniTicker","E":1665778597759,"s":"BUSDBRL","c":"5.33500000","o":"5.28800000","h":"5.34600000","l":"5.24000000","v":"4152305.80000000","q":"21976988.30500000"},{"e":"24hrMiniTicker","E":1665778597897,"s":"SKLUSDT","c":"0.03360000","o":"0.03476000","h":"0.03574000","l":"0.03352000","v":"43627877.00000000","q":"1513741.35356000"},{"e":"24hrMiniTicker","E":1665778598597,"s":"PHABTC","c":"0.00001000","o":"0.00000384","h":"0.00001025","l":"0.00000379","v":"42085650.00000000","q":"237.26793754"},{"e":"24hrMiniTicker","E":1665778598554,"s":"PHABUSD","c":"0.19260000","o":"0.07450000","h":"0.19640000","l":"0.07400000","v":"266256420.00000000","q":"31090377.81910000"},{"e":"24hrMiniTicker","E":1665778598461,"s":"ADABRL","c":"1.94800000","o":"1.99200000","h":"2.04200000","l":"1.94600000","v":"477383.10000000","q":"956291.85950000"},{"e":"24hrMiniTicker","E":1665778598103,"s":"MDXBUSD","c":"0.19020000","o":"0.10750000","h":"0.24650000","l":"0.10580000","v":"951379669.50000000","q":"176634658.03603000"},{"e":"24hrMiniTicker","E":1665778598519,"s":"MDXUSDT","c":"0.19030000","o":"0.10760000","h":"0.24640000","l":"0.10600000","v":"685304315.00000000","q":"122506539.31244000"},{"e":"24hrMiniTicker","E":1665778598601,"s":"PHAUSDT","c":"0.19500000","o":"0.07450000","h":"0.19700000","l":"0.07400000","v":"229588498.00000000","q":"25909194.01980000"},{"e":"24hrMiniTicker","E":1665778597621,"s":"QNTUSDT","c":"164.30000000","o":"162.20000000","h":"176.30000000","l":"158.70000000","v":"133833.14400000","q":"22429524.87480000"},{"e":"24hrMiniTicker","E":1665778598597,"s":"PORTOUSDT","c":"4.22240000","o":"4.02030000","h":"4.75330000","l":"3.96780000","v":"1694308.02000000","q":"7407878.69576400"},{"e":"24hrMiniTicker","E":1665778597631,"s":"JASMYUSDT","c":"0.00510900","o":"0.00542000","h":"0.00554000","l":"0.00509200","v":"1885733242.60000000","q":"10082751.28106100"},{"e":"24hrMiniTicker","E":1665778598359,"s":"SPELLUSDT","c":"0.00088280","o":"0.00090220","h":"0.00094000","l":"0.00088140","v":"2106097443.00000000","q":"1925778.45880750"},{"e":"24hrMiniTicker","E":1665778598386,"s":"IMXUSDT","c":"0.63000000","o":"0.66400000","h":"0.67800000","l":"0.62600000","v":"2630459.69000000","q":"1717376.33160000"},{"e":"24hrMiniTicker","E":1665778597824,"s":"APEUSDT","c":"4.50500000","o":"4.60600000","h":"4.76100000","l":"4.48200000","v":"4462974.60000000","q":"20629541.58763000"},{"e":"24hrMiniTicker","E":1665778597812,"s":"APEBTC","c":"0.00023483","o":"0.00023650","h":"0.00023959","l":"0.00023223","v":"267983.74000000","q":"63.19174467"},{"e":"24hrMiniTicker","E":1665778598559,"s":"EPXUSDT","c":"0.00048100","o":"0.00046700","h":"0.00054300","l":"0.00046100","v":"5893538703.00000000","q":"2905221.15624300"},{"e":"24hrMiniTicker","E":1665778598115,"s":"USTCBUSD","c":"0.04745612","o":"0.05128574","h":"0.05487654","l":"0.04644910","v":"1955223270.00000000","q":"99247767.88351119"},{"e":"24hrMiniTicker","E":1665778597991,"s":"KEYBUSD","c":"0.00473600","o":"0.00394800","h":"0.00489300","l":"0.00392200","v":"16930950086.00000000","q":"75164620.93522900"}];

	let watcJson = (watchlJson);

	const updtwtclst = (watcJson) =>{
		for (let i =0; i<watcJson.length;i++) {
			if (JSON.stringify(watcJson[i].s).search("USDT")>-1)
			{
				console.log(watcJson[i].s)
				let color = "green"
				if (parseFloat(watcJson[i].c)<parseFloat(watcJson[i].o)) {
					color="red";
				}
				let chng = Math.abs(parseFloat(watcJson[i].c)-parseFloat(watcJson[i].o))/parseFloat(watcJson[i].o)
				let symbs =`<li class="syms" >
				<div class="row">
				<div class="col-4"><span style="color: white;" class="pairnm">`+watcJson[i].s+`</span></div>
				<div class="col-4"><span id="`+watcJson[i].s+`" style="color:`+color+`;">`+parseFloat(watcJson[i].c)+`</span></div>
				<div class="col-4"><span id="`+watcJson[i].s+`_chg" style="color:`+color+`">`+parseFloat(chng).toFixed(2)+`%</span></div>
				</div>
			</li>`
			document.getElementById("sym").innerHTML += symbs
		
			}
		}
	}
	updtwtclst(watcJson)


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
				let chng = Math.abs(parseFloat(watcJson[i].c)-parseFloat(watcJson[i].o))/parseFloat(watcJson[i].o);
				if (parseFloat(watcJson[i].c)<parseFloat(watcJson[i].o)) {
					document.getElementById(watcJson[i].s).style.color ="red";
					document.getElementById(watcJson[i].s+"_chg").style.color ="red";
				} else {
					document.getElementById(watcJson[i].s).style.color ="green";
					document.getElementById(watcJson[i].s+"_chg").style.color ="green";
				}
				document.getElementById(watcJson[i].s).innerHTML = parseFloat(watcJson[i].c);
				document.getElementById(watcJson[i].s+"_chg").innerHTML = chng.toFixed(2)+"%";
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

wtclst("btcusdt")
const trdfd = (p) =>{
	//websocket for trade feeds
	
	pair = p;
	console.log(pair)
	const trades ='wss://stream.binance.com:9443/ws/'+pair+'@trade';
	const socktrades = new WebSocket(trades);
	console.log(socktrades.readyState, "ccc", WebSocket.CLOSED)

	
	//socktrades.close()
	socktrades.onopen = function(e) {
		console.log('opened');
	};

	socktrades.onmessage = function(event) {
		//console.log('received', event.data);
		`{"e":"trade","E":1665829915087,"s":"BTCUSDT","t":1974274982,"p":"19167.31000000","q":"0.09210000","b":14416672968,"a":14416672931,"T":1665829915086,"m":false,"M":true}`;
		let feeds = JSON.parse(event.data);
		if (feeds.s == pair.toUpperCase()) {
			//console.log('received', feeds.s, "Upper", pair.toUpperCase());
			let liLen = document.getElementById("feeds").getElementsByTagName("li").length;
			//console.log(liLen)
			let prxx = document.getElementById("prix");
			let prxx_p = document.getElementById("prix_pct");
			if (liLen<10) {
				let span = document.createElement("span");
				span.append(feeds.q)
				let li = document.createElement("li");
				if (feeds.m) {
					prxx.style.color="#4fa79b";
					prxx_p.style.color="#4fa79b";
					li.style.color="#4fa79b";
				} else {
					prxx.style.color="#e94043";
					prxx_p.style.color="#e94043";
					li.style.color="#e94043";
				}
				li.append(feeds.p,span);
				prxx.innerHTML= parseFloat(feeds.p);//current price
				prxx_p.innerHTML= ("("+parseFloat(feeds.q).toFixed(2)+"%)");//current volume
				document.getElementById("feeds").prepend(li)//trade feed
				//initate trades param
				document.getElementById("cprix").value = parseFloat(feeds.p); //amount to initate trade
				document.getElementById("cpair").value = pair.toUpperCase();
				document.getElementById("trd_btn").innerHTML="Trade"
				document.getElementById("trd_btn").disabled = false;

			} else {
				var select = document.getElementById('feeds');
				select.removeChild(select.lastChild);
			}
		}
		
		//
	}

	socktrades.onclose = function(event) {
		console.log(`Closed, clean ${event.wasClean} code ${event.code} reason ${event.reason}`);
	};

	socktrades.onerror = function(error) {
		console.error(`Error ${error.message}`);
	};	
}
trdfd("btcusdt")

//websocket for market depth
const mktdpt = () => {

	//pair = p;
	const url = 'wss://stream.binance.com:9443/ws/'+pair+'@depth20';


	const socket = new WebSocket(url);

	socket.onopen = function(e) {
		console.log('opened');
	};

	socket.onmessage = function(event) {
		//console.log('received', event.data);
		let feeds = JSON.parse(event.data);
		let c_pairPrx = document.getElementById(pair.toUpperCase()).innerHTML;
		let odbkprx = feeds.asks[0][0]
		let sub =  Math.abs(parseFloat(c_pairPrx)-parseFloat(odbkprx))
		//console.log("Pair",pair.toUpperCase(),"Prce",c_pairPrx,"Feeds",odbkprx,"Sub",sub)
		if (sub<1) {
			loadData(JSON.parse(event.data))
			document.getElementById("one").innerHTML = JSON.parse(event.data).asks[3][0] +"<span style='color:white'> "+JSON.parse(event.data).asks[3][1]+"</span>"
			document.getElementById("two").innerHTML = JSON.parse(event.data).asks[2][0]+"<span style='color:white'> "+JSON.parse(event.data).asks[2][1]+"</span>"
			document.getElementById("three").innerHTML = JSON.parse(event.data).asks[1][0]+"<span style='color:white'> "+JSON.parse(event.data).asks[1][1]+"</span>"
			document.getElementById("four").innerHTML = JSON.parse(event.data).asks[0][0]+"<span style='color:white'> "+JSON.parse(event.data).asks[0][1]+"</span>"
			document.getElementById("five").innerHTML = JSON.parse(event.data).bids[0][0]+"<span style='color:white'> "+JSON.parse(event.data).bids[0][1]+"</span>"
			document.getElementById("six").innerHTML = JSON.parse(event.data).bids[1][0]+"<span style='color:white'> "+JSON.parse(event.data).bids[1][1]+"</span>"
			document.getElementById("seven").innerHTML = JSON.parse(event.data).bids[2][0]+"<span style='color:white'> "+JSON.parse(event.data).bids[2][1]+"</span>"
			document.getElementById("eight").innerHTML = JSON.parse(event.data).bids[3][0]+"<span style='color:white'> "+JSON.parse(event.data).bids[3][1]+"</span>"			
		}


		
		//draw(JSON.parse(event.data));
	};

	socket.onclose = function(event) {
		console.log(`Closed, clean ${event.wasClean} code ${event.code} reason ${event.reason}`);
	};

	socket.onerror = function(error) {
		console.error(`Error ${error.message}`);
	};


	var x= {
		tickerId: "BTC_USD",
		timestamp: 1635784328000,
		"bids": [
			["8143.37000000", "0.01097800"],
			["8143.06000000", "0.24867600"],
			["8143.01000000", "6.10577200"],
			["8142.64000000", "0.50000000"],
			["8142.05000000", "9.42614100"],
			["8141.83000000", "3.14205700"],
			["8141.61000000", "5.00000000"],
			["8140.50000000", "0.12275800"],
			["8140.49000000", "0.52090500"],
			["8140.48000000", "0.29463200"],
			["8139.83000000", "0.29460400"],
			["8139.80000000", "0.18078300"],
			["8139.00000000", "0.07793600"],
			["8138.57000000", "0.07593500"],
			["8138.54000000", "0.30000000"],
			["8138.52000000", "0.40000000"],
			["8138.35000000", "0.11202400"],
			["8138.13000000", "0.12290600"],
			["8138.12000000", "0.39743800"],
			["8138.11000000", "0.47204500"]
		],
		"asks":[
			["8144.57000000", "0.04478800"],
			["8144.58000000", "0.04911400"],
			["8144.60000000", "0.00659500"],
			["8144.61000000", "0.06710600"],
			["8145.00000000", "0.49175000"],
			["8146.99000000", "0.70697200"],
			["8147.00000000", "0.10000000"],
			["8147.22000000", "0.00500000"],
			["8147.50000000", "0.50000000"],
			["8147.61000000", "0.48849700"],
			["8147.62000000", "0.46056400"],
			["8147.63000000", "0.29471400"],
			["8147.64000000", "0.46662300"],
			["8147.65000000", "0.10700000"],
			["8148.04000000", "0.50000000"],
			["8148.64000000", "0.83144500"],
			["8148.66000000", "0.68263300"],
			["8148.98000000", "0.05112800"],
			["8149.00000000", "0.61265700"],
			["8149.08000000", "0.61202600"]
		]
	}
	//var result = x.bids.map(nested => nested.map(Number));
	//console.log(result)
	loadData(x)
	function loadData(chartData) {
		let bidss = chartData.bids.map(nested => nested.map(Number))
		let askss = chartData.asks.map(nested => nested.map(Number))
		for (var i=1; i<bidss.length; i++) {
			let z = 1;
			bidss[i][z] = bidss[i-1][z] + bidss[i][z]
		} 
		for (var i=1; i<askss.length; i++) {
			let z = 1;
			askss[i][z] = askss[i-1][z] + askss[i][z]
		}  
		Highcharts.chart('container', {
		chart: {
			type: "area",
			zoomType: "xy",
			backgroundColor: "#131722",
			height: 300,
			width: 500
			},
			title: {
			text: "ORDER BOOK DEPTH "+pair.toUpperCase(),
			style: {
				color: "#fff",
			},
			},
			xAxis: {
			minPadding: 0,
			maxPadding: 0,
			plotLines: [
				{
				color: "",
				value: 0.1523,
				width: 1,
				label: {
					text: "Actual price",
					rotation: 90,
					style: {
					color: "#4F6C89",
					},
				},
				},
			],
			lineWidth: 0.1,
			tickColor: "#1c1b2b",
			crosshair: {
				color: "#696777",
				dashStyle: "dash",
			},
			title: {
				text: "Price",
				style: {
				color: "#4F6C89",
				},
			},
			},
			yAxis: [
			{
				gridLineWidth: 1,
				title: null,
				tickWidth: 1,
				tickLength: 5,
				tickPosition: "inside",
				labels: {
				align: "left",
				x: 8,
				},
				crosshair: {
				dashStyle: "dash",
				color: "#696777",
				},
				gridLineColor: "#131722",
				lineWidth: 0,
				tickColor: "#2f2952",
			},
			{
				opposite: true,
				linkedTo: 0,
				gridLineWidth: 0,
				title: null,
				tickWidth: 1,
				tickLength: 5,
				tickPosition: "inside",
				labels: {
				align: "right",
				x: -8,
				},
				crosshair: {
				dashStyle: "dash",
				color: "#696777",
				},
				gridLineColor: "#201d3a",
				lineWidth: 0,
				tickColor: "#2f2952",
			},
			],
			legend: {
			enabled: true,
			},
			plotOptions: {
			area: {
				fillOpacity: 0.7,
				lineWidth: 1,
				step: "right",
			},
			series:  { 
				animation: false,
				marker:{
				enabled:false,
				
				}
			},
			},
			tooltip: {
			headerFormat:
				'<span style="font-size=10px;">Price: {point.key}</span><br/>',
			valueDecimals: 2,
			},
			series: [
			{
				name: "Bids",
				data: bidss,//chartData.bids.map(nested => nested.map(Number)),
				color: "#4fa79b",
			},
			{
				name: "Asks",
				data: askss,//chartData.asks.map(nested => nested.map(Number)),
				color: "#e94043",
			},
			],
			credits: {
			enabled: false,
			},
		}); 
	}

}
mktdpt()
