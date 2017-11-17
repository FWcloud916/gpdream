<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    $_POST['position'] = "選讀自然";
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
  <link rel="stylesheet" href="css/area3(1).css">
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
                   <h1>選讀自然</h1>
                </div>

                <div class="card theme-card">
                  <div class="box">
                      <a href="books/book1.php"><img src="images/book1.png" class="image1"></a>
                      <div class="middle"></div>
                      <div class="inner">
                        <div>
                          <p class="title">《黑熊手記：我與台灣黑熊的故事》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book2.php"><img src="images/book2.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《野狗之丘》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book3.php"><img src="images/book3.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《南風》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book4.php"><img src="images/book4.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《蝶道》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book5.php"><img src="images/book5.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《冷海情深》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book6.php"><img src="images/book6.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《濕地 石化 島嶼想像》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book7.php"><img src="images/book7.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《南臺灣綠色革命》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book8.php"><img src="images/book8.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《守望的魚》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book9.php"><img src="images/book9.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《自然禱告者》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book10.php"><img src="images/book10.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《久久酒一次》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book11.php"><img src="images/book11.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《田園之秋》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book12.php"><img src="images/book12.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《濱海茅屋札記》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book13.php"><img src="images/book13.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《森林家屋》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book14.php"><img src="images/book14.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《永遠的山》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book15.php"><img src="images/book15.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《我聽見群山報戰功》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book16.php"><img src="images/book16.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《獵人們》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book17.php"><img src="images/book17.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《荒野天堂》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book18.php"><img src="images/book18.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《鷹兒要回家》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book19.php"><img src="images/book19.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《自然旅情》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book20.php"><img src="images/book20.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《臺灣自然寫作選》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book21.php"><img src="images/book21.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《人與自然的對決》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book22.php"><img src="images/book22.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《搶救寂靜》</p>
                        </div>
                      </div>
                  </div>
                  <div class="box">
                    <a href="books/book23.php"><img src="images/book23.png" class="image1"></a>
                      <div class="inner">
                        <div>
                          <p class="title">《鯨生鯨世》</p>
                        </div>
                      </div>
                  </div>
                </div>
    </div>
</body>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery.heightLine.js"></script>
<script>
  /*card*/
  $(function(){
    var column = 2,
        roop = Math.ceil($(".card .box").length / column),
        i;
    for(i = 0;i < roop;i++){
      $(".js-heightLine-" + (i+1)).heightLine();
    }
  });

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
