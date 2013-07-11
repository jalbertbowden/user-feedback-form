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
$sect01q01y = $_POST['s01q01y'];
$sect01q01n = $_POST['s01q01n'];
$sect01q01youtput = $_POST['inputrange0101current'];
$sect01q01noutput = $_['inputrange0101past'];

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
	"Question 01 Y: $sect01q01y.\n".
	"Question 01 N Output: $sect01q01youtput.\n".
	"Question 01 N: $sect01q01n.\n".
	"Question 01 N Output: $sect01q01noutput.\n";
	
    
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