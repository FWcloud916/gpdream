<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    include_once("locaction.php");
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>選讀自然</title>
	<link rel="stylesheet" href="css/font-awesome.min.css"><!--fonticon-->
	<link rel="stylesheet" href="css/dropmenu.css">
	<link rel="stylesheet" href="css/area3.css">
</head>

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
												<li>
                                                    <a href="#"><i class="fa fa-tree"></i>綠色行動<i class="fa fa-caret-down"></i></a>
                                                    <ul>
                                                      <li><a href="message.php">綠色行動</a></li>
                                                      <li><a href="message_show.php">綠色樹</a></li>
                                                    </ul>
                                                </li>
										</ul>
								</li>
								<li><a href="feedback.php"><i class="fa fa-info-circle"></i>意見回饋</a></li>
								<li><a href="about.php"><i class="fa fa-users"></i>聯絡資訊</a></li>
							 </ul>

							<a href="#" id="showmenu"> <i class="fa fa-bars fa-1x"></i> </a> <!--選單按鈕-->
					</nav>


					<div  id="music">
							<audio id="music2" src="music/three.mp3"  loop="loop">不支持瀏覽器</audio>
							<a href="javascript:playPause();"><img src="images/firstmusic.png" width="40" height="40" id="music_btn2"></a>
					</div>
					<div id="header">
	            <h1>書寫自然</h1>
					</div>
					<div style="margin-top:15vw;">
						<div style="width:100%;background-color:#CA895F;height:40vw;line-height:40vw;text-align:center;" onclick="location.href='area3(1).php';">
							<h2 style="color:#fff;margin:0 0 0 20%;letter-spacing:2vw;font-family:Microsoft JhengHei;font-size:11vw;float:left;">選讀自然</h2>
							<canvas id="canvas1" width="30" height="60" style="position: relative;top:50%;transform:translateY(-50%);float:right;margin-right:5%;"></canvas>
						</div>
						<div style="width:100%;background-color:#A15E49;height:40vw;line-height:40vw;" onclick="location.href='area3(2).php';">
							 <h2 style="color:#fff;margin:0 0 0 20%;letter-spacing:2vw;font-family:Microsoft JhengHei;font-size:11vw;float:left;">行動歌詩</h2>
							 <canvas id="canvas2" width="30" height="60" style="position: relative;top:50%;transform:translateY(-50%);float:right;margin-right:5%;"></canvas>
						</div>
					</div>

	</div>

</body>
<script src="js/jquery-2.1.1.min.js"></script>
<script>
/*音樂播放暫停*/
function playPause() {
    var music = document.getElementById('music2');
    var music_btn = document.getElementById('music_btn2');
    if (music.paused){
        music.play();
        music_btn.src = 'images/speaker.png';
    }
    else{
        music.pause();
        music_btn.src = 'images/mute.png';
    }
}
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
/*三角形*/
				var canvas = document.getElementById('canvas1');
				      var context = canvas.getContext('2d');

				      context.beginPath();//開始繪製

				      context.moveTo(0, 0);//移到那一個坐標點 (X,Y)
				      context.lineTo(30, 30);//從x點到y點
				      context.lineTo(0,60);
				      context.lineTo(0, 0);

				      context.fillStyle = 'white';//填滿的顏色
				      context.fill();//填滿
					var canvas = document.getElementById('canvas2');
					      var context = canvas.getContext('2d');

					      context.beginPath();//開始繪製

								context.moveTo(0, 0);//移到那一個坐標點 (X,Y)
					      context.lineTo(30, 30);//從x點到y點
					      context.lineTo(0,60);
					      context.lineTo(0, 0);

					      context.fillStyle = 'white';//填滿的顏色
					      context.fill();//填滿

</script>

</html>
