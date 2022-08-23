<?php 

    require_once ('../model/member_model.php');

    function fetchallMembers()
    {
        return showallMembers();
    }
    function fetchMember($user_id)
    {
        return showMembers($user_id);
    }
?>
