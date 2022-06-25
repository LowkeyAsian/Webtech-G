<?php include "../Controller/EditProfile.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<style>
body {margin: 0; background-color:#E0FFFF;font-family:'Arial',Arial,monospace; color:black;}
.error {color: #FF0000;}
.footer {position: fixed; left: 0; bottom: 0; width: 100%; background-color: #87CEFA;;color:black; text-align:center;}
.header {overflow: hidden; background-color: #87CEFA;}
.header a {float:left; display: block; color:black; text-align: center; padding: 14px 16px; margin-top:3px; text-decoration: none;}
.header-right {float: right;}
.header-log-identity {margin-right: 20px; margin-top: 16px; float: left; font-size: 20px;}
*{box-sizing: border-box;}
h2{padding: 5px; color: black; font-size: 40px;}
section{ width: 85%; float: right; height:500px;padding: 20px;}
.menu {width: 15%; float: left;height: 500px;border-right: 2px solid black;}
.menu a {display: block; color: black; text-align: center; padding: 2px 10px; text-decoration: none;}
.mian::after {content: ""; clear: both; display: table;}
</style>
</head>
<body>
<div class="header">
<h2>Crowdfunding</h2>
<div class="header-right">
<span class="header-log-identity">Logged in as </span> 
<a href="../view/Profile.php">
<?php
if(isset($User)){
  echo $User;
}
?>
</a>
<a href="../Controller/Logout.php">Logout</a>
</div>
</div>
<div class="main">
<aside class="menu">
<h1 style="text-align:center;">Account</h1><br>
<a href="../view/Dashboard.php">Dashboard</a><br>
<a href="../view/Profile.php">View Profile</a><br>
<a href="../view/EditProfile.php">Edit Profile</a><br>
<a href="../view/ProfilePicture.php">Change Profile Picture</a> <br>
<a href="../view/changepassword.php">Change Password</a> <br>
<a href="../Controller/Logout.php">Logout</a>
</aside>
<section>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<legend>PROFILE</legend>
<table align="center">
<tr>
<td><label for="name">Name</label></td>
<td>: <input type="text" id="name" name="name" value="<?php if(isset($Name)) { echo $Name; } ?>">
<span class="error"> <?php echo $nameErr; ?></span>
</td>
</tr>
<tr>
<td><label for="email">Email</label></td>
<td>: <input type="email" id="email" name="email" value="<?php if(isset($Email)) { echo $Email; } ?>">
<span class="error"> <?php echo $emailErr; ?></span>
</td>
</tr>
<tr>
<td><label for="gender">Gender</label></td>
<td>: 
<input type="radio" name="gender" value="<?php if(isset($Gender)) { echo $Gender; } ?>">Male
<input type="radio" name="gender" value="<?php if(isset($Gender)) { echo $Gender; } ?>">Female
<input type="radio" name="gender" value="<?php if(isset($Gender)) { echo $Gender; } ?>">Other
<span class="error"> <?php echo $genderErr;?></span>
</td>
</tr>
<tr>
<td><label for="dob">Date of Birth</label></td>
<td>: <input type="text" id="dob" name="dob" value="<?php if(isset($DOB)) { echo $DOB; } ?>">
<span class="error"> <?php echo $dobErr; ?></span>
<br><span><i>(dd/mm/yyy)</i></span></td>
</tr>
<tr>
<td>
<input type="submit" id="submit" name="submit" value="Submit" style="font-size: 15px;">
</td>
<td>
<?php  
if(isset($message)){  
  echo $message;  
}  
?>
</td>
</tr>
</table>
</fieldset>
</form>
</section>
</div>
<div class="footer"><p>Copyright © 2022</p></div>
</body>
</html>