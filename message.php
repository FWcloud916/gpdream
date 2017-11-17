<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
  header("Content-Type: text/html; charset=utf-8");
  $_POST['position'] = "綠色行動";
  require_once("connMysql.php");
  include_once("locaction.php");
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>綠色行動</title>
  <!-- <link rel="stylesheet" href="css/reset.css"> -->
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/dropmenu.css">
  <link rel="stylesheet" type="text/css" href="css/message.css">
</head>
<body>
  <nav id="menu" class="left">
    <ul>
      <li><a href="index.php"><i class="fa fa-hoff-canvas Sime"></i>首頁</a></li>

      <li>
          <a href="#"><i class="fa fa-laptop"></i>展區介紹<i class="fa fa-caret-down"></i></a>
          <ul>
              <li><a href="area1.php">我們只有一個地球</a></li>
              <li><a href="area2-1.php">尋找x點</a></li>
              <li><a href="area3.php">書寫自然</a></li>
              <li><a href="area4.php">行動歌詩</a></li>
              
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
  <div id="bgpic">
    <div id="mid-conent">
      <br>
      <h1>綠色行動</h1>
    </div>
  </div>
  <div class="messagecontainer">
    <div class="messagebox">
      <form action="message_add.php" id="usrform" method="post"><br>
        <p>留下您印象深刻的文句，並與我們分享</p>
        <textarea  rows="5" name="impression" form="usrform" autofocus></textarea><br>
        <p>您的「綠色行動」是什麼?</p>
        <textarea  rows="5" name="green_action" form="usrform"></textarea><br>
        <div class="center">
          <input type="submit" value="送出">
        </div>
        
      </form>
    </div>
  </div>
  
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
</script>
</body>
</html>
