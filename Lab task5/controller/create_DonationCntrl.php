<?php
    include '../controller/session.php';
    require_once '../model/donation_model.php';

    $usernameErr = $amountErr = $nameErr = $CardnoErr = $expErr = $CvvErr = $PostalCodeErr = $phone_numberErr ="";
    $username = $amount = $name = $Cardno = $exp= $Cvv= $PostalCode = $phone_number ="";
    $message = '';
    $error = '';

    if($_SERVER["REQUEST_METHOD"] == "POST")  
    {  

        
            
        if(empty($_POST["username"]))  
        {  
            $usernameErr = "Username is Required!";
        }
        else
        {
            $user = $_POST['username'];
            if(!preg_match("/^[a-zA-Z0-9_ .-]*$/",$user))
            {
                $usernameErr = "User Name can contain alpha numeric characters, period, dash or underscore only!";
            }
        }
        if(empty($_POST["amount"]))  
        {  
             $amountErr = "Amount is Required!";  
        }

         if(empty($_POST["name"]))  
        {  
            $nameErr = "Name is Required!";  
        }
        else if(str_word_count($_POST["name"]) <2)
        {
            $nameErr = "Name can not contain less then two words!";
        }
        else
        {   
            $name = $_POST['name'];
            if(!preg_match("/^[a-zA-Z ]*$/",$name))
            {
                $nameErr = "Only letter and spcae alowed!";
            }
        }
            
        if(empty($_POST["Cardno"]))  
        {  
             $CardnoErr = "Card Number Required!";  
        }

        if(empty($_POST["exp"]))  
        {  
             $expErr = "Expiration Number Required!";  
        }

        if(empty($_POST["Cvv"]))  
        {  
             $CvvErr = "Phone Number Required!";  
        }

        if(empty($_POST["PostalCode"]))  
        {  
             $PostalCodeErr = "Phone Number Required!";  
        }

        if(empty($_POST["phone_number"]))  
        {  
            $phone_numberErr = "";  
        }

        
        if(empty($_POST["username"]) || empty($_POST["amount"]) || empty($_POST["name"]) || empty($_POST["Cardno"]) || empty($_POST["exp"]) ||
        empty($_POST["Cvv"]) || empty($_POST["PostalCode"]) || empty($_POST["phone_number"]))
        {
            $error = "Fill up all field first!";
        }
        else
        {
            return true;
        }
    }
?>