<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$patient = $_POST['childname'];
$today = $_POST['today'];
$patientGuardian = $_POST['patientguardian'];

// section 01
// $sect01q01y = $_POST['s01q01y'];
// $sect01q01n = $_POST['s01q01n'];
// $sect01q01youtput = $_POST['inputrange0101current'];
// $sect01q01noutput = $_['inputrange0101past'];

$q001InThePast = $_POST['q001p'];
$q001Currently = $_POST['q001c'];
$q001InThePastRange = $_POST['q001p-range'];
$q001CurrentlyRange = $_POST['q001c-range'];

$q002InThePast = $_POST['q002p'];
$q002Currently = $_POST['q002c'];
$q002InThePastRange = $_POST['q002p-range'];
$q002CurrentlyRange = $_POST['q002c-range'];
$q003InThePast = $_POST['q003p'];
$q003Currently = $_POST['q003c'];
$q003InThePastRange = $_POST['q003p-range'];
$q003CurrentlyRange = $_POST['q003c-range'];
$q004InThePast = $_POST['q004p'];
$q004Currently = $_POST['q004c'];
$q004InThePastRange = $_POST['q004p-range'];
$q004CurrentlyRange = $_POST['q004c-range'];
$q005InThePast = $_POST['q005p'];
$q005Currently = $_POST['q005c'];
$q005InThePastRange = $_POST['q005p-range'];
$q005CurrentlyRange = $_POST['q005c-range'];
$q006InThePast = $_POST['q006p'];
$q006Currently = $_POST['q006c'];
$q006InThePastRange = $_POST['q006p-range'];
$q006CurrentlyRange = $_POST['q006c-range'];
$q007InThePast = $_POST['q007p'];
$q007Currently = $_POST['q007c'];
$q007InThePastRange = $_POST['q007p-range'];
$q007CurrentlyRange = $_POST['q007c-range'];
$q008InThePast = $_POST['q008p'];
$q008Currently = $_POST['q008c'];
$q008InThePastRange = $_POST['q008p-range'];
$q008CurrentlyRange = $_POST['q008c-range'];
$q009InThePast = $_POST['q009p'];
$q009Currently = $_POST['q009c'];
$q009InThePastRange = $_POST['q009p-range'];
$q009CurrentlyRange = $_POST['q009c-range'];
$q010InThePast = $_POST['q010p'];
$q010Currently = $_POST['q010c'];
$q010InThePastRange = $_POST['q010p-range'];
$q010CurrentlyRange = $_POST['q010c-range'];

//Validate first
if(empty($patient)||empty($patientGuardian)) 
{
    echo "Patient and Guardian Names are required!";
    exit;
}
// if(IsInjected($visitor_email))
// {
//    echo "Bad email value!";
//    exit;
// }

$email_from = 'jalbertbowden@gmail.com';//<== update the email address
$email_subject = "New Child Functional Assessment of AS, HFA and PDD Characteristics© Form Submission";
$email_body = "You have received a new message from the user $patientGuardian.\n".
	"Patient: $patient.\n".
	"Date: $today\n".
	"Guardian: $patientGuardian.\n".
	"Question 01 $q001InThePast. Range: $q001InThePastRange.\n".
	"Question 01 $q001Currently. Range: $q001CurrentlyRange.\n".
	"Question 02 $q002InThePast. Range: $q002InThePastRange.\n".
	"Question 02 $q002Currently. Range: $q002CurrentlyRange.\n".
	"Question 03 $q003InThePast. Range: $q003InThePastRange.\n".
	"Question 03 $q003Currently. Range: $q003CurrentlyRange.\n".
	"Question 04 $q004InThePast. Range: $q004InThePastRange.\n".
	"Question 04 $q004Currently. Range: $q004CurrentlyRange.\n".
	"Question 05 $q005InThePast. Range: $q005InThePastRange.\n".
	"Question 05 $q005Currently. Range: $q005CurrentlyRange.\n".
	"Question 06 $q006InThePast. Range: $q006InThePastRange.\n".
	"Question 06 $q006Currently. Range: $q006CurrentlyRange.\n".
	"Question 07 $q007InThePast. Range: $q007InThePastRange.\n".
	"Question 07 $q007Currently. Range: $q007CurrentlyRange.\n".
	"Question 08 $q008InThePast. Range: $q008InThePastRange.\n".
	"Question 08 $q008Currently. Range: $q008CurrentlyRange.\n".
	"Question 09 $q009InThePast. Range: $q009InThePastRange.\n".
	"Question 09 $q009Currently. Range: $q009CurrentlyRange.\n".
	"Question 10 $q010InThePast. Range: $q010InThePastRange.\n".
	"Question 10 $q010Currently. Range: $q010CurrentlyRange.\n".
	
    
$to = "jalbertbowden@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 
