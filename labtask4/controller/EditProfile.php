<?php
$nameErr = $emailErr = $genderErr = $dobErr ="";
$name = $email = $gender = $dob ="";
$message = '';
 session_start();
$Name =$Email = $User = $Pass = $Gender = $DOB = '';

if(isset($_SESSION['name'])){
  $Name = $_SESSION['name'];
}
if(isset($_SESSION['email'])){
 $Email = $_SESSION['email'];
}
if(isset($_SESSION['user'])){
 $User = $_SESSION['user'];
}
if(isset($_SESSION['pass'])){
 $Pass = $_SESSION['pass'];
}
if(isset($_SESSION['gender'])){
 $Gender = $_SESSION['gender'];
}
if(isset($_SESSION['dob'])){
 $DOB = $_SESSION['dob'];
} 
else{
  header("location: ../view/Login.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){  
 if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["dob"]) || !isset($_POST["gender"])){
   $message = "Fill up all filed first!";
   if(empty($_POST["name"])){  
   $nameErr = "Name is required";  
  }
   else if(str_word_count($_POST["name"]) <2){
                $nameErr = "Name field can not contain less then two words";
}
 else{   
  $name = $_POST['name'];
  if(!preg_match("/^[a-zA-Z ]*$/",$name)){
   $nameErr = "Letter and space is allowed only";
}
}
if (empty($_POST["email"])){
 $emailErr = "Email is required";
} 
else{   
$email= $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
$emailErr = "Invalid email format";
}
}
if(empty($_POST["dob"])){  
 $dobErr = "Select your Birth date";  
  }
if(!isset($_POST["gender"])){  
$genderErr = "Select your gender";  
} 
}
else{
$message = "<i>Profile information is set successfully</i>";
}
} 
?>