<?php
    class Directories {
        public function makeDirectory($dirname, $text){
            
            foreach(glob("directories/*") as $_dirname){
                if ($_dirname === "directories/".$dirname){
                    return FALSE;
                } 
            }
            mkdir("directories/$dirname");
            touch("directories/$dirname/readme.txt");
            file_put_contents("directories/$dirname/readme.txt", $text);
            return TRUE;   
        }
    }

