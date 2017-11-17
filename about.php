<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>關於我們</title>
	<link rel="stylesheet" href="css/font-awesome.min.css"><!--fonticon-->
	<link rel="stylesheet" href="css/dropmenu.css">
	<link rel="stylesheet" href="css/introduce.css">
</head>
<style>
@charset "UTF-8";

@media screen and (max-width:480px) {
	*{
		font-family:Microsoft JhengHei,sans-serif;
	}
	img.bg {
		/* Set rules to fill background */
		min-height: 100%;
		min-width: 100%;
		/* Set up proportionate scaling */
		width: 100%;
		height: auto;
		/* Set up positioning */
		position: fixed;
		top: 0;
		left: 0;
	 }
	 #page-wrap {
		 position: relative;
		 width: 100%;
		 margin-top: 15%;
		 /*margin-bottom: 25%;*/
	 }
	 .div-relative{
		 position:relative;
		 background-color:rgb(32, 24, 59);
		 left:5%;
		 width:90%;
		 height:150vw;
		 text-align: center;
	 }
	 .div-a{	 /*藍字 */
		 position:absolute;
		 left:20%;
		 top:15%;
		 border: 1vw solid #FFF;
		 /*background:#F00;*/
		 width:60%;
		 font-size: 6vw;
		 font-weight: bold;
		 color:#58CAF3;
		 padding-top: 15%;
	 }
	 .div-a p{
		 font-size: 3vw;
	 }

		.div-b{	/* 白字 */
			position:absolute;
			left:25%;
			top:11%;
			background-color:rgb(32, 24, 59);
			width:50%;
			font-size: 9vw;
			color:#FFF;
		}
		.div-c{	 /*藍字 */
 		 position:absolute;
 		 left:20%;
 		 top:65%;
 		 border: 1vw solid #FFF;
 		 /*background:#F00;*/
 		 width:60%;
 		 font-size: 6vw;
 		 font-weight: bold;
 		 color:#58CAF3;
 		 padding-top: 15%;
 	 }
	 .div-c p{
		 font-size: 3vw;
	 }
		.div-d{	/* 白字 */
			position:absolute;
			left:25%;
			top:61%;
			background-color:rgb(32, 24, 59);
			width:50%;
			font-size: 9vw;
			color:#FFF;
		}

}

</style>
<body>

	<img src="images/BG1.jpg" class="bg">

	<div id="page-wrap">
          <nav id="menu" class="left">
  						<ul>
  							<li><a href="index.php"><i class="fa fa-hoff-canvas Sime"></i>首頁</a></li>

  							<li>
  									<a href="#"><i class="fa fa-laptop"></i>展區介紹<i class="fa fa-caret-down"></i></a>
  									<ul>
  											<li><a href="area1.php">我們只有一個地球</a></li>
  											<li><a href="area2.php">尋找X點</a></li>
  											<li><a href="area3.php">書寫自然</a></li>
  											<li><a href="#">綠色行動</a></li>
  									</ul>
  							</li>
  							<li><a href="feedback.php"><i class="fa fa-info-circle"></i>意見回饋</a></li>
								<li><a href="about.php"><i class="fa fa-users"></i>聯絡資訊</a></li>
  		         </ul>

  						<a href="#" id="showmenu"> <i class="fa fa-bars fa-1x"></i> </a> <!--選單按鈕-->
					</nav>
					<div class="div-relative">
						<div class="div-a" onclick="location.href='http://ilt.nutn.edu.tw/';">國立臺南大學<br>數位學習科技學系<p>National University of Tainan Department of Information and Learning Technology</p></div>
						<div class="div-b">製作團隊</div>
						<canvas id="canvas1" style="width:100%;height:55vw;top:50%;margin:40% 0 0 0;"></canvas>
						<div class="div-c" onclick="location.href='https://www.nmtl.gov.tw/';">國立臺灣文學館 <p>National Museum of Taiwan Literature</p></div>
						<div class="div-d">合作單位</div>
					</div>

	</div>

</body>
<script src="js/jquery-2.1.1.min.js"></script>
<script>
/*menu*/
        $("#showmenu").click(function (e) { //點擊選單按鈕時
            e.preventDefault(); //停止
            $("#menu").toggleClass("show"); //在#menu增加Class
        });
        $("#menu a").click(function (event) {
            // event.preventDefault();
            if ($(this).next('ul').length) {
                $(this).next().toggle('fast');
                $(this).children('i:last-child').toggleClass('fa-caret-down fa-caret-left'); //展開子選單時改變Class
            }
        });
/*直線*/
			var canvas = document.getElementById('canvas1');
			var context = canvas.getContext('2d');

			context.beginPath();//開始繪製

			context.strokeStyle = '#FFF';/*設定線條顏色  預設為 黑色*/
			context.lineWidth =2;/*設定線條寬度  預設為 1*/
			context.lineCap = 'square';/*設定線頭格式 square  round  butt  預設值為square*/
			context.moveTo(160, 115);/*移到那一個坐標點 (X,Y)*/
			context.lineTo(140, 150);/*從x點到y點*/
			context.stroke();/*繪製邊線*/

</script>

</html>
