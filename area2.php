<?php
    if(!isset($_SESSION)) 
    { 
      session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    $_POST['position'] = "尋找X點";

    include_once("locaction.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>尋找X點</title>
	<link rel="stylesheet" href="css/font-awesome.min.css"><!--fonticon-->
	<link rel="stylesheet" href="css/dropmenu.css">
	<link rel="stylesheet" href="css/area2.css">
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


					<div id="music">
							<audio id="music2" src="music/two.mp3"  loop="loop">不支持瀏覽器</audio>
							<a href="javascript:playPause();"><img src="images/firstmusic.png" width="40" height="40" id="music_btn2"></a>
					</div>
					<div id="header">
	            <h1>尋找X點</h1>
					</div>
          <div id="story">
            <p>故事箱</p>
          </div>
					<div>
  						<div id="theme" style="background-color:#9AE5E6;" onclick="location.href='https://www.youtube.com/watch?v=2SCKNOAHfWQ';">
  							<h2>一、弗氏海豚</h2>
								<img src="images/area2-1.png" style="width:35%;height:100%;">
  						</div>
  						<div id="theme" style="background-color:#D7B29D;" onclick="location.href='https://www.youtube.com/watch?v=U2efFKImySs';">
  							 <h2>二、環頸鴴</h2>
								 <img src="images/area2-2.png" style="width:25%;height:80%;position:relative;top:20%;">
							</div>
  						<div id="theme" style="background-color:#D3FAD6;" onclick="location.href='http://taibif.tw/zh/namecode/202456';">
  							<h2>三、茯苓菜</h2>
								<img src="images/area2-3.png" style="width:35%;height:100%;">
							</div>
  						<div id="theme" style="background-color:#FFF466;" onclick="location.href='https://www.youtube.com/watch?v=msQr0_59W-c';">
  							<h2>四、珠光鳳蝶</h2>
								<img src="images/area2-4.png" style="width:20%;height:80%;position:relative;top:10%;">
							</div>
  						<div id="theme" style="background-color:#BC8242;" onclick="location.href='https://youtu.be/Sfny8IvEkdc?t=19';">
  							<h2>五、台灣獼猴</h2>
								<img src="images/area2-5.png" style="width:18%;height:90%;position:relative;top:5%;">
							</div>
  						<div id="theme" style="background-color:#EFB58E;" onclick="location.href='https://www.youtube.com/watch?v=TtUtVQoFZCA';">
  							 <h2>六、黑鳶</h2>
								 <img src="images/area2-6.png" style="width:35%;height:100%;">
							</div>
  						<div id="theme" style="background-color:#73C697;" onclick="location.href='http://www.ylib.com/hotsale/beckoningsilence/';">
  							<h2 >七、水塘小調</h2>
								<img src="images/area2-7.png" style="width:30%;height:100%;">
							</div>
  						<div id="theme" style="background-color:#BAEFA2;" onclick="location.href='https://youtu.be/s2YSgnXGnUc?t=775';">
  							<h2>八、山林生界</h2>
								<img src="images/area2-8.png" style="width:35%;height:100%;">
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


</script>

</html>
