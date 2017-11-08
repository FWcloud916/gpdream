<?php
    if(!isset($_SESSION)) 
    { 
      session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
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
            $_POST['last_name'] = "unknown";
        }   $_POST['first_name'] = "unknown";
        
    }
      
#######################################################################
    $memsql = "SELECT account FROM member WHERE account='".$_POST["account"]."'";
    $memrecord = mysql_query($memsql);
    if(mysql_num_rows($memrecord)==0) {
        $sql = "INSERT INTO member (account, fb_id, last_name , first_name) VALUES (";
        $sql .= "'".$_SESSION["fb_id"]."',";
        $sql .= "'".$_POST['last_name']."',";
        $sql .= "'".$_POST['first_name']."')";
        mysql_query($sql);
    }
  
  
?>