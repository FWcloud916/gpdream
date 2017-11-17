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
  <title>我們只有一個地球</title>
  <link rel="stylesheet" href="css/font-awesome.min.css"><!--fonticon-->
  <link rel="stylesheet" href="css/dropmenu.css">
  <link rel="stylesheet" href="css/area1.css">
</head>
<body>
    <img src="images/BG1.jpg" class="bg">
    <div  id="page-wrap">
                <nav id="menu" class="left">
                    <ul>
                      <li><a href="index.php"><i class="fa fa-hoff-canvas Sime"></i>首頁</a></li>

                      <li>
                          <a href="#"><i class="fa fa-laptop"></i>展區介紹<i class="fa fa-caret-down"></i></a>
                          <ul>
                              <li><a href="area1.php">我們只有一個地球</a></li>
                              <li><a href="area2.php">尋找X點</a></li>
                              <li><a href="area3.php">書寫自然</a></li>
                              <li><a href="#"><i class="fa fa-tree"></i>綠色行動<i class="fa fa-caret-down"></i></a>
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
                  <audio id="music2" src="music/one.mp3"  loop="loop">不支持瀏覽器</audio>
                  <a href="javascript:playPause();"><img src="images/firstmusic.png" width="40" height="40" id="music_btn2"></a>
                </div>
                <div id="header">
                 <h1 style="margin-bottom:0;">我們</h1>
                 <h1 style="margin-top:0;">只有一個地球</h1>
                </div>
                <div style="margin-top:15vw;">
                  <div id="theme" style="background-color:#EF8895;" onclick="location.href='area1-1.php';">
                    <img src="images/area1-1.png">
                    <h2>台灣適不適核?</h2>
                  </div>
                  <div id="theme" style="background-color:#F7E98B;" onclick="location.href='area1-2.php';">
                    <img src="images/area1-2.png">
                     <h2>台灣快變垃圾島?</h2>
                  </div>
                  <div id="theme" style="background-color:#F2913A;" onclick="location.href='area1-3.php';">
                    <img src="images/area1-3.png">
                    <h2>天燈該不該放?</h2>
                  </div>
                  <div id="theme" style="background-color:#A0D7E1;" onclick="location.href='area1-4.php';">
                    <img src="images/area1-4.png">
                    <h2>你呼吸的是甚麼空氣?</h2>
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
