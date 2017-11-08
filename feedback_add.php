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

  
  $sql = "INSERT INTO `feedback` (`fb_id`, `frequency`, `area`, `satisfaction`, `suggestion`, `time`, `day`) VALUES (";
  $sql .= "'".$_SESSION["fb_id"]."',";
  $sql .= "'".$_POST['frequency']."',";
  $sql .= "'".$_POST['area']."',";
  $sql .= "'".$_POST['satisfaction']."',";
  $sql .= "'".$_POST['suggestion']."',";
  $sql .= "'".$time."',";
  $sql .= "'".$day."')";
  mysql_query($sql);

  $impression = $_POST['impression'];
  $green_action = $_POST['green_action'];
  header("Location: index.php");
?>
