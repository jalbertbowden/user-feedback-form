<?php
$title = "Radio and Select Example Answer";
$devsection = "Formorial";
$filename = "input-radio-elements-answers.php";
$titleelement = $title . " &#124; " . $devsection;
$titlename = "Standards Based Development";
$pagecontent = "Page Content";
include("input-radio-element-vars.php");
require_once("../a/header.php"); ?>
  </head>
  <body>
    <div class="content">
      <header><h1 class="branding"><?php echo $titleelement ?></h1><h2 class="moarbranding"><?php echo $titlename ?></h2></header>
      <div class="maincontent">
        <section>
          <h2>Your Choices:</h2>
          <?php
//The variables from the form in the previous page collected here:
$question01=$_POST['q01'];
$question02=$_POST['q02'];
$question03=$_POST['q03'];
$question04=$_POST['q04'];
$question05=$_POST['q05'];
$question06=$_POST['q06'];
$question07=$_POST['q07'];
$question08=$_POST['q08'];
$question09=$_POST['q09'];
$question10=$_POST['q10'];



$question01CurrentRange=$_POST['q01range'];

//$questionasked01=$_POST['ques01'];
//$questionasked02=$_POST['ques02'];
//"select1" and "R1" are the names of form elements
//the values of the form elements are given to these variables
//and we show them below:
echo "<h1>".$ques01." You chose: ".$question01."</h1>";
echo "<h1>At a Level of <strong>".$question01CurrentRange."</strong></h1>";
echo "<h1>".$ques02." You chose: ".$question02."</h1>";
echo "<h1>".$ques03." You chose: ".$question03."</h1>";
echo "<h1>".$ques04." You chose: ".$question04."</h1>";
echo "<h1>".$ques05." You chose: ".$question05."</h1>";
echo "<h1>".$ques06." You chose: ".$question06."</h1>";
echo "<h1>".$ques07." You chose: ".$question07."</h1>";
echo "<h1>".$ques08." You chose: ".$question08."</h1>";
echo "<h1>".$ques09." You chose: ".$question09."</h1>";
echo "<h1>".$ques10." You chose: ".$question10."</h1>";
echo "<h1><a href=\"input-radio-element-and-php-02.php\">Go Back</a></h1>";
?>
        </section>
      </div>
<?php require_once("../a/footer.php"); ?>
