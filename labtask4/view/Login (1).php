<?php include "../Controller/Login.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body {margin: 0;background-color: #E0FFFF; font-family:'Arial',Arial,monospace; color:black;}
.error {color: #FF0000;}
.footer {position:fixed;left:0;bottom:0;width: 100%; background-color:#87CEFA; color:black; text-align:center;}
.header {overflow:hidden; background-color:#87CEFA;}
.header a {float:left;display:block; color: black; text-align:center; padding:14px 16px;margin-top:3px; text-decoration:none;}
.header-right {float:right;} 
</style>
</head>
<body class="font">
<div class="header">
<h2>Crowdfunding</h2>
<div class="header-right">
<a href="../Home.php">Home</a>
<a href="../view/Login.php">Login</a>
<a href="../view/Registration.php">Registration</a>
</div>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset style="margin-top: 20px;">
<legend><strong>LOGIN</strong></legend>
<table align="center">
<tr>
<td><label for="user">User Name &nbsp;&nbsp;&nbsp;</label></td>
<td>:<input type="text" id="user" name="user" placeholder="Type User Name" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
<span class="error">* <?php echo $userErr; ?></span></td>
</tr>
<tr>
<td><label for="pass">Password</label></td>
<td>:<input type="text" id="pass" name="pass" placeholder="Type Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
<span class="error">* <?php echo $passErr; ?></span></td>
</tr>
<tr>
<td colspan="2"><input type="checkbox" name="remember">Remember Me</td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="login" value="Login" style="font-size: 15px;"> <a href="../view/ForgotPassword.php">Forgot Password?</a></td>
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
<div class="footer"><p>Copyright © 2022</p></div>
</body>
</html>