<!DOCTYPE html>
<html>
<head>
  <title>Contact Us form</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="style.css" type="text/css" media="all">
  <link rel="stylesheet" href="responsive.css" type="text/css" media="all">
</head>
<body>
  <!-- main wrapper for the site starts here -->
  <div class="sitewrapper">
    <!-- header section start-->  
    <header>
        <!-- mainwrapper start-->
        <div class="mainwrapper">
                       
            <!-- menu start-->
            <nav>
                <ul class="menu">
                    <li>Information of Queries</li>
                </ul> 
            </nav>
            <!-- menu end-->
        </div>
        <!-- mainwrapper end-->
    </header>
    <!-- header section end-->
    <div class="mainwrapper">  
            <div class="title">       
              <h1>Information of Queries</h1>
            </div>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="contactus";
//Create Database Connection 
$connect=mysql_connect($servername, $username, $password);
$db = mysql_select_db($dbname, $connect);
$sql = "SELECT * FROM contact";
 
 
echo '<table border="0" cellspacing="3" cellpadding="3"> 
      <tr> 
          <td> <font face="Arial">First Name</font> </td> 
          <td> <font face="Arial">Last Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Mobile</font> </td> 
          <td><font face="Arial">Institution Name</font> </td>
          <td> <font face="Arial">Role</font> </td>            
          <td> <font face="Arial">Message</font> </td> 
      </tr>';
if ($result = mysql_query($sql,$connect)) {
    while ($row = mysql_fetch_assoc($result)) {
        $fname = $row["firstname"];
        $lname = $row["lastname"];
        $email = $row["email"];
        $mobile = $row["phone"];
        $institution = $row["institution"];
        $role = $row["role"];      
        $message = $row["message"]; 
 
        echo '<tr> 
                  <td>'.$fname.'</td> 
                  <td>'.$lname.'</td> 
                  <td>'.$email.'</td> 
                  <td>'.$mobile.'</td> 
                  <td>'.$institution.'</td> 
                  <td>'.$role.'</td>
                  <td>'.$message.'</td> 
              </tr>';
    }
    
} 
?>
</div>
</div>
</body>
</html>
