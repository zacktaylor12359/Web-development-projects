<?php
    $notification = '';
    if(isset($_POST['submit'])){
        require_once 'Directories.php'; 
        $directory = new Directories();
        $post_dir = array($_POST['directory']);
        $post_content = array($_POST['content']);
        $post_dir = implode("", $post_dir);
        $post_content = implode("", $post_content);
        $success = $directory->makeDirectory($post_dir, $post_content);
        
        if($success) {
            $notification = '<p>File and directory were created<p><p><a href='
                    . "directories/$post_dir/readme.txt" . '>Path where file is'
                    . ' located</a>';
        }
        else{
            $notification = '<p>A directory already exists with that name.';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>File upload</title>
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
      <h1>File and Directory Assignment</h1>
      <p>Enter a folder name and the contents of a file. Folder names shoulder
          contain alpha numeric characters only
      </p>
      <p><?php echo($notification); ?></p>
      <br>
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">Folder Name</label>
              <input type="text" id="directory" class="form-control" name="directory">
        </div>

        <div class="form-group">
            <label for="nameList">File Content</label>
            <textarea type="password" style="height: 250px;" id="content" 
                      class="form-control" name="content" align="center"> 
            </textarea>
        </div>
       
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">
                Submit
            </button>
        </div>
    </form>
  </div>
</body>
</html>

