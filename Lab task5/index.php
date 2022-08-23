<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="resources/stylesheet/crowdfunding.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="resources/stylesheet/footer_info.css?v=<?php echo time(); ?>">
    <title>Crowdfunding</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="header">
        <a href="index.php" class="logo"><img src="resources/img/images/Crowdfunding.png" alt="Crowdfunding"></a>
        <div class="header-right">
            <a href="admin_view/adminlogin.php"><i class="fas fa-key"></i>
                <?php
                    if(isset($_SESSION['username']))
                    {
                        echo $_SESSION['username'];
                    }
                    else
                    {
                        echo "Login";
                    }
                ?>
            </a>
            <a href="view/registration.php"><i class="fa fa-user-plus"></i> Registration</a>
        </div>
    </div>
    <div class="heading">
        <ul>
            <li class="dropmenu"><a href="index.php">&nbsp;&nbsp;<i class="fa fa-home"></i>&nbsp;&nbsp;</a></li>
            <li class="dropmenu"><a href=""> For Creator</a>
                <ul class="subdropmenu">
                    <li><a href="creators/videoCreators.php">Video Creators</a></li>
                    <li><a href="creators/podcasters.php">Podcasters</a></li>
                    <li><a href="creators/musician.php">Musician</a></li>
                    <li><a href="creators/visual.php">Visual Artists</a></li>
                    <li><a href="creators/gaming.php">Gaming Creators</a></li>
                    <li><a href="creators/nonProfit.php">Non Profits</a></li>
                </ul>
            </li>
            <li class="dropmenu"><a href="#"><i class="fa fa-angle-up"></i> Scroll Up</a></li>
        </ul>
    </div>
    <br><br>
    <div class="col-3 center">
        <h1>Welcome to Crowdfunding</h1> <br>
        <p>
            Crowdfunding is an alternative way of raising money for creative endeavors.<br>
            It is designed for content creators to offer recurring rewards for consistent supports from followers.
        </p>
        <br>
    </div>
    <div class="row">
        <div class="col-2">
            <img src="resources/img/images/cover_crowdfunding.png" alt="About Mission Vision">
        </div>
        <div class="col-2">
            <ul>
                <li><i class="fa fa-caret-right"></i>&nbsp; Build a meaningful connection with your audience</li>
                <li><i class="fa fa-caret-right"></i>&nbsp; Develop a recurring income stream</li>
                <li><i class="fa fa-caret-right"></i>&nbsp; Take back Creative Control</li>
            </ul>
        </div>
    </div>
    <br><br>
    <div class="col-3 center">
        <h1 class='color-cyan'>Who uses Crowdfunding?</h1> <br>
        <ul><a href="creators/videoCreators.php">Video Creators</a></ul>
        <ul><a href="creators/podcasters.php">Podcasters</a></ul>
        <ul><a href="creators/musician.php">Musician</a></ul>
        <ul><a href="creators/visual.php">Visual Artists</a></ul>
        <ul><a href="creators/gaming.php">Gaming Creators</a></ul>
        <ul><a href="creators/nonProfit.php">Non Profits</a></ul>
       
    </div>

    
    
    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Contact</h4>
                    <p>
                        Crowdfunding Company<br>
                        
                        Telephone : (8802) 222211111 <br>
                        Mobile : (880) 1627000000 <br>
                       
                        Email : info@crowdfunding.com.bd <br>
                    </p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="creators/videoCreators.php">Video Creators</a></li>
                        <li><a href="creators/podcasters.php">Poscasters</a></li>
                        <li><a href="creators/nonProfit.php">Non Profits Organization</a></li>
                        <li><a href="creators/musician.php">Musician</a></li>
                        <li><a href="creators/visual.php">Visual Artists</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="aboutus/about_us.php">about us</a></li>
                        <li><a href="aboutus/privacy_policy.php">privacy policy</a></li>
                        <li><a href="aboutus/faq.php">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>Copyright © 2022 || All Rights Reserved by Crowdfunding Company</a></p>
    </div>
    <!-- footer end -->
</body>

</html>