<?php
 $fname_error= $lname_error = $email_error = $phone_error = $institution_error ="";
 $fname = $lname = $email = $phone = $institution = $comment= "";
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(empty($_POST["fname"])){
  $fname_error="Please enter your First Name";
  }
  else{
  $fname = test_data($_POST["fname"]);
  if(!preg_match("/^([a-zA-Z' ]+)$/",$fname){
    $fname_error="Only letters are allowed";
  }
  }
  
  if(empty($_POST["lname"])){
  $lname_error="Please enter your Last Name";
  }
  else{
  $lname = test_data($_POST["lname"]);
  if(!preg_match("/^([a-zA-Z' ]+)$/",$fname){
    $lname_error="Only letters are allowed";
  }
  }
  
  if(empty($_POST["email"])){
  $email_error="Please provide your email address";
  }
  else{
  $email=test_data($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_Email)){
  $email_error="Invalid email address";
  }
  }
  
  if(empty($_POST["comment"])){
  $comment="";
      }
  else{
  $comment = test_input($_POST["comment"]);
  }
  
  
 }
 
 function test_data($data){
  $data=trim($data);
  $data=striplashes($data);
  $data=htmlspecialchars($data);
  return $data;
 }
?>
