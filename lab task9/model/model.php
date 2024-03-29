<?php
    require_once 'db_connect.php';

    // USER PROFILE UPDATE  
    function adminRegistration($data)
    {
        $conn = db_conn();
        $selectQuery = "INSERT into admininfo (user_id, name, email, username, password, phone, address, usertype, gender, dob, image)
        VALUES (:user_id, :name, :email, :username, :password, :phone, :address, :usertype, :gender, :dob, :image)";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                ':user_id' => $data['user_id'],
                ':name' => $data['name'],
                ':email' => $data['email'],
                ':username' => $data['username'],
                ':password' => $data['password'],
                ':phone' => $data['phone'],
                ':address' => $data['address'],
                ':usertype' => $data['usertype'],
                ':gender' => $data['gender'],
                ':dob' => $data['dob'],
                ':image' => $data['image']
            ]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        $conn = null;
        return true;
    }
    
    function updateMemberProfile($id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE memberinfo SET name = ?, email = ?, username = ?, phone = ?, address = ?, gender = ?, dob = ? where id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['name'], $data['email'], $data['username'], $data['phone'], $data['address'], $data['gender'], $data['dob'], $id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    function updateUserProfile($id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE userinfo SET name = ?, email = ?, username = ?, phone = ?, address = ?, gender = ?, dob = ? where id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['name'], $data['email'], $data['username'], $data['phone'], $data['address'], $data['gender'], $data['dob'], $id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    
    
    function updateMemberPassword($id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE memberinfo SET password = ? where id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['password'], $id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    function updateUserPassword($id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE userinfo SET password = ? where id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['password'], $id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    
    
    function updateMemberImage($id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE memberinfo SET image = ? where id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['image'], $id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    function updateUserImage($id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE userinfo SET image = ? where id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['image'], $id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    // USER CRUD END
?>