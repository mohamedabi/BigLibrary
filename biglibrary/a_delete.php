<?php

require_once 'dbconnect.php';

 

if($_POST) {

      $customer_id = $_POST['customer_id'];



 

    $sql = "DELETE FROM customer WHERE customer_id = {$customer_id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Successfully deleted!!</p>";

        echo "<a href='index.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error updating record : " . $conn->error;

    }

 

    $conn->close();

}

 

?>