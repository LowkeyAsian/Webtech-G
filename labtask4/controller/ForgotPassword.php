<?php
 $emailErr =$email =$message = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){  
  $email= $_POST['email'];
  if (empty($_POST["email"])){
 $emailErr = "Email is required";
} 
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
 $emailErr = "Invalid email format";
}
else{   
  $message= "Reset password link is sent to your email";
}
} 
?>