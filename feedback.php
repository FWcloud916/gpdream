<?php
    if(!isset($_SESSION)) 
    { 
      session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    $_POST['position'] = "意見回饋";
    include_once("locaction.php");
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>意見回饋</title>
  <link rel="stylesheet" href="css/font-awesome.min.css"><!--fonticon-->
  <link rel="stylesheet" href="css/dropmenu.css">
  <link rel="stylesheet" href="css/feedback.css">

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
            <li><a href="about.php"><i class="fa fa-users"></i>聯絡資訊</a></li>
           </ul>

          <a href="#" id="showmenu"> <i class="fa fa-bars fa-1x"></i> </a> <!--選單按鈕-->
      </nav>
              <div id="header">
                 <h1>有話想說?</h1>
                 <p>對於此展覽有沒有想對我們說的話呀?<br>讓我們知道您對此展覽的感想吧~~</p>
              </div>
              <center>
                <form id="feedback" style="width:100%;" method="post" action="feedback_add.php">
                  <h2>請問您造訪過此展覽的次數?</h2>
                  <ul id="ul-answer">
                    <li id="li-answer"><input type="radio" name="frequency" data-labelauty="1次" value="1次"></li>
                    <li id="li-answer"><input type="radio" name="frequency" data-labelauty="2-4次" value="2-4次"></li>
                    <li id="li-answer"><input type="radio" name="frequency" data-labelauty="5次以上" value="5次以上"></li>
                  </ul>
                  <h2>此展覽哪一展區令您印象深刻?</h2>
                  <ul id="ul-answer">
                    <li id="li-answer"><input type="radio" name="area" data-labelauty="我們只有一個地球" value="我們只有一個地球"></li>
                    <li id="li-answer"><input type="radio" name="area" data-labelauty="尋找X點" value="尋找X點"></li>
                    <li id="li-answer"><input type="radio" name="area" data-labelauty="書寫自然" value="書寫自然"></li>
                    <li id="li-answer"><input type="radio" name="area" data-labelauty="綠色行動" value="綠色行動"></li>
                  </ul>
                  <h2>您滿意此次《綠色之夢》展覽嗎?</h2>
                  <ul id="ul-answer">
                    <li id="li-answer"><input type="radio" name="satisfaction" data-labelauty="滿意" value="滿意"></li>
                    <li id="li-answer"><input type="radio" name="satisfaction" data-labelauty="普通" value="普通"></li>
                    <li id="li-answer"><input type="radio" name="satisfaction" data-labelauty="有待改善" value="有待改善"></li>
                  </ul>
                  <h2>您對此展覽有甚麼建議嗎?</h2>
                  <textarea rows="10" class="text-field" form="feedback" name="suggestion"></textarea>
                  <input type="submit" value="送出" class="form-submit">
                </form>
              </center>
  </div>
</body>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery-labelauty.js"></script>

<script>
/*單選題*/
$(function(){
	$(':input').labelauty();
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
