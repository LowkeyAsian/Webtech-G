<?php 
    include '../controller/session.php';
    require_once '../controller/donationinfoCntrl.php'; 
    $donations = fetchalldonations();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/crowdfunding.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>All Donations</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <form action=""> 
                <span class="font-size-20 red"><strong>Track Donation</strong> </span><br>
                <input type="text" name="packages" placeholder="User Name" onkeyup="showDonation(this.value)">
            </form>
            <br>
            <div id="TransactionResult">Donation info will be listed here...</div>
            <br>
            <h1 class="color-cyan">ALL Donation LIST</h1>
            
            <table border="1" class="usr-table">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Amount</th>
                        <th>Name</th>
                        <th>Card No</th>
                        <th>Expiration</th>
                        <th>Cvv</th>
                        <th>Postal Code</th>
                        <th>Phone Number</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($donations as $i => $donation): ?>
                        <tr>
                            <td><a href="../user_view/view_userProfile.php?user_id=<?php echo $donation['user_id'] ?>"><?php echo $donation['username'] ?></a></td>
                            <td><?php echo $donation['Amount'] ?></td>
                            
                            <td><?php echo $donation['Name'] ?></td>
                            <td><?php echo $donation['Cardno'] ?></td>
                            <td><?php echo $donation['Expiration'] ?></td>
                            <td><?php echo $donation['Cvv'] ?></td>
                            <td><?php echo $donation['PostalCode'] ?></td>
                            <td><?php echo $donation['phone_number'] ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
    <script src='../resources/js/ajax.crowdfunding.js?v=<?php echo time(); ?>'></script>
</body>
</html>