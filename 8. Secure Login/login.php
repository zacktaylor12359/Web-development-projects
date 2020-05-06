<?php
function array_flatten($array) {
  if (!is_array($array)) return FALSE;
  $result = array();
  foreach ($array as $key => $value) {
    if (is_array($value))
      $result = array_merge($result, array_flatten($value));
    else $result[$key] = $value;
  }
  return $result;
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}  
$message=''
        . ''
        . '';
    if (!empty($_REQUEST['username']) && !empty($_REQUEST['password'])) {
        require_once "db.php";
        // I am hardcodeing the account for demo purposes
        $sql = "Select username From assignment9 Where username = ?";
        $args = [];
        $args[] = $_REQUEST['username'];
        $temp = execute($sql,true,$args);
        $user = array_flatten($temp);
        $user = implode("", $user);

        $sql2 = "Select password From assignment9 Where username = ?";
        $temp = execute($sql2, true, $args);
        $hash = array_flatten($temp);
        $hash = implode("", $hash);
        $password = $_REQUEST['password'];
        
        if($user != "" && strcmp(hash('md5',$password), $hash) === 0){
            $_SESSION["username"] = $user;
            $cipherMethod = "AES-128-CBC";
            $key="CPS276";
            $sql3 = "Select account, AES_DECRYPT(account, ?) From assignment9 "
                    . "Where username = ?";
            $args2 = [$key, $args[0]];
            $temp = execute($sql3, true, $args2);
            $account = array_flatten($temp);
            $_SESSION["account"] = $account['AES_DECRYPT(account, ?)'];
            header("Location: mainpage.php");
        }
        else {
            $message = "Incorrect username/passoword";
        }
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
<title>generic login</title>
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
    <form action="#" enctype="multipart/form-data" method="post" 
          required="true">
        <br>
        <div class="form-group">
            <input type="text" name="username" class="form-control" required ="true"
                   placeholder="User Name"/>
        </div>
       
        <div class="form-group">
            <input type="password" name="password" class="form-control" required ="true"
                   placeholder="Password"/>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="login">
                Log In
            </button>
        </div>
    </form>
   <?php echo($message) ?>
  </div>
</body>
</html>

