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
$nameErr = $emailErr = $genderErr = $dobErr = $degreeErr =  $websiteErr = $bloodgroupErr = "";
$name = $email = $gender = $dob = $comment = $website =$degree= $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-Za-z 1-9 -]/",$name)) {
      $nameErr = "Atleast two letters, period , dash allowed";
    }
  }
  if(empty($_POST["dob"]))
$dobErr = "Date of birth is required";
} else {
  $dob = $_POST["dob"];
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

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "Bloodgroup is required";
  } else {
    $bloodgroup = $_POST["bloodgroup"];
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
<input type="date" id="dob" name="dob" value="<?php echo $dob;?>">
<span class="error">*  <?php echo $dobErr;?></span>
<br> <br>


  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>


  Degree:
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="SSC") echo $degree;?>">SSC 
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="HSC") echo $degree;?>">HSC
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="BSc") echo $degree;?>">BSc
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="MSc") echo $degree;?>">MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <br> <br>

  Bloodgroup:
  <select name="Bloodgroup" id="Bloodgroup">
	<option value=""> Choose a Bloodgroup </option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="A+") echo $Bloodgroup;?>" >A+</option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="A-") echo $Bloodgroup;?>" >A-</option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="B+") echo $Bloodgroup;?>" >B+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="B-") echo $Bloodgroup;?>" >B-</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="O+") echo $Bloodgroup;?>" >O+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="O-") echo $Bloodgroup;?>" >O-</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="AB+") echo $Bloodgroup;?>" >AB+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="AB-") echo $Bloodgroup;?>" >AB-</option>
  <span class="error">* <?php echo $BloodgroupErr;?></span>
</select>
<br> <br>


  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $website;
echo "<br>"; 
echo $gender;
echo "<br>";
echo $degree;
echo "<br>"; 
echo $bloodgroup;
?>

</body>
</html>