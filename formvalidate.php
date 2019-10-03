<?php
$servername="localhost";
$username="root";
$password="";
$dbname="contactus";
$result="";

 if ( isset( $_POST['submit'] ) ) {
  
  if(empty($_POST["fname"])){
  $fname_error="Please enter your First Name";
  }
  else{
  $fname = test_data($_POST["fname"]);
  if(!preg_match("/^([a-zA-Z' ]+)$/",$fname)){
    $fname_error="Only letters are allowed";
  }
  }
  
  if(empty($_POST["lname"])){
  $lname_error="Please enter your Last Name";
  }
  else{
  $lname = test_data($_POST["lname"]);
  if(!preg_match("/^([a-zA-Z' ]+)$/",$lname)){
    $lname_error="Only letters are allowed";
  }
  }
  
  if(empty($_POST["email"])){
  $email_error="Please provide your email address";
  }
  else{
  $email=test_data($_POST["email"]);
  }
  }
  
  if(empty($_POST["phone"])){
   $phone_error="Please enter your phone number";
  }   else{
   $phone = test_data($_POST["phone"]);
   
  }
     
  if(empty($_POST["institution"])){
  $institution="";
      }
  else{
  $institution = test_data($_POST["institution"]);
  }
     
  if(empty($_POST["role"])){
  $role="";
      }
  else{
  $role = test_data($_POST["role"]);
  }
  
  if(empty($_POST["comment"])){
  $message="";
      }
  else{
  $message = test_data($_POST["comment"]);
  }
 
 function test_data($data){
  $data=trim($data);
  $data=htmlspecialchars($data);
  return $data;
 }

//Create Database Connection 
$connect=mysql_connect($servername, $username, $password);
$db = mysql_select_db($dbname, $connect);
$sql="INSERT INTO contact (firstname, lastname, email, phone, institution, role, message) VALUES ('$fname','$lname','$email','
$phone','$institution','$role','$message')";
$result=mysql_query($sql, $connect);     
?>
