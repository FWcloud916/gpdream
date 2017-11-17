<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>鯨生鯨世</title>
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
                    <a class="fancybox" rel="group" href="../images/book23.png" ><img src="../images/book23.png" style="height:100%;"></a>
              </div>
              <div style="background-color:rgba(0,0,0,0.5);width:100%;margin-bottom:8vh;">
                <br>
                  <h1>《鯨生鯨世》</h1>
                  <br><br><br>
                  <p style="margin-left:8vw;font-weight:bold;">廖鴻基</p>
                  <br><br>
                  <p>廖鴻基用親切動人的筆調，為每一種他們發現的鯨豚作傳，給予這些海洋中的巨人和精靈美麗的生命剪影。牠們的體態、動作、習性和族群，牠們的貪嗔癡、愛與憎。我有幸在編輯過程中，逐篇地賞讀了這令人激動的文字，也彷彿看到了花蓮的海如在眼前，陽光照在碧澄澄的海，海像一面巨大的藍色鏡子，於其中映現另類時空的愛與死，追索與孤獨，激切之外也有沉思，就像鯨豚神祕難解的擱淺。我也彷彿透過這些篇章而改造了自己的一些品質。</p>
                  <br><br>
                  <p style="font-size:8vw;font-weight:bold;">作者介紹</p>
                  <br><br>
                  <p>一九五七年出生於花蓮市。三十五歲成為職業討海人。一九九六年組成尋鯨小組於花蓮海域從事鯨豚生態觀察，並擔任海洋生態解說員，一九九八年發起黑潮海洋文教基金會，任創會董事長，致力於台灣海洋環境、生態及文化工作。曾獲時報文學獎散文類評審獎、聯合報讀書人文學類最佳書獎、一九九六年吳濁流文學獎小說正獎、第一屆台北市文學獎文學年金、第十二屆賴和文學獎以及二○○六年巫永福文學獎。</p>
                  <br><br>
                  <p>出版作品包括《討海人》、《鯨生鯨世》、《漂流監獄》、《尋找一座島嶼》、《漂島》、《後山鯨書》、《南方以南：海生館駐館筆記》、《飛魚．百合》、《漏網新魚》等。多篇文章入選台灣的中學國文課本及重要選集，以其書寫的取材廣闊與描繪之幽深，自成一格，影響深遠。</p>
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
