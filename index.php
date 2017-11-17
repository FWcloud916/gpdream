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
  <title>綠色之夢</title>
  <!-- <link rel="stylesheet" href="css/reset.css"> -->
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
  <div id="bgpic">
    <div id="mid-conent">
      <br>
        <h1>綠色之夢</h1>
        <p>當代臺灣自然書寫特展</p>
        <div id="circle">
            <nav class="circle-nav theme-circle-nav">
              <ul>
                <li><a href="area1.php">展區介紹</a></li>
                <li><a href="#">平面圖</a></li>
                <li><a href="#">數據分析</a></li>
                <li><a href="#">路線分析</a></li>
              </ul>
              <p class="open-circle"><span>click</span></p>
            </nav>
        </div>
      </div>
  </div>


<script src="js/jquery-2.1.1.min.js"></script>
<script>
  $(function(){
    $(".open-circle").on("click",function(){
      $(".circle-nav ul").stop().fadeToggle();
    });
  });
</script>
</body>
</html>
