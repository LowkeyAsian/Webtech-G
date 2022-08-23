<?php 

require_once '../controller/userInfo.php';
$user = fetchUser($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../controller/updateUser.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $user['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $user['Username'] ?>" type="text" id="username" name="username"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateUser" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

