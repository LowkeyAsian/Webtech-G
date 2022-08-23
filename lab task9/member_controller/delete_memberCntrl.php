<?php 
    require_once '../model/member_model.php';

    if(deletemod($_GET['user_id'])) 
    {
        header('Location: ../member_view/view_all_members.php');
    }
?>