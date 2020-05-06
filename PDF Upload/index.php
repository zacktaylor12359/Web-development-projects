<?php
    require_once"fileUploadProc.php";
    $status="";
    if(isset($_REQUEST['upload']) && !empty($_FILES['myfile']['tmp_name'])) {
        $fileUpload=new fileUploadProc();
        $status=$fileUpload->upload($_FILES['myfile']['size'], 
        move_uploaded_file($_FILES['myfile']['tmp_name'], 'files/' . $_REQUEST['filename']));
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
<title>File Upload</title>
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
      <h1>File Upload</h1>
      <p><a href="ListFiles">Show File List</a></p>
      <p><?php echo($status);?></p>
      <br>
    <form action="index.php" enctype="multipart/form-data" method="post" required="true">
        <div class="form-group">
            <label for="name">File Name</label>
              <input type="text" id="name"  class="form-control" name="filename">
        </div>

        <div class="form-group">
            <input accept=".pdf" type="file" name="myfile" required="true"/>
        </div>
       
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="upload">
                Upload File
            </button>
        </div>
    </form>
  </div>
</body>
</html>

