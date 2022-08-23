<?php  
require_once '../controller/userInfo.php';

$students = fetchAllUsers();
    include "nav.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $i => $user): ?>
			<tr>
				<td><a href="showUser.php?id=<?php echo $user['ID'] ?>"><?php echo $user['Name'] ?></a></td>
				<td><?php echo $user['Username'] ?></td>
				<td><?php echo $user['Password'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['Name'] ?>"></td>
				<td><a href="edit.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="../controller/deleteUser.php?id=<?php echo $user['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>