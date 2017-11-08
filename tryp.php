<?php 
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    $_POST['position'] = "測試區";
    include_once("locaction.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>position</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onload="getposition()">
<script>

  function getposition(){
    var position = "<?php if(isset($_GET['position'])){echo "$position";};?>";
    if(position == "A"){
      document.getElementById(position).className = "herebox";
    }
    else if(position == "B"){
      document.getElementById(position).className = "herebox";
    }
    else if(position == "C"){
      document.getElementById(position).className = "herebox";
    }
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->


<div id="status">
</div>
<div class="conbox">
  <div id="A" class="box">A
  </div><div id="B" class="box">B
  </div><div id="C" class="box">C</div>
</div>

</body>
</html>