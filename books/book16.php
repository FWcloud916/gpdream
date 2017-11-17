<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>獵人們</title>
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
                    <a class="fancybox" rel="group" href="../images/book16.png" ><img src="../images/book16.png" style="height:100%;"></a>
              </div>
              <div style="background-color:rgba(0,0,0,0.5);width:100%;margin-bottom:8vh;">
                <br>
                  <h1>《獵人們》</h1>
                  <br><br><br>
                  <p style="margin-left:8vw;font-weight:bold;">朱天心</p>
                  <br><br>
                  <p>「這貓群且在我寫作中不斷增生、繁衍、變幻、消失……，他們是非常典型的城市流浪貓和野貓的代表，我恰巧遇到了，目睹其生滅，以為有責任寫下來，證明他們確實來過世上一場。」(辛亥貓)</p>
                  <br><br>
                  <p>朱天心是個愛貓人也是養貓人（照她的話是與貓共處），卻從來不是個留貓的人，但她仍以自己的獨特方式與感性，為相逢未必相識的眾貓族留存牠們躍入躍出她生命動線中的足跡。《獵人們》雖是散文隨筆集，但也可以視為小說家「都市人類學」式的台灣社會「畸零族群」觀察，只是凝視對象從人轉移到了貓，作家用情更深，在她自己的人生與時間中的刻鑿痕跡也就越深。 在本書十篇作品中，作家述寫自己與屋裡屋外、可見的與不可見的生活領域裡眾貓族的邂逅與相處，她給牠們自由，卻賺得了羈絆；對牠們的生命尊之重之，自己的生命也得到豐富。</p>
                  <br><br>
                  <p style="font-size:8vw;font-weight:bold;">作者介紹</p>
                  <br><br>
                  <p>朱天心，山東臨胊人，一九五八年生於高雄鳳山。台灣大學歷史系畢業。曾主編《三三集刊》，並多次榮獲時報文學獎及聯合報小說獎，現專事寫作。著有《方舟上的日子》、《擊壤歌》、《昨日當我年輕時》、《未了》、《時移事往》、《我記得……》、《想我眷村的兄弟們》、《小說家的政治周記》、《學飛的盟盟》、《古都》、《漫遊者》、《二十二歲之前》、《初夏荷花時期的愛情》等書。</p>
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
