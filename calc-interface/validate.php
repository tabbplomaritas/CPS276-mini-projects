<?php

$errorArray = array();
  $answer;

  if (isset($_POST['submit'])){
    validate();
  }

  function validate () {
    $Calculate = new Calculator();

    global $answer,$errorArray;

    $errorArray[0] = $Calculate->checkForBlanks($_POST['num1']);
    $errorArray[1] = $Calculate->checkForBlanks($_POST['num2']);
    $errorArray[2] = $Calculate->checkOpp($_POST['opp']);

    if ($Calculate->checkErrors == false) {
      $answer = $Calculate->calc($_POST['opp'],$_POST['num1'],$_POST['num2']);
    }
  }

  ?>