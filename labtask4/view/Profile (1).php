<?php include "../Controller/Profile.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
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
<h1 style="text-align: center;">Account</h1> <br>
<a href="../view/Dashboard.php">Dashboard</a> <br>
<a href="../view/Profile.php">View Profile</a> <br>
<a href="../view/EditProfile.php">Edit Profile</a> <br>
<a href="../view/ProfilePicture.php">Change Profile Picture</a> <br>
<a href="../view/changepassword.php">Change Password</a> <br>
<a href="../Controller/Logout.php">Logout</a>
</aside>
<section>
<fieldset>
<legend>PROFILE</legend>
<table align="center">
<tr>
<td><label for="name">Name</label></td>
<td>:<b><label>
<?php
if(isset($Name)){
  echo $Name;
}
?>
</label>
</b>
</td>
<td rowspan="4" >
<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="sampleImage" height="150px" style="margin-left: 10px;">
</td>
</tr>
<tr>
<td><label for="email">Email</label></td>
<td>:<b><label>
<?php
if(isset($Email)){
 echo $Email;
}
?>
</label></b>
</td>
</tr>
<tr>
<td><label for="gender">Gender</label></td>
<td>:<b><label>
<?php
if(isset($Gender)){
  echo $Gender;
}
?>
</label></b>
</td>
</tr>
<tr>
<td><label for="dob">Date of Birth</label></td>
<td>:<b><label>
<?php
if(isset($DOB)){
 echo $DOB;
}
?>
</label>
</b>
</td>
</tr>
<tr>
<td><a href="../view/EditProfile.php">Edit Profile</a></td>
<td>
</td>
<td align="center"><a href="../view/ProfilePicture.php">Change</a></td>
</tr>
</table>
</fieldset>
</section>
</div>
<div class="footer"><p>Copyright © 2022</p></div>
</body>
</html>