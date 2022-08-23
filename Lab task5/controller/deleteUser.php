<?php 

require_once '../model/model.php';

if (deleteUser($_GET['id'])) {
    header('Location: ../view/showAllUser.php');
}

 ?>