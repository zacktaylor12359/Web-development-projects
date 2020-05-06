<?php
    class Calculator {
        public function Calc($operator, $num1, $num2){
            try{
                if (
                     !isset($operator, $num1, $num2) ||
                     gettype($operator)!=="string" ||
                     gettype($num1)!=="integer" ||
                     gettype($num2)!=="integer") {
                    throw new InvalidArgumentException("You must enter a string and two numbers");
                }
                
                if($operator === "/" && $num2 === 0) {
                    throw new Exception("Cannot divide by 0".nl2br("\n"));                  
                }
                
                switch($operator){
                    case "/": 
                        echo("The division of the numbers is ". $num1/$num2.nl2br("\n"));
                        break;
                    case "*": 
                        echo("The multiplication of the numbers is ". $num1*$num2.nl2br("\n"));
                        break;
                    case "+": 
                        echo("The addition of the numbers is ". $num1+$num2 .nl2br("\n"));
                        break;
                    case "-": 
                        echo("The subtraction of the numbers is ". $num1-$num2.nl2br("\n"));
                        break;
                    default:
                        Throw new Exception("Must input a valid operator".nl2br("\n"));
                }
            } 
            catch (Exception $ex) {
                echo $ex->getMessage();
            }
            catch (InvalidArgumentException $e){
                echo $e->getMessage();
            }
        }
    }
?>
