<?php
// Be sure your form has the enctype attribute set.
// You must execute the chcon and chmod commands on the files directory first.
// $_FILES is a superglobal, just like $_REQUEST.
// To check the file type, see the 'type' field in $_FILES
// To get the uploaded location of the file, see the 'tmp_name' field in $_FILES
// To get the original name of the file, see the 'name' field in $_FILES
// To get the original size of the file, see the 'size' field in $_FILES


    $fileName = null;
    $rawData = null;
//    print_r($_FILES);
    if (isset($_REQUEST['upload']) && !empty($_FILES['myfile']['tmp_name'])) {
        print_r($_FILES);
        
//        $sql = "INSERT INTO image (image_name) VALUES (?)";
//        $args = [];
//        $args[] = $_REQUEST['filename'];
//        execute($sql,false,$args);
        
        
        if (!move_uploaded_file($_FILES['myfile']['tmp_name'], 'files/' . $_REQUEST['filename'])) {
            echo('error');
            exit();
        }
    }
?>

<html><div>
    <form action="test.php" enctype="multipart/form-data" method="post">
        <input type="submit" value="Upload File" name="upload" />&nbsp;
        <input accept=".pdf" type="file" name="myfile"/>
        <br><br>
        <input type="text" placeholder="File Name" name="filename"> 
    </form>
</div>
</html>