<?php 
    include '../controller/session.php';
    
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
    <title>Search Result</title>
</head>

<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
        <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <h1><a href="../member_view/view_all_members.php" class="link-hvr"><i class="fas fa-arrow-left"></i> Back</a></h1>
            <form method="post" action="">
                <h1 class="color-cyan">
                    <legend>SEARCH MEMBER</legend>
                </h1>
                <table>
                    <tr>
                        <td><input type="text" name="user_name" class="srch-usr"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="searchuser" value="Search" class="btn"></td>
                    </tr>
                    <tr>
                        <td class="pad-10">Showing result for :&nbsp; <span class="color-cyan"><?php if(isset($message)) {echo $message;} ?></td>
                    </tr>
                </table>
            </form>
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
                    <?php foreach ($allSearchedUsers as $i => $member): ?>
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
                                <a href="../member_controller/delete_memberCntrl.php?user_id=<?php echo $member['user_id'] ?>" onclick="return confirm('Are you sure want to delete this USER?')"><span class="btn-action error">Delete</span></a>
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