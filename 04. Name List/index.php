<?php
if(isset($_POST['add'])){
    require_once 'addNameProc.php'; 
    
    $names = array($_POST['nameList']);
    $names = implode("", $names);
    $names = explode("\n", $names);
    echo($names[0]);
    $addName = new addNamesProc($names);
    $newName = array($_POST['name']);
    $newName = implode("", $newName);
    $addName->addNames($newName);
    $output = implode("\n",$addName->getNameList());
} 
else{
    $output = "";
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
<title>Name List</title>
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
      <form action="index.php" method="post">
        <div class="form-row">
            <h1>Add Names</h1>
        </div>

        <div class="form-row">
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="add">
                  Add Name
            </button>

            &nbsp;
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="clear">
                  Clear Name
            </button>
          </div>
        </div>
      
        <div class="form-group">
            <label for="name">Enter Name</label>
              <input type="text" id="name" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label for="nameList">Name List</label>
            <textarea style="height: 500px;" type="password" id="nameList" 
                      class="form-control" name="nameList" align="center"><?php echo($output)?>
            </textarea>
        </div>
    </form>
  </div>
</body>
</html>
