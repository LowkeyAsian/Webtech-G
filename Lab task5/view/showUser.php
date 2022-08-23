<?php  
require_once '../controller/userInfo.php';

$user= fetchUser($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Username</th>
		<th>Password</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showUser.php?id=<?php echo $user['ID'] ?>"><?php echo $user['Name'] ?></a></td>
		<td><?php echo $user['Username'] ?></td>
		<td><?php echo $user['Password'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>