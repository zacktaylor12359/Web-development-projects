<?php
    require_once'db.php';
    class fileUploadProc {
        public function Upload ($filesize, $upload_success){
           
            if ($filesize > 1000000){
                $status="File is too big";
            }
            else{
                $sql = "INSERT INTO image (image_name) VALUES (?)";
                $args = [];
                $args[] = $_REQUEST['filename'];
                execute($sql,false,$args);
                if (!$upload_success) {
                    echo('error');
                    exit();
                }
                $status = "File was uploaded successfully";
                return $status;
            }
        }
        public function UploadList() {
            $sql = "Select image_name FROM image";
            $result= execute($sql);          
            return $result;
        }
    }
?>

