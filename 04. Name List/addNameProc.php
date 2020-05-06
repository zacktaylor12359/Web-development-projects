<?php
    class AddNamesProc {
        private $namesList = array();
        
        function __construct($namesList){
            if($namesList[0] !== "\n"){
                $this->namesList = $namesList;
                echo($namesList[0]);
            }
        }
        public function addNames($name){
            $firstName = substr($name, 0,strpos($name, " "));
            $lastName = substr($name, strpos($name, " ")-strlen($name) + 1);
            $name = $lastName.", ".$firstName;
            array_push($this->namesList,$name);
            sort($this->namesList);
        }
        
        public function getNameList(){
            return $this->namesList;
        }
    }

