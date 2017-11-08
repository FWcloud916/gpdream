<?php
    if(!isset($_SESSION)) 
    { 
      session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    $_POST['position'] = "弗氏海豚";
    include_once("locaction.php");
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>弗氏海豚</title>
  <link rel="stylesheet" href="css/font-awesome.min.css"><!--fonticon-->
  <link rel="stylesheet" href="css/area2-1.css">
  <link rel="stylesheet" href="css/dropmenu.css">
</head>
<body>
    <div>
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
              </ul>

                <a href="#" id="showmenu"> <i class="fa fa-bars fa-1x"></i> </a> <!--選單按鈕-->
              </nav>

              <div id="animate">
                <img src="images/dolphin.gif"><!--gif動畫-->
              </div>

                <div class="tabpanel theme-tabpanel">
                  <ul>
                    <li class="is-active">故事箱介紹</li>
                  </ul>
                  <div id="tab1">
                    <h1>弗氏海豚</h1>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 牠們叫聲尖細、清晰,一點也不像是牠們粗壯的身體發出的聲音。一般海豚的眼睛很難看到,得在牠們刻意翻身近距離和你對望時,才能有機會看入牠的眼神。鯨豚的眼神神祕、深奧,我曾經從牠們的眼裡看到了粗野、仇惡或真摯和善的笑......那眼神往往能深入胸腔搜索靈魂。然
                        而,弗氏海豚的眼睛非常容易看到,只要牠們跳出水面,就像每一個玩具布偶總是少不了圓睜睜的眼睛。我了解,我所看到的只是牠們的一個符號標記,那並不是牠們真正的眼睛。</p>
                    <p>—廖鴻基〈迷途羔羊——弗氏海豚〉《鯨生鯨世》</p>
                  </div>
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
</script>
</html>
