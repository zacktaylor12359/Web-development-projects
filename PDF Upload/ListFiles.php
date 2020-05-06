<?php
    require_once"fileUploadProc.php";
    $list_all=new fileUploadProc();
    $files=glob('files/*');
    $upload_list=$list_all->UploadList();
    $file_list = "";
    for($i=0; $i < sizeof($upload_list); $i++){
        $file_list.="<li><a target='_blank'href='"."$files[$i]"."'>$upload_list[$i]</a></li>";
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
    <h1>List Files</h1>
    
    <div class="form-group">
        <a href="index.php">Add files</a>
    </div>
    
    <ul>
        <?php echo($file_list); ?>
    </ul>
</body>

