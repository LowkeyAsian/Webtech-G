<?php
require_once '../model/db_connect.php';

function DonationSearch($ajax_query)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `donation_info` where username LIKE '%$ajax_query%' OR phone_number LIKE '%$ajax_query%' 
        OR user_id LIKE '%$ajax_query%' OR Name LIKE '%$ajax_query%'";
    
        try {
            $stmt = $conn->query($selectQuery);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $rows;
    }
    function fetchDonationSearch($ajax_query)
    {
        return DonationSearch($ajax_query);
    }
    $donations= fetchDonationSearch($_GET['ajax_query']);
?>

<table border="1" class="usr-table">
    <thead>
        <tr>
            <th>User Name</th>
                        <th>Amount</th>
                        <th>Name</th>
                        <th>Card No</th>
                        <th>Expiration</th>
                        <th>Cvv</th>
                        <th>Postal Code</th>
                        <th>Phone Number</th>
                        
        </tr>
    </thead>
    <tbody>
        <?php foreach ($donations as $i => $donation): ?>
        <tr>
           <td><a href="../user_view/view_userProfile.php?user_id=<?php echo $donation['user_id'] ?>"><?php echo $donation['username'] ?></a></td>
                            <td><?php echo $donation['Amount'] ?></td>
                            
                            <td><?php echo $donation['Name'] ?></td>
                            <td><?php echo $donation['Cardno'] ?></td>
                            <td><?php echo $donation['Expiration'] ?></td>
                            <td><?php echo $donation['Cvv'] ?></td>
                            <td><?php echo $donation['PostalCode'] ?></td>
                            <td><?php echo $donation['phone_number'] ?></td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>