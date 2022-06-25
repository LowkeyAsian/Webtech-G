<?php include "../Controller/changepassword.php" ?>
<!DOCTYPE html>
<html >
<head>
<title>Change Password</title>
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
<h1>Crowdfunding</h1>
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
<form method="post" action="">
<fieldset style="margin-top:20px;">
<legend><strong>CHANGE PASSWORD</strong></legend>
<table align="center">
<tr>
<td><label for="currPass">Current Password</label></td>
<td>:<input type="text" id="currPass" name="currPass" placeholder="Type Current Password">
<span class="error">* <?php echo $currPassErr; ?></span></td>
</tr>
<tr>
<td><label for="newPass">New Password</label></td>
<td>:<input type="text" id="newPass" name="newPass" placeholder="Type New Password">
<span class="error">* <?php echo $newPassErr; ?></span></td>
</tr>
<tr>
<td><label for="cnewPass"> Retype New Password &nbsp;&nbsp;&nbsp;</label></td>
<td>:<input type="text" id="cnewPass" name="cnewPass" placeholder="Retype New Password" >
<span class="error">* <?php echo $cnewPassErr; ?></span></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Submit" style="font-size: 15px;"></td>
</tr>
<tr>
<td colspan="2">
<?php  
if(isset($message)){
 echo "<br>".$message;
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