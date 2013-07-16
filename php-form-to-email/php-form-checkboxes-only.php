<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
  <head>
    <title>PHP form check box example</title>
<style>
*{margin:0; padding:0; border:non}
.content{width:800px}
.content form{width:800px}
.content fieldset{width:400px; float:left}
.content .submittedanswers{width:390px; float:left}

div.xxx{width:200px; float:left}
div.xxx input,div.xxx label{display:inline-block}
h2{clear:left; float:none}
</style>
</head>
<body>
  <div class="content">
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset><legend></legend>
          <h2>Question 001</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question01InThePast" /><label>In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question01Currently" /><label>Currently</label></div>
          <h2>Question 002</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question02InThePast" /><label for="">In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question02Currently" /><label for="">Currently</label></div>
          <h2>Question 003</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question03InThePast" /><label for="">In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question03Currently" /><label for="">Currently</label></div>
          <h2>Question 004</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question04InThePast" /><label for="">In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question04Currently" /><label for="">Currently</label></div>
          <h2>Question 005</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question05InThePast" /><label for="">In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question05Currently" /><label for="">Currently</label></div>
          <h2>Question 006</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question06InThePast" /><label for="">In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question06Currently" /><label for="">Currently</label></div>
          <h2>Question 007</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question07InThePast" /><label for="">In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question07Currently" /><label for="">Currently</label></div>
          <h2>Question 008</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question08InThePast" /><label for="">In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question08Currently" /><label for="">Currently</label></div>
          <h2>Question 009</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question09InThePast" /><label for="">In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question09Currently" /><label for="">Currently</label></div>
          <h2>Question 010</h2>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question10InThePast" /><label for="">In the Past</label></div>
          <div class="xxx"><input type="checkbox" name="formAnswers[]" value="Question10Currently" /><label for="">Currently</label></div>
	<input type="submit" name="formSubmit" value="Submit" />
        </fieldset>
        <fieldset class="submittedanswers">
<?php
  $aDoor = $_POST['formAnswers'];
  if(empty($aDoor)) 
  {
    echo("You Did Not Select Any Questions for Feedback.");
  } 
  else
  {
    $N = count($aDoor);
 
    echo("<p>You selected $N question(s):</p>");
    echo("<ul>");
    for($i=0; $i < $N; $i++)
    {
    	    echo("<li><strong>Question " . $i . "</strong></li><li><strong>Setting</strong>: " . $aDoor[$i] . "</li>");
    }
     echo("</ul>");
  }
?>
        </fieldset>
      </form>
      <hr style="display:block; clear:left; float:none;" />
            <div class="xxx"><a href="php-form-checkbox.php">php-form-checkbox.php</a></p>
            <div class="xxx"><cite><a href='http://www.html-form-guide.com/php-form/php-form-checkbox.html'>Handling checkbox in a PHP form processor</a></cite></p>
    </div>
  </body>
</html>