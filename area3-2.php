<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    $_POST['position'] = "行動歌詩";
    include_once("locaction.php");
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>行動歌詩</title>
  <!-- Add jQuery library -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox -->
  <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

  <!-- Optionally add helpers - button, thumbnail and/or media -->
  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".fancybox").fancybox();
    });
  </script>

  <link rel="stylesheet" href="css/font-awesome.min.css"><!--fonticon-->
  <link rel="stylesheet" href="css/dropmenu.css">
  <link rel="stylesheet" href="css/area3(2).css">

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
              <div id="header">
                 <h1>行動歌詩</h1>
              </div>
              <div id="circle">
                  <img src="images/area4-middle.png">
                  <a class="fancybox" rel="group" href="images/poem1.gif" ><img src="images/area4-1.png" style="top:49vw;left:2vw;"></a>  <!--圖一(左上)-->
                  <a class="fancybox" rel="group" href="images/poem2.gif" ><img src="images/area4-2.png" style="top:85vw;left:2vw;"></a> <!--圖二(左下)-->
                  <a class="fancybox" rel="group" href="images/poem3.gif" ><img src="images/area4-3.png" style="top:105vw;left:36vw"></a> <!--圖三(中下)-->
                  <a class="fancybox" rel="group" href="images/poem4.gif" ><img src="images/area4-4.png" style="top:85vw;left:70vw;"></a> <!--圖四(右下)-->
                  <a class="fancybox" rel="group" href="images/poem5.gif" ><img src="images/area4-5.png" style="top:49vw;left:70vw;"></a> <!--圖五(右上)-->
                  <a class="fancybox" rel="group" href="images/poem6.gif" ><img src="images/area4-6.png" style="top:30vw;left:36vw;"></a> <!--圖六(中上)-->
              </div>
    </div>
</body>
<!-- <script src="js/jquery-2.1.1.min.js"></script> -->
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
</html>
