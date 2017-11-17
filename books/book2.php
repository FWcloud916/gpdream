<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>野狗之丘</title>
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
                    <a class="fancybox" rel="group" href="../images/book2.png" ><img src="../images/book2.png" style="height:100%;"></a>
              </div>
              <div style="background-color:rgba(0,0,0,0.5);width:100%;margin-bottom:8vh;">
                <br>
                  <h1>《野狗之丘》</h1>
                  <br><br><br>
                  <p style="margin-left:8vw;font-weight:bold;">劉克襄</p>
                  <br><br>
                  <p>二十多年前，在市中心車站的天橋旁邊，還看得到野狗在街頭遊蕩，一如流浪漢。十幾年前，野狗尚能在城市邊緣的小山、荒地和垃圾場存活。</p>
                  <br><br>
                  <p>現在垃圾場消失，野狗的生存空間恐怕會更加萎縮。這個城市將只剩下人類、蟑螂、老鼠和人類的寵物──家狗、家貓。沒有人會幫野狗爭取生存的權利。野狗算不算一個城市文明的一份子，還是過時的廢棄物？</p>
                  <br><br>
                  <p style="font-size:8vw;font-weight:bold;">作者介紹</p>
                  <br><br>
                  <p>年輕時以鳥類生態為散文題材，開啟台灣自然寫作風氣。晚近創作主題則以生態旅遊，古道探查和野菜蔬果為主。在多年的創作過程裡，不斷嘗試各種自然文體和題材的試驗，大至地理文史的論述，小及昆蟲花草的研究，都潛心著墨。曾出版自然著作三十餘部，並獲台灣詩獎、吳三連獎、台灣自然保育獎、吳魯芹散文獎等。動物故事系列是其書寫台灣山林半甲子以來，耗時最長的創作。1991年第一本《風鳥皮諾查》出版後，獲評為當年開卷十大最佳好書，一時洛陽紙貴。此後每隔一段時日，皆有動物小說出爐。晚近更完成《野狗之丘》的書寫，描述野狗的生活習性，探討城市流浪狗。</p>
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
