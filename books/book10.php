<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>久久酒一次</title>
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
                    <a class="fancybox" rel="group" href="../images/book10.png" ><img src="../images/book10.png" style="height:100%;"></a>
              </div>
              <div style="background-color:rgba(0,0,0,0.5);width:100%;margin-bottom:8vh;">
                <br>
                  <h1>《久久酒一次》</h1>
                  <br><br><br>
                  <p style="margin-left:8vw;font-weight:bold;">孫大川</p>
                  <br><br>
                  <p>事隔近二十年，《久久酒一次》增訂出版，增加幾篇作品，重新包裝，新瓶舊酒，承載、品味的仍舊是孫大川先生思索自我、原住民文化、歷史的最原初心境，以及與時俱增所陳釀出的真摯醇熟，延續的依然是其對族群命運不捨的陪伴與無悔的承諾，歷久而彌新。</p>
                  <br><br>
                  <p style="font-size:8vw;font-weight:bold;">作者介紹</p>
                  <br><br>
                  <p>1953年生於下賓朗（pinaseki）部落，族名巴厄拉邦（Palabang）。 比利時魯汶大學漢學碩士、輔大哲學研究所碩士、台大中文系畢業。曾任教於東吳大學、東華大學、清華大學、輔仁大學、政治大學、台灣大學等校。曾擔任山海文化雜誌社總策劃及總編輯、東華大學民族發展研究所所長兼民族語言傳播學系系主任、財團法人原舞者文化藝術基金會董事長、華視董事、公視董事、兩廳院董事等。</p>
                  <br><br>
                  <p>著有《久久酒一次》、《神話之美──台灣原住民之想像世界》、《山海世界──台灣原住民心靈世界的摹寫》、《夾縫中的族群建構──台灣原住民的語言、文化與政治》、《姨公公》、《BaLiwakes跨時代轉唱的部落音符──卑南族音樂靈魂陸森寶》、《搭蘆灣手記》等書。並曾主編中英對照《台灣原住民之神話與傳說》系列叢書十卷本、《台灣原住民族漢語文學選集》（小說卷、散文卷、詩歌卷、評論卷）七冊。且與日本學者下村作次郎、土田滋等合作，出版《台灣原住民文學選集》十卷。現任行政院原住民族委會主任委員、政治大學台灣文學研究所副教授、台灣原住民文學作家筆會會長。</p>
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
