<?php 
    include '../controller/create_DonationCntrl.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/crowdfunding.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Donation Page</title>
</head>
<body>
  <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <form method="post" action="">
                <div>
                    <h1><legend>Donation Page</legend></h1>
                    <table>
                        <tr>
                            <td><label for="username">User Name</label></td>
                            <td>: <input type="text" id="username" name="username">
                            <span class="error"> <?php echo $usernameErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="amount">Amount</label></td>
                            <td>: <input type="amount" id="amount" name="amount">
                            <span class="error"> <?php echo $amountErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="name">Name</label></td>
                            <td>: <input type="text" id="name" name="name">
                            <span class="error"> <?php echo $nameErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Cardno">Card No</label></td>
                            <td>: <textarea id="Cardno" name="Cardno" rows="4" cols="23"></textarea>
                            <span class="error"> <?php echo $CardnoErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="exp">Expiration</label></td>
                            <td>: <input type="exp" id="exp" name="exp">
                            <span class="error"> <?php echo $expErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Cvv">Cvv</label></td>
                            <td>: <input type="Cvv" id="Cvv" name="Cvv">
                            <span class="error"> <?php echo $CvvErr; ?></span>
                            </td>
                        </tr>
                       <tr>
                            <td><label for="PostalCode">Postal Code</label></td>
                            <td>: <input type="PostalCode" id="PostalCode" name="PostalCode">
                            <span class="error"> <?php echo $PostalCodeErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="phone_number">Phone Number</label></td>
                            <td>: <input type="phone_number" id="phone_number" name="phone_number">
                            <span class="error"> <?php echo $phone_numberErr; ?></span>
                            </td>
                        </tr>
                       
                            <td colspan="2">
                              
                                <input type="submit" name="submit" value="submit" class="btn">
                            </td>
                        </tr>
                        <tr>
                            <td class="green" colspan="2">
                                <?php  
                                    if(isset($message))  
                                    {  
                                        echo $message;  
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