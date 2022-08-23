<?php
    require_once 'db_connect.php';
    // Payment Model
    function showalldonations()
    {
        $conn = db_conn();
        $selectQuery = 'SELECT * FROM `donation_info` ';
        try
        {
            $stmt = $conn->query($selectQuery);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    function showUserDonationHistory($user_id)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `donation_info` where user_id = ?";
        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$user_id]);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    function showUserDonation($username)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `donation_info` where username= ?";
        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$username]);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    function UpdateUserDonation($username, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE donation_info SET status = ? where username= ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$data['status'], $username]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    function createDonation($data)
    {
        $conn = db_conn();
        $selectQuery = "INSERT into donation_info (user_id, username, Amount, Name, Cardno, Expiration,Cvv, PostalCode, phone_number)
        VALUES (:user_id, :username, :Amount, :Name, :Cardno, :Expiration, :Cvv, :PostalCode, :phone_number)";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                ':user_id'        => $data['user_id'],
                ':username'            => $data['username'],
                ':usertype'                   => $data['usertype'],
                ':Amount'         => $data['Amount'],
                ':Name'         => $data['Name'],
                ':Cardno'           => $data['Cardno'],
                ':Expiration'                     => $data['Expiration'],
                ':Cvv'           => $data['Cvv'],
                ':PostalCode'           => $data['PostalCode'],
                ':phone_number'       => $data['phone_number'],
                
            ]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        $conn = null;
        return true;
    }

    function deleteDonation($user_id)
    {
        $conn = db_conn();
        $selectQuery = "DELETE FROM `donation_info` WHERE `user_id` = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$user_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    function searchDonation($username)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `donation_info` WHERE username LIKE '%$username%'";
    
        try
        {
            $stmt = $conn->query($selectQuery);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
?>