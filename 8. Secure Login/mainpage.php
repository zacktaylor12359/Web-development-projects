<?php
    date_default_timezone_set('America/Detroit');
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }  
    if (!isset($_POST['logout'])&& !empty($_SESSION['username']) && !empty($_SESSION['account'])) {
        $username=$_SESSION["username"];
        $account=$_SESSION["account"];
        $date=date("m/d/Y");
    }
    else {
        session_destroy();
        header("Location: login.php");  
    }
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
<title>main page</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
crossorigin="anonymous">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
</head>

<body>
  <div class="container">
      <p>User name = <?=$username?></p>
      <p>Account = <?=$account ?></p>
      <br>
      <p>Current Date = <?php echo($date)?></p>
      <hr size="1"/>
      <form method="post" action="mainpage.php">
       <input type="submit" value="Log Out" name="logout">
      </form>
  </div>
</body>
</html>
