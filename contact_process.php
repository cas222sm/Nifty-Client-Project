<?php

$EmailFrom = Trim(stripslashes($_POST['email'])); 
$EmailTo = "steven.manning@pcc.edu";
$Subject = "CAS 222 Contact Form Test Steven Manning";
$Name = Trim(stripslashes($_POST['name']));
$Date = Trim(stripslashes($_POST['date']));
$Tours = Trim(stripslashes(implode(" ", $_POST['tours'])));
$Comments = Trim(stripslashes($_POST['comments']));
$current_date = gmDate("Y-m-d");

$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (Trim($Name)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}
$myFilePath = "contacts/";
$myFileName = "form-data.csv";
$myPointer = fopen ($myFilePath.$myFileName, "a+");
$form_data = $current_date . "," . $EmailFrom . "," . $Name . "," . $Date . "," . $Tours . "," . $Comments . "\n";
fputs ($myPointer, $form_data);
fclose ($myPointer);

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "\n";
$Body .= "Date of Trip Desired: ";
$Body .= $Date;
$Body .= "\n";
$Body .= "\n";
$Body .= "Tours: ";
$Body .= $Tours;
$Body .= "\n";
$Body .= "\n";
$Body .= "Comments: ";
$Body .= $Comments;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}

?>