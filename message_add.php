<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
  header("Content-Type: text/html; charset=utf-8");
  require_once("connMysql.php");
  include_once("locaction.php");

  date_default_timezone_set('Asia/Taipei');
    $day=date("Y-m-d-D");
    $time=date("H:i:s");
    if(isset($_POST['fb_id'])){
        $_SESSION["fb_id"] = $_POST['fb_id'];

    }else {
        if(isset($_SESSION["fb_id"])){
        $_SESSION["fb_id"] = $_SESSION["fb_id"];
        }
        else {
            $_SESSION["fb_id"] = "0";
        }   
        
    }

  
  $sql = "INSERT INTO `message` (`fb_id`, `impression`, `green_action`, `time`, `day`) VALUES (";
  $sql .= "'".$_SESSION["fb_id"]."',";
  $sql .= "'".$_POST['impression']."',";
  $sql .= "'".$_POST['green_action']."',";
  $sql .= "'".$time."',";
  $sql .= "'".$day."')";
  mysql_query($sql);

  $impression = $_POST['impression'];
  $green_action = $_POST['green_action'];
  #header("Location: message_show.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>綠色行動</title>
  </head>
  <body>
    <form id="form1" method="post" action="message_show_me.php">
        <input type="hidden" name="impression" value="<?php echo "$impression"; ?>" id="impression">
        <input type="hidden" name="green_action" value="<?php echo "$green_action"; ?>" id="green_action">
    </form>
  </body>
</html>

<?php  echo "<script>form1.submit();</script>"; ?>
