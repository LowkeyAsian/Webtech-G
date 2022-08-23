<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<aside class="menu bottom-mar-500">
    <div class="font-size-30 m-l-10 pad-10">Admin Account</div>
    <div class="top-mar-10 user-area">
        <i class="fas fa-address-card font-size-20 bottom-mar-10"></i></i><strong> Profile Settings</strong><br>
        <a href="../view/dashboard.php"><i class="fas fa-tablet-alt"></i> Dashboard</a> <br>
        <a href="../admin_view/view_adminSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-id-card"></i> View Profile</a> <br>
        <a href="../admin_view/update_adminSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-user-edit"></i> Update Profile</a> <br>
        <a href="../admin_view/update_adminSessionImage.php?user_id=<?php echo $user_id ?>"><i class="fas fa-camera-retro"></i> Change Profile Picture</a> <br>
        <a href="../admin_view/update_adminSessionPassword.php?user_id=<?php echo $user_id ?>"> <i class="fas fa-key"></i> Change Password</a> <br>
    </div>
    <div class="admin-area">
        <i class="fas fa-user-shield font-size-20 bottom-mar-10"></i><strong> Administration</strong><br>
        <a href="../admin_view/view_all_admins.php"><i></i> Admins Control</a> <br>
        <a href="../member_view/view_all_members.php"><i></i> Members Control</a> <br>
        <a href="../user_view/view_all_users.php"><i></i> User Control</a>
    </div>
    <div class="ipack-area">
        <i></i><strong>Donation History</strong></a> <br>
        <a href="../view/Track_userDonation.php"><i></i>View All Donation</a> <br>
        <a href="../view/create_donation.php"><i></i> Donate</a> 
        
    </div>
    <p class="m-l-10 pad-10"><a href="../controller/logout.php"><i class="fas fa-sign-out-alt bottom-mar-50"></i> Logout</a></p>
</aside>