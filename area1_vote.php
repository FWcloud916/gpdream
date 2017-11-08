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
        }   
        
    }

    echo $_POST['vote'];
    if(isset($_POST['position'])){
        $position = $_POST['position'];
        $table = $_POST['voteTable'];
        $qrcode = $_POST['isqrcode'];

        if (isset($_POST['vote'])) {
            $sql = "INSERT INTO ".$_POST['voteTable']." (`vote`, `issue`, `fb_id`, `time`, `day`, `isqrcode`) VALUES (";
            $sql .= "'".$_POST['vote']."',";
            $sql .= "'".$_POST['position']."',";
            $sql .= "'".$_SESSION["fb_id"]."',";
            $sql .= "'".$time."',";
            $sql .= "'".$day."',";
            $sql .= "'".$qrcode."')";
            mysql_query($sql);
            echo $sql;
        }
        
    }
      
#######################################################################
    header("Location: area1.php");
  
?>