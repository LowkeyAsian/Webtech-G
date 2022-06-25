<?php include "../Controller/ProfilePicture.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>Profile Picture</title>
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
<a href="../control/logout.php">Logout</a>
</div>
</div>
<div class="main">
<aside class="menu">
<h1 style="text-align: center;">Account</h1><br>
<a href="../view/dashboard.php">Dashboard</a><br>
<a href="../view/profile.php">View Profile</a><br>
<a href="../view/edit_profile.php">Edit Profile</a> <br>
<a href="../view/profile_picture.php">Change Profile Picture</a> <br>
<a href="../view/change_password.php">Change Password</a> <br>
<a href="../control/logout.php">Logout</a>
</aside>
<section>
<form method="post" action="" enctype="multipart/form-data">
<fieldset>
<legend><strong>PROFILE PICTURE</strong></legend>
<table>
<tr>
<td colspan="2"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Image" height="180px"></td>
</tr>
<tr>
<td><input type="file" name="fileupload" value="No file chosen"  style="font-size: 15px;"></td>
</tr>
<tr colspan="2">
<td><span class="error"><?php echo $uploadErr; ?></span></td>
</tr>
<tr>
<td colspan="2">
<?php  
if(isset($message)){
 echo $message;
}
?>
</td>
</tr>
</table>
<br>
<input type="submit" value="Submit"  style="font-size: 15px;">
</fieldset>
<table class="center">
<tr>
<td>
<?php  
if(isset($uploadSuccess)){
  echo $uploadSuccess;
}
?>
</td>
</tr>
<tr>
<td>
<?php
if(isset($successImg)){
  echo $successImg;
}
?>
</td>
</tr>
</table>
</form>
</section>
</div>
<div class="footer"><p>Copyright © 2022</p></div>
</body>
</html>