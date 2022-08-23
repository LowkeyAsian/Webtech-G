<?php

require_once '../model/model.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['user_name'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['user_name']);
    	require_once '../view/searchedUser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

