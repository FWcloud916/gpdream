<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    header("Content-Type: text/html; charset=utf-8");
    require_once("connMysql.php");
    date_default_timezone_set('Asia/Taipei');
    #echo date("Y-m-d-D")."<br>";
    #echo date("H:i:s")."<br>";
     if(isset($_GET['position'])){
      $position = $_GET['position'];
      if ($position == "a11") {
        $page = "area1-1.php?come=1";
      }
      elseif ($position == "a12") {
        $page = "area1-2.php?come=1";
      }
      elseif ($position == "a13") {
        $page = "area1-3.php?come=1";
      }
      elseif ($position == "a14") {
        $page = "area1-4.php?come=1";
      }
      elseif ($position == "a2") {
        $page = "area2.php?come=1";
      }
      elseif ($position == "a31") {
        $page = "area3-1.php?come=1";
      }
      elseif ($position == "a32") {
        $page = "area3-2.php?come=1";
      }
      elseif ($position == "fb") {
        $page = "feedback.php?come=1";
      }
      elseif ($position == "mg") {
        $page = "message.php?come=1";
      }
      
    } 
    else {
        $page = "index.php";
      }
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimal-ui initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>綠色之夢</title>
  <!-- <link rel="stylesheet" href="css/reset.css"> -->
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body  style="margin:0 auto;width:100%;height:100%">
  <script>
    var fb_id;
  // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
      console.log('statusChangeCallback');
      console.log(response);
      // The response object is returned with a status field that lets the
      // app know the current login status of the person.
      // Full docs on the response object can be found in the documentation
      // for FB.getLoginStatus().
      if (response.status === 'connected') {
        // Logged into your app and Facebook.
        testAPI();
        //gratest();//email,name
      } else {
        // The person is not logged into your app or we are unable to tell.
        document.getElementById('status').innerHTML = 'Please log ' +
          'into this app.';
      }
    }
    

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
      FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
      });
    }

    window.fbAsyncInit = function () {
      FB.init({
        appId: '1410330905697997',
        cookie: true,  // enable cookies to allow the server to access 
        // the session
        xfbml: true,  // parse social plugins on this page
        version: 'v2.9' // use graph api version 2.8
      });

      // Now that we've initialized the JavaScript SDK, we call 
      // FB.getLoginStatus().  This function gets the state of the
      // person visiting this page and can return one of three states to
      // the callback you provide.  They can be:
      //
      // 1. Logged into your app ('connected')
      // 2. Logged into Facebook, but not your app ('not_authorized')
      // 3. Not logged into Facebook and can't tell if they are logged into
      //    your app or not.
      //
      // These three cases are handled in the callback function.

      FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
      });

    };

    // Load the SDK asynchronously
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api(
      '/me',
      'GET',
      {"fields":"id,first_name,last_name"}, 
      function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.id + '!';
      document.getElementById('checklogin').style.display='none';
      fb_id = response.id;
      document.getElementById('fb_id').value=fb_id;
      document.getElementById('first_name').value=response.first_name;
      document.getElementById('last_name').value=response.last_name;
      form1.submit();
    });
  }
    /*function goToUrl() {
      document.location.herf="<?php echo "$page";?>";
    }*/
  </script>
<div id="status">
</div>
  <div id="checklogin" style="top:calc(50% - 40px);left:calc(50% - 140px);position:absolute;">
    <fb:login-button data-width="280" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false"
      data-use-continue-as="true" scope="public_profile,email,user_posts" onlogin="checkLoginState();">
    </fb:login-button>
  </div>

  <form id="form1" method="post" action="<?php echo "$page";?>">
    <input type="hidden" name="fb_id" value="" id="fb_id">
    <input type="hidden" name="first_name" value="" id="first_name">
    <input type="hidden" name="last_name" value="" id="last_name">
  </form>


<script src="js/jquery-2.1.1.min.js"></script>
<script>
  $(function(){
    $(".open-circle").on("click",function(){
      $(".circle-nav ul").stop().fadeToggle();
    });
  });
</script>
</body>
</html>
