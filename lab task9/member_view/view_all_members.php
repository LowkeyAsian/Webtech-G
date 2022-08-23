<?php 
    include '../controller/session.php';
    require_once '../member_controller/memberinfoCntrl.php';
    $members = fetchallMembers();
    
    if($_SESSION['usertype'] == "Admin"){}
    else{header("location: ../controller/hackerCntrl.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/crowdfunding.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>All MEMBERS</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <h1 class="color-cyan">ALL MEMBER LIST</h1>
            <a href="../member_view/add_member.php" class="btn">ADD NEW MEMBER</a> <br><br>
            <form method="post" action="../member_controller/search_memberCntrl.php">
                <span class="color-cyan"><legend>SEARCH MEMBER FROM LIST</legend></span>
                <table>
                    <tr>
                        <td><input type="text" name="user_name" class="srch-usr"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="searchuser" value="Search" class="btn"></td>
                    </tr>
                </table>
            </form>
            <br><br><br>
            <table border="1" class="usr-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>User Type</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $i => $member): ?>
                        <tr>
                            <td><a href="../member_view/view_memberProfile.php?user_id=<?php echo $member['user_id'] ?>"><?php echo $member['name'] ?></a></td>
                            <td><?php echo $member['email'] ?></td>
                            <td><?php echo $member['username'] ?></td>
                            <td> *********** </td>
                            <td><?php echo $member['phone'] ?></td>
                            <td><?php echo $member['address'] ?></td>
                            <td><?php echo $member['usertype'] ?></td>
                            <td><?php echo $member['gender'] ?></td>
                            <td><?php echo $member['dob'] ?></td>
                            <td><img width="70px" src="../resources/img/member_img/<?php echo $member['image'] ?>" alt="<?php echo $member['name'] ?>"></td>
                            <td>
                                <a href="../member_view/update_memberProfile.php?user_id=<?php echo $member['user_id'] ?>" class="green"><span class="btn-action">&nbsp;&nbsp;Edit &nbsp;&nbsp;</span></a> <br><br>
                                <a href="../member_controller/delete_memberCntrl.php?user_id=<?php echo $member['user_id'] ?>" onclick="return confirm('Are you sure want to delete this MEMBER?')"><span class="btn-action error">Delete</span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>