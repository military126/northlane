<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: rccl');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="description" content="">
		<meta name="format-detection" content="telephone=yes">
		<link rel="apple-touch-icon" href="apple-touch-icon-iphone.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=no, minimal-ui, target-densityDpi=device-dpi" />
		<style type='text/css'>
			@font-face {
				font-family: 'Futura';
				src: url('Futura-Medium.eot');
				src: url('Futura-Medium.eot?#iefix') format('embedded-opentype'),
				url('Futura-Medium.woff2') format('woff2'),
				url('Futura-Medium.woff') format('woff'),
				url('Futura-Medium.ttf') format('truetype'),
				url('Futura-Medium.svg#Futura-Medium') format('svg');
				font-weight: 500;
				font-style: normal;
				font-display: swap;
			}
			body, html{
				#width:100%;
				#height:100%;
				#font-size: 110%;
				padding: 0;
				margin: 0;
				overflow-y: auto;
				background-color:#344C41;
			}
			.container{
				height:100%;
				width:100%;
				
				
			}
			.header{
				text-align:center;
				margin-top:35px;
			}  
			.headerImage{
				margin-top:50px;
				margin-bottom:50px;
				#width: 13%;
				#height: 13%;
				max-width: 15%;
				max-height: 15%;
			}
			.message1{
				margin-top:20px;
			}
			.message1{
				font-family: Futura;
				text-align:center;
				font-style: normal;
				color:#72967F;
				font-size: 38px;
			}
			.message2{
				font-family: Futura;
				text-align:center;
				font-style: normal;
				color:white;
				font-size: 25px;		
			}
			.urlId{
				color:blue;
				margin-top:10px;
				margin-bottom:10px;
				text-decoration: underline;
			}
			.dvCountDown{
				text-align:center;
				margin-top:10px;
				font-size: 80%;
			}
			.message3{
				font-family: Futura;
				text-align:center;
				font-style: normal;
				color:#72967F;
				font-size: 20px;		
			} 
			.redirectButton{
				margin-top: 50px;
				background-color: black;
				text-align: center;
				width: 300px;
				height: 50px;
				margin: auto;
				display: flex;
				align-items: center;
				justify-content: center;
				margin-top: 100px;
				font-size: 25px;
				#font-weight: bold;
				font-family: Futura;
				text-decoration: none;
				color: white;
				border-radius: 25px;
			}
			
		</style>
	</head>
	<body onLoad="DelayRedirect()">
		<div class="container">
			<div class=header>
				<img class="headerImage" src="https://clientzone-qa.northlane.com/xContent/content/NL-logo.png">
			</div>
			<div class="message1">
				The simplest way to pay
			</div>
			<br/><br/>
			<div class="message2">
				
				We are now North Lane Technologies, Inc.
				<br/>
				Our service and commitment to you remain.
			</div>
			<div class="message3">
				
				<div id="dvCountDown" style = "display:none">
					<br/>
					<img src="https://clientzone-qa.northlane.com/xContent/content/spinner.gif" width="80" height="80" align="middle"> <br/><br/>
						You will automatically be redirected to Northlane CLAIM COVID-19 FUNDS <br/><span class="urlId" id="url" ></span> <br/>in <span id = "lblCount"></span>&nbsp;seconds.
				</div>
			</div>
			<div id="redirectLink">
			<!--	
			<a href = "" class="redirectButton">
			CLICK HERE TO REDIRECT
			</a>
			-->
			</div>

		</div>

		<script type="text/javascript">
			var redirectLink = document.getElementById("redirectLink");

			var aTag = document.createElement('a');
			aTag.setAttribute('href',"/defaultlogin.do"+window.location.pathname+window.location.search);
			aTag.setAttribute('class','redirectButton');
			aTag.innerHTML = "Click here to redirect";
			redirectLink.appendChild(aTag);
			//alert(window.location.pathname);

				function DelayRedirect() {
					var seconds = 1;
					var dvCountDown = document.getElementById("dvCountDown");
					var lblCount = document.getElementById("lblCount");
					var urlSpan = document.getElementById("url");
					dvCountDown.style.display = "block";
					lblCount.innerHTML = seconds;
					urlSpan.innerHTML = "login.northlane.com"+window.location.pathname+window.location.search;
					setInterval(function () {
						seconds--;
						lblCount.innerHTML = seconds;
						if (seconds == 0) {
							dvCountDown.style.display = "none";
							window.location = "/defaultlogin.do"+window.location.pathname+window.location.search;
						}
					}, 1000);
				}
		</script>
	</body>
</html>