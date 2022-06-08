<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender =$DOB= $comment = $website =$Degree= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-Za-z]{2,}(\s[A-Za-z ]{2,})*$/",$name)) {
      $nameErr = "Atleast two letters, period , dash allowed";
    }
  }
  if(empty($_POST["DOB"]))
$DOB = "Date of birth is required";
}
  
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = $_POST["website"];
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
      $websiteErr = "Invalid URL format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = $_POST["comment"];
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }


?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date of birth: 
<input type="date" id="DOB" name="DOB" value="<?php echo $DOB;?>">
<br> <br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree:
  <Input type="checkbox" name="Degree"value="<?php echo $Degree;?>">SSC 
  <Input type="checkbox" name="Degree"value="<?php echo $Degree;?>">HSC
  <Input type="checkbox" name="Degree"value="<?php echo $Degree;?>">BSc
  <Input type="checkbox" name="Degree"value="<?php echo $Degree;?>">MSc
  <br> <br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $DOB;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>"; 
echo $gender;
echo "<br>";
echo $Degree;

?>

</body>
</html>