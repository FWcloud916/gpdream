<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>自然旅情</title>
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
                    <a class="fancybox" rel="group" href="../images/book19.png" ><img src="../images/book19.png" style="height:100%;"></a>
              </div>
              <div style="background-color:rgba(0,0,0,0.5);width:100%;margin-bottom:8vh;">
                <br>
                  <h1>《自然旅情》</h1>
                  <br><br><br>
                  <p style="margin-left:8vw;font-weight:bold;">劉克襄</p>
                  <br><br>
                  <p>深山裡的彌猴、大海裡的巨鯨、天空中的飛鳥，以及各種奇特的自然人物誌，這些有趣而可愛的動物與人類所交織編串成的故事，是「鳥人」劉克襄這一回從事自然旅行的主角。這一位以自然寫作、歷史旅行享譽文壇的作家，也繼續他著名的定點式旅行。以歷史為經，山林為緯，或橫越、或縱貫，再次深入我們的島嶼。同時，他也提出一種心的觀察方法，在不同的兩個區域，試著守候在城市的某一處窗口，把窗外的四季變遷一一記錄下來，並轉化為思緒活潑而感人的文字。</p>
                  <br><br>
                  <p style="font-size:8vw;font-weight:bold;">作者介紹</p>
                  <br><br>
                  <p>劉克襄，文壇知名的自然生態作家，有關於自然觀察的著作無數，從研究台灣早期土地探險、鳥類觀察、自然寫作，以歷史為經、山林為緯，縱橫地深入探究這片島嶼。在晨星的著作有：《消失中的亞熱帶》、《山黃麻家書》、《快樂綠背包》等。</p>
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
