<?php
    if(!isset($_SESSION)) 
    { 
      session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    $_POST['position'] = "臺灣適不適合?";
    $_POST['voteTable'] = "nucler";
    include_once("locaction.php");
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>臺灣適不適核?</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/dropmenu.css">
  <link rel="stylesheet" href="css/area1-1.css">
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


              <div id="header">
                <h1 style="margin-bottom:0;">臺灣</h1>
                <h1 style="margin-top:0;">適不適核?</h1>
              </div>
              <div class="slideshow-container">
                  <div class="mySlides fade">
                    <div class="numbertext">1 / 4</div>
                    <img src="images/banner_unclear-01.jpg" style="width:100%">
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext">2 / 4</div>
                    <img src="images/banner_trash-02.jpg" style="width:100%">
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext">3 / 4</div>
                    <img src="images/banner_light-03.jpg" style="width:100%">
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="images/banner_air-04.jpg" style="width:100%">
                  </div>

                </div>
                <br>
                <div style="text-align:center;margin-bottom:5vh;">
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                </div>

                <div style="border:1vw solid #000000;width:60vw;margin:0 auto;text-align:center;">
                  <h1 style="margin:0;">台灣v.s.核能</h1>
                </div>
                <div style="width:100%;margin:0 auto;text-align:center;">
                  <p style="font-size:6vw;letter-spacing:2vw;">您認為台灣適不適核?</p>
                </div>
                <div style="width:100%;margin:0 auto;text-align:center;">
                  <button name="fit" value="適合" id="fit" onclick="vote(1)" style="width:40vw;height:12vh;border:none;border-radius:3vw;background-color:#59F4F4;font-size:7vw;font-family:Microsoft JhengHei;margin:0 auto;">適合</button>
                  <button name="unfit" value="不適合" id="unfit" onclick="vote(0)" style="width:40vw;height:12vh;border:none;border-radius:3vw;background-color:#FDF54D;font-size:7vw;font-family:Microsoft JhengHei;margin:0 auto;">不適合</button>
                  <form id="form1" method="post" action="area1-1_test123.php">
                    <input type="hidden" name="vote" value="" id="vote">
                  </form>
                </div>
        </div>
</body>
<script src="js/jquery-2.1.1.min.js"></script>
<script>
        /*menu*/
        $("#showmenu").click(function (e) { //點擊選單按鈕時
            e.preventDefault(); //停止
            $("#menu").toggleClass("show"); //在#menu增加Class
            if($("#yes-no").css("visibility")=="hidden"){
              $("#yes-no").css("visibility","visible");
            }
            else{
              $("#yes-no").css("visibility","hidden");
            }
        });
        $("#menu a").click(function (event) {
            // event.preventDefault();
            if ($(this).next('ul').length) {
                $(this).next().toggle('fast');
                $(this).children('i:last-child').toggleClass('fa-caret-down fa-caret-left'); //展開子選單時改變Class
            }
        });
        /*自動幻燈片*/
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }

        function vote(x){
          if (x == "1") {
            document.getElementById('vote').value="true";
          }
          else if (x == "0") {
            document.getElementById('vote').value="false";
          }
          form1.submit();
        }
    </script>
</html>
