<?php 

    require_once ('../model/donation_model.php');

    function fetchalldonations()
    {
        return showalldonations();
    }
    function fetchUserDonationHistory($user_id)
    {
        return showUserDonationHistory($user_id);
    }
    function fetchUserDonation($username)
    {
        return showUserDonation($username);
    }
    function fetchcreateDonation($user_id){
        return createDonation($user_id);
    }
?>
