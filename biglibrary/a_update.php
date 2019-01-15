<?php

 

require_once 'dbconnect.php';

 

if($_POST) {

    $customer_id = $_POST['customer_id'];

    $type= $_POST['type'];

    $publisher = $_POST['publisher'];

    $author= $_POST['author'];

    $data= $_POST['data'];

    $ISBN_code= $_POST['ISBN_code'];

    $status= $_POST['status'];

    $img= $_POST['img'];

    $description= $_POST['description'];


    $size= $_POST['size'];

    $name= $_POST['name'];

 


 

    $sql = "UPDATE customer SET customer_id = '$customer_id', type = '$type', publisher = '$publisher' , author = '$author', data = '$data', name = '$name' , ISBN_code = '$ISBN_code', status = '$status', img = '$img', description = '$description', size = '$size'WHERE customer_id = {$customer_id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='index.php?id=".$id."'><button type='button'>Back</button></a>";

        echo "<a href='index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();

 

}

 

?>