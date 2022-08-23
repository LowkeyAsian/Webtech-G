<?php
    require_once '../model/member_model.php';

    $message ='';
    if (isset($_POST['searchuser'])) 
    {
	    $message = $_POST['user_name'];
    }
    try 
    {
    	$allSearchedUsers = searchMember($_POST['user_name']);
        require_once '../member_view/view_memberSearchResult.php';
    } 
    catch (Exception $e) 
    {
    	echo $e->getMessage();
    }
?>

