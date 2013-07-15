<?php
$title = "Input Radio Example 02";
$devsection = "Formorial";
$filename = "input-radio-element-and-php-02.php";
$titleelement = $title . " &#124; " . $devsection;
$titlename = "Standards Based Development";
$pagecontent = "Page Content";
include("input-radio-element-vars.php");
require_once("../a/header.php"); ?>
<style>
.radiodemo{width:500px; margin-left:auto; margin-right:auto}
fieldset{background-color:#f1f1f1}
.radiodemo label,.radiodemo input,.radiodemo select,.radiodemo select option{color:#000 !important}
.radiodemo label{font-weight:700; font-size:16px}

.radiodemo .block{display:block}
.radiodemo .inlineblock{display:inline-block}

.reqerror{background-color:#00f; outline:2px dotted #eee; border:1px inset #e9e9e9}
</style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $(".rangebox").hide();
  $(".q01answer").click(function() {
    // $(".rangeboxxx")[this.checked ? "show" : "hide"]();
    $(".rangebox").show();
  });



});
</script>
  </head>
  <body>
    <div class="content">
      <header><h1 class="branding"><?php echo $titleelement ?></h1><h2 class="moarbranding"><?php echo $titlename ?></h2></header>
      <div class="maincontent">
        <section>
          <h2></h2>
          <form class="radiodemo" method="POST" action="input-radio-elements-answers.php">
            <fieldset>
              <legend>Input Radio Example 02</legend>
              <h2><?php echo $ques01; ?></h2>
              <div class="fakefieldset">
                <div class="fakelabel block"><input class="inlineblock q01answer" type="radio" value="q01currently" id="q01currently" name="q01" /> <label class="inlineblock" for="q01currently">Currently</label></div>
                <div class="fakelabel block"><input class="inlineblock q01answer" type="radio" value="q01inthepast" id="q01inthepast" name="q01" /> <label class="inlineblock" for="q01inthepast">In the Past</label></div>
                <div class="rangebox">
                  <input id="q01range" name="q01range" type="range" min="0" max="10" value="0" /><output for="q01range">0</output> <label for="q01range">Rating</label>
                </div>
              </div>
              <hr />
              
              <h2><?php echo $ques02; ?></h2>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q02currently" id="q02currently" name="q02" /> <label class="inlineblock" for="q02currently">Currently</label></div>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q02inthepast" id="q02inthepast" name="q02" /> <label class="inlineblock" for="q02inthepast">In the Past</label></div>
              <h2><?php echo $ques03; ?></h2>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q03currently" id="q03currently" name="q03" /> <label class="inlineblock" for="q03currently">Currently</label></div>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q03inthepast" id="q03inthepast" name="q03" /> <label class="inlineblock" for="q03inthepast">In the Past</label></div>
              <h2><?php echo $ques04; ?></h2>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q04currently" id="q04currently" name="q04" /> <label class="inlineblock" for="q04currently">Currently</label></div>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q04inthepast" id="q04inthepast" name="q04" /> <label class="inlineblock" for="q04inthepast">In the Past</label></div>
              <h2><?php echo $ques05; ?></h2>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q05currently" id="q05currently" name="q05" /> <label class="inlineblock" for="q05currently">Currently</label></div>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q05inthepast" id="q05inthepast" name="q05" /> <label class="inlineblock" for="q05inthepast">In the Past</label></div>
              <h2><?php echo $ques06; ?></h2>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q06currently" id="q06currently" name="q06" /> <label class="inlineblock" for="q06currently">Currently</label></div>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q06inthepast" id="q06inthepast" name="q06" /> <label class="inlineblock" for="q06inthepast">In the Past</label></div>
              <h2><?php echo $ques07; ?></h2>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q07currently" id="q07currently" name="q07" /> <label class="inlineblock" for="q07currently">Currently</label></div>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q07inthepast" id="q07inthepast" name="q07" /> <label class="inlineblock" for="q07inthepast">In the Past</label></div>
              <h2><?php echo $ques08; ?></h2>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q08currently" id="q08currently" name="q08" /> <label class="inlineblock" for="q08currently">Currently</label></div>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q08inthepast" id="q08inthepast" name="q08" /> <label class="inlineblock" for="q08inthepast">In the Past</label></div>
              <h2><?php echo $ques09; ?></h2>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q09currently" id="q09currently" name="q09" /> <label class="inlineblock" for="q09currently">Currently</label></div>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q09inthepast" id="q09inthepast" name="q09" /> <label class="inlineblock" for="q09inthepast">In the Past</label></div>
              <h2><?php echo $ques10; ?></h2>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q10currently" id="q10currently" name="q10" /> <label class="inlineblock" for="q10currently">Currently</label></div>
              <div class="fakelabel block"><input class="inlineblock" type="radio" value="q10inthepast" id="q10inthepast" name="q10" /> <label class="inlineblock" for="q10inthepast">In the Past</label></div>
              <input class="inlineblock" type="submit" id="q01submit" value="q01Submit" name="submit" />
            </fieldset>
          </form>
        </section>
      </div>
<?php require_once("../a/footer.php"); ?>
