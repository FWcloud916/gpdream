<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>永遠的山</title>
  <!-- Add jQuery library -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox -->
  <link rel="stylesheet" href="../fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
  <script type="text/javascript" src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

  <!-- Optionally add helpers - button, thumbnail and/or media -->
  <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
  <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
  <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
  <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".fancybox").fancybox();
    });
  </script>

  <link rel="stylesheet" href="../css/font-awesome.min.css"><!--fonticon-->
  <link rel="stylesheet" href="../css/books.css">
  <link rel="stylesheet" href="../css/dropmenu.css">
</head>
<body>
    <img src="../images/BG1.jpg" class="bg">
    <div id="page-wrap">
              <nav id="menu" class="left">
                  <ul>
                    <li><a href="../index.php"><i class="fa fa-hoff-canvas Sime"></i>首頁</a></li>

                    <li>
                        <a href="#"><i class="fa fa-laptop"></i>展區介紹<i class="fa fa-caret-down"></i></a>
                        <ul>
                            <li><a href="../area1.php">我們只有一個地球</a></li>
                            <li><a href="../area2.php">尋找X點</a></li>
                            <li><a href="../area3.php">書寫自然</a></li>
                            <li><a href="#">綠色行動</a></li>
                        </ul>
                    </li>
                    <li><a href="../feedback.php"><i class="fa fa-info-circle"></i>意見回饋</a></li>
                    <li><a href="../about.php"><i class="fa fa-users"></i>聯絡資訊</a></li>
                   </ul>

                  <a href="#" id="showmenu"> <i class="fa fa-bars fa-1x"></i> </a> <!--選單按鈕-->
              </nav>


              <div style="width:100%;height:100vw;text-align:center;margin:5vw 0 5vw 0;">
                    <a class="fancybox" rel="group" href="../images/book14.png" ><img src="../images/book14.png" style="height:100%;"></a>
              </div>
              <div style="background-color:rgba(0,0,0,0.5);width:100%;margin-bottom:8vh;">
                <br>
                  <h1>《永遠的山》</h1>
                  <br><br><br>
                  <p style="margin-left:8vw;font-weight:bold;">陳列</p>
                  <br><br>
                  <p>帶著戀慕之情，跋涉大山峻嶺，去看大自然中的美與奧秘，靜靜領會，面對自己。〈告別與承諾〉回顧山中一年一連串的驚訝、摸索與視野的一再重新開啟。〈玉山去來〉記述高山荒寒地帶的萬千氣象與生界特質。〈排雲起居注〉在海拔三四八○公尺目送著日子如何莊嚴地從白天過渡到黑夜。〈原始闊葉林獨訪〉深入楠溪林道，感受殘存原始林的宏深與神祕。〈觀高還須能望遠〉見證森林的消失，追蹤帝雉的身影。〈八通關種種〉思索地理與歷史，描寫草原的風情與魅力。〈秀姑坪漫遊〉是玉山圓柏社會在火神肆虐下集體滅亡與再生的慘烈故事。〈瓦拉米隱憂〉思慮文明力量與自然祕藏間的衝突。〈布農族紀念〉有布農族巡山員深埋族群記憶的山林經驗。〈看山是山〉總結了在這個島嶼最高地區行走逗留過程中的諸多讚嘆歡喜。</p>
                  <br><br>
                  <p style="font-size:8vw;font-weight:bold;">作者介紹</p>
                  <br><br>
                  <p>本名陳瑞麟，一九四六年生於嘉義農村。淡江大學英文系畢業，曾任國中教師二年，後因政治事件繫獄四年八個月。出獄後，以〈無怨〉獲第三屆時報文學獎散文獎首獎，隔年再以〈地上歲月〉獲第四屆散文獎首獎。一九九一年以《永遠的山》獲第十四屆時報文學獎推薦獎，成為自然書寫的經典作品之一。在參與政治活動約十年之後，回歸文學專事寫作。目前定居花蓮。著有《地上歲月》、《永遠的山》、《人間．印象》、《躊躇之歌》。</p>
                  <br><br>
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
