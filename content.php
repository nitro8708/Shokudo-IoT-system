<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
	<meta charset="UTF-8">
	<meta name= "viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>京都大学中央食堂混雑情報</title>

	<link rel="stylesheet" type="text/css" href="content.css">

	<script type="text/javascript">
		function showLocale(objD)
		{
		  var str
		  var yy = objD.getYear();
		   if(yy<1900) yy = yy+1900;
		  var MM = objD.getMonth()+1;
		   if(MM<10) MM = '0' + MM;
		  var dd = objD.getDate();
		   if(dd<10) dd = '0' + dd;
		  var hh = objD.getHours();
		   if(hh<10) hh = '0' + hh;
		  var mm = objD.getMinutes();
		   if(mm<10) mm = '0' + mm;
		  var ss = objD.getSeconds();
		   if(ss<10) ss = '0' + ss;
		  str = "計測時刻： " + yy + "-" + MM + "-" + dd + " " + hh + ":" + mm + ":" + ss;
		            return str;
		}
		function tick()
		{
		  var today;
		  today = new Date();
		  document.getElementById("local_time").innerHTML = showLocale(today);

		}

		function get()
		{
			var total_seat = 300;

			var input=<?php
			$file_input = fopen("input.txt","r");
			$input = fgets($file_input);
			echo $input;
			fclose($file_input);
			?>

			var output=<?php
			$file_output = fopen("output.txt","r");
			$output = fgets($file_output);
			echo $output;
			fclose($file_output);
			?>

			// var people = <?php
			// $file_input = fopen("input.txt","r");
			// $input = fgets($file_input);
			// $file_output = fopen("output.txt","r");
			// $output = fgets($file_output);
			// echo $input - $output;
			// fclose($file_input);
			// fclose($file_output);
			// ?>

			var people=input-output;
			// var people = GetRandomNum(20,300);
			var remained_seat = total_seat-people;

			var rate = people/total_seat;
			document.getElementById("people").innerHTML = "現時点の利用者数：" + people;
			document.getElementById("remained_seat").innerHTML = "空き：" + remained_seat;
			document.getElementById("percent").innerHTML = "混雑率：" + rate.toFixed(2)*100 + "%";
			document.getElementById("test_box").innerHTML = "(test only) latest input:" + input+ " latest output:"+output;


		}

		function jump_to_home()
		{
			var home_url="https://www.s-coop.net/"
			window.location.assign(encodeURI(home_url));
		}

		window.onload = function()
		{
			tick();
			get();
		}
		

	</script>


</head>

<body class="global" style="height: 100%">
	<div id="coop"> 
		<div id="co_logo"  onclick= "jump_to_home()"></div>
	</div>
	<div id="title_box">
		<div id="title">
			京都大学中央食堂 <br/>
			混雑情報		
		</div>
		<div id="local_time">
<!-- 		測定時間：2020-09-18 12：25 -->
		</div>
	</div>

	<div id="content_box">
		<div class="content_item" id="people" > 
<!-- 			現時点の利用者数： -->
		</div>
		<div class="content_item" id="remained_seat" > 
<!-- 			空き： -->
		</div>
		<div class="content_item" id="percent"> 
<!-- 			混雑率： -->
		</div>
		<div class="content_item" id="test_box" style="color:red; font-size: 18px;"> 
<!-- 			混雑率： -->
		</div>
		
	</div>
	<div class="button1" id="refresh" style="width: 50%;" onclick="javascript:location.reload();">
		更新	
	</div>


	<div id="bottom_box" >
		<div class="button1" id="back_to_home" style="width: 80%; color:#535353;" onclick= "jump_to_home()">
			ページトップへ戻る
		</div>
		<div id="copyright">
		<!-- 	Copyright© 2008 京都大学生活協同組合 All Rights Reserved. -->
		</div>
	</div>


	
</body>
</html>