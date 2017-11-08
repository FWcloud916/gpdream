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
    if(isset($_POST['position'])){
        $position = $_POST['position'];
        if(isset($_GET['come'])){
            if($_GET['come']==1){
            $qrcode = 1;
            $sql = "INSERT INTO testposition (fb_id, position , come_in, day, isqrcode) VALUES (";
            $sql .= "'".$_SESSION["fb_id"]."',";
            $sql .= "'".$_POST['position']."',";
            $sql .= "'".$time."',";
            $sql .= "'".$day."',";
            $sql .= "'".$qrcode."')";
            mysql_query($sql);
            }
        }
        else{
            $qrcode = 0;
            $sql = "INSERT INTO testposition (fb_id, position , come_in, day, isqrcode) VALUES (";
            $sql .= "'".$_SESSION["fb_id"]."',";
            $sql .= "'".$_POST['position']."',";
            $sql .= "'".$time."',";
            $sql .= "'".$day."',";
            $sql .= "'".$qrcode."')";
            mysql_query($sql);
            }
    }
      
#######################################################################
  
  
?>