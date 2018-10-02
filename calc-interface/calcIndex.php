<?php
  require_once('Calculator.php');
  require_once('validate.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
  .error {font-size: .8rem; color:red; margin-left: .5rem;}
  </style>

  <title>Calculator Interface</title>
</head>
<body>
<h1>Calculator Interface</h1>
    <form method="post" action="calcIndex.php" class="container mt-5">

   <div class="row">
        <div class="form-group col-sm-6">
       
            <label for="opp">Choose an opperator:</label>
            <?php if(isset($errorArray[2])){
         echo "<span class='error'>$errorArray[2]</span>";
        } ?>
            <select id="inputState" class="form-control" id="opp" name="opp">
              <option selected disabled>Select an Operator</option>
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="/">/</option>
              <option value="*">*</option>
            </select>
        </div>
   </div>

    <div class="row">
        <div class="form-group col-sm-6">
          <label for="num1">First Number</label>
          <?php if(isset($errorArray[0])){
         echo "<span class='error'>$errorArray[0]</span>";
        } ?>
          <input type="text" class="form-control" id="num1" name="num1">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-6">
            <label for="num2">Second Number</label>
            <?php if(isset($errorArray[1])){
         echo "<span class='error'>$errorArray[1]</span>";
        } ?>

        <?php if(isset($errorArray[1])){
         echo "<span class='error'>$errorArray[1]</span>";
        } ?>
            <input type="number" class="form-control" id="num2" name="num2">
        </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-3">
        <button class="btn btn-primary btn-block" type="submit" name="submit" value="Submit" tabindex="70">Calculate</button>
      </div>
    </div>

        <?php if(isset($answer)){
        echo "<p><span>{$answer}</span></p>";} 
        ?>

  </form>
  
</body>
</html>