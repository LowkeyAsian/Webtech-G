<?php
    include "../mod_controller/update_modPasswordCntrl.php";
    require_once '../mod_controller/modinfoCntrl.php';
    $mod = fetchmod($_GET['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Recover Password</title>
</head>
<body>
    <?php include('../header_footer/header_before_login.php'); ?>
    <div class="main">
        <section>
        <form method="post" action="">
            <div class="top-mar-50">
                <h1 align="center"><legend>RECOVER MODERATOR PASSWORD</legend></h1>
                <table align="center">
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="recPass-img" src="../resources/img/mod_img/<?php echo $mod['image']?>" alt="<?php echo $mod['name']?>"></td> 
                        <td><span>Moderator Name</span> <br> <span class="green font-size-20"> <?php echo $mod['name']?></span> </td> 
                    </tr>
                    <tr>
                        <td><label for="newPass">New Password</label></td>
                        <td>: <input type="text" id="newPass" name="newPass" placeholder="Type New Password">
                        <span class="error">* <?php echo $newPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="cnewPass"> Retype New Password &nbsp;&nbsp;&nbsp;</label></td>
                        <td>: <input type="text" id="cnewPass" name="cnewPass" placeholder="Retype New Password" >
                        <span class="error">* <?php echo $cnewPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
                            <input type="submit" name="change" value="Chanage" class="top-mar-30 btn">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="green">
                            <?php  
                                if(isset($message))  
                                {
                                echo "<br>" .$message;
                                } 
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </form> 
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>