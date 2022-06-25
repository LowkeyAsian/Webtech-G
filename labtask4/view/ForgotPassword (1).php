<?php include "../controller/ForgotPassword.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<style>
 body {margin: 0;background-color: #E0FFFF; font-family:'Arial',Arial,monospace; color:black;}
.error {color: #FF0000;}
.footer {position:fixed;left:0;bottom:0;width: 100%; background-color:#87CEFA; color:black; text-align:center;}
.header {overflow:hidden; background-color:#87CEFA;}
.header a {float:left;display:block; color: black; text-align:center; padding:14px 16px;margin-top:3px; text-decoration:none;}
.header-right {float:right;} 
</style>
</head>
<body>
<div class="header">
<h1> Crowdfunding</h1>
<div class="header-right">
<a href="../Home.php">Home</a>
<a href="../view/Login.php">Login</a>
<a href="../view/Registration.php">Registration</a>
</div>
</div>
<form method="post" action="">
<fieldset style="margin-top: 20px;">
<legend><strong>FORGOT PASSWORD</strong></legend>
<table align="center">
<tr>
<td><label for="email">Enter Email</label></td>
<td>:<input type="text" id="email" name="email" placeholder="Type User Registered Email">
<span class="error">* <?php echo $emailErr; ?></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" style="font-size:17px;">
</tr>
<tr>
<td colspan="2">
<?php  
if(isset($message)){
 echo "<br>" .$message;
} 
?>
</td>
</tr>
</table>
</fieldset>
</form>
<div class="footer"><p>Copyright © 2022</p></div>
</body>
</html>