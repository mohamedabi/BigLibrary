<?php

 

require_once 'dbconnect.php';

 

if($_GET['id']) {
	
    $customer_id = $_GET['id'];


 

    $sql = "SELECT * FROM customer WHERE customer_id = {$customer_id}";

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

 

    $conn->close();

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>CodeReviews10</title>

</head>

<body>

 

<h3>Do you really want to delete this user?</h3>

<form action="a_delete.php" method="post">

 

    <input type="hidden" name="customer_id" value="<?php echo $data['customer_id'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="index.php"><button type="button">No, go back!</button></a>

</form>

 

</body>

</html>

 

<?php

}

?>