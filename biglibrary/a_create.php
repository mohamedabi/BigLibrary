<?php

 

require_once 'dbconnect.php';

 

if($_POST) {

    $customer_id = $_POST['customer_id'];

    $type= $_POST['type'];


    $author= $_POST['author'];

    $data= $_POST['data'];


    $status= $_POST['status'];

    $img= $_POST['img'];

    $description= $_POST['description'];


    $size= $_POST['size'];

    $name= $_POST['name'];



 

    $sql = "INSERT INTO customer (customer_id, type, author,data, name , status, img,description ,  size  ) VALUES ('$customer_id', '$type','$author','$data', '$name' ,'$status','$img','$description','$size')";

    if($conn->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='create.php'><button type='button'>Back</button></a>";

        echo "<a href='index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $conn->conn_error;

    }

 

    $conn->close();

}

 

?>