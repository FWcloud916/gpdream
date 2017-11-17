<?php
    if(!isset($_SESSION)) 
    { 
      session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    $_POST['position'] = "臺灣快變垃圾島?";
    $_POST['voteTable'] = "trash";
    include_once("locaction.php");
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>臺灣快變垃圾島?</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/dropmenu.css">
  <link rel="stylesheet" href="css/area1-1.css">
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
                <h1 style="margin-bottom:0;">臺灣</h1>
                <h1 style="margin-top:0;">快變垃圾島?</h1>
              </div>
              <div class="slideshow-container">
                  <div class="mySlides fade">
                    <img src="images/banner_trash-02.jpg" style="width:100%">
                  </div>
                </div>
                <br>
                <div id="vs-head">
                  <h1>臺灣v.s.垃圾</h1>
                </div>
                <div id="question">
                  <p>您認為臺灣垃圾多不多?</p>
                  <button type="button" name="much" value="多" id="much" onclick="vote(1)" style="background-color:#59F4F4;">多</button>
                  <button type="button" name="less" value="不多" id="less" onclick="vote(0)" style="background-color:#FDF54D;">不多</button>
                  <form id="form1" method="post" action="area1_vote.php">
                    <input type="hidden" name="vote" value="" id="vote">
                    <input type="hidden" name="position" value="<?php if(isset($_POST['position'])){ echo $_POST['position']; }?>" id="position">
                    <input type="hidden" name="voteTable" value="<?php if(isset($_POST['voteTable'])){ echo $_POST['voteTable']; }?>" id="voteTable">
                    <input type="hidden" name="isqrcode" value="<?php if(isset($_GET['come'])){ echo $_GET['come']; }else{echo "0";}?>" id="isqrcode">
                  </form
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
            document.getElementById('vote').value=1;
          }
          else if (x == "0") {
            document.getElementById('vote').value=0;
          }
          form1.submit();
        }
    </script>
</html>
