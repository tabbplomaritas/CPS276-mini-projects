<?php

class Calculator {

  public $errors = false;

  public function checkForBlanks ($data){
      if ($data === ""){
        $this->errors = true;
        return " * Required";
      } else if (!is_numeric($data)){
        return " * Please enter numbers only";
        $this->$errors = true;
      } else {
        return "";
      }
  }

  public function checkOpp($opp){
    if ($opp == ""){
      // $this->errors = true;
      return " * Please select operator";
    } else {
      // $this->errors = false;
      return "";
    }
  }

  public function divZero($opp, $num2){
    if ($opp == "/" && $num2 == 0){
      // $this->errors = true;
      return " * Cannot divide by zero";
    } else {
      // $this->errors = false;
      return "";
    }
  }

  public function checkErrors() {
    return $this-> $errors;
  }

  public function calc($opp, $num1, $num2){
     if ($opp === "+"){
      return $this->add($num1, $num2);
    } else if ($opp === "/"){
      return $this->divide($num1, $num2);
    } else if ($opp === "-"){
      return $this->subtract($num1, $num2);
    } else if ($opp === "*"){
      return $this->multiply($num1, $num2);
    }
  }

  
  private function add($num1, $num2){
    return $num1 + $num2;
  }
  
  private function subtract($num1, $num2){
    return $num1 - $num2;
  }
  
  private function multiply($num1, $num2){
    return $num1 * $num2;
  }
  
  private function divide($num1, $num2){
    if($num2 === 0){
      return $num1 / $num2;
    }
  }
  }

?>