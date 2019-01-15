<?php

 

require_once 'dbconnect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM customer WHERE customer_id = {$id}";

    $result = $conn->query($sql);

 

    $data = $result->fetch_assoc();

 

    $conn->close();

 

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Library</title>

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

 

<fieldset>

    <legend>Update Book </legend>

 

    <form action="a_update.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>customer_id</th>

                <td><input type="text" name="customer_id" placeholder="customer_id" value="<?php echo $data['customer_id'] ?>" /></td>

            </tr>     

            <tr>

                <th>type</th>

                <td><input type="text" name="type" placeholder="type" value="<?php echo $data['type'] ?>" /></td>

            </tr>

             <tr>

                <th>Name</th>

                <td><input type="text" name="name" placeholder="name" value="<?php echo $data['name'] ?>" /></td>

            </tr>

            <tr>

                <th>publisher</th>

                <td><input type="text" name="publisher" placeholder="publisher" value="<?php echo $data['publisher'] ?>" /></td>

            </tr>

                        <tr>

                <th>author</th>

                <td><input type="text" name="author" placeholder="author" value="<?php echo $data['author'] ?>" /></td>

            </tr>

                        <tr>

                <th>publish_date</th>

                <td><input type="text" name="data" placeholder="data" value="<?php echo $data['data'] ?>" /></td>

            </tr>

                        <tr>

                <th>ISBN_code</th>

                <td><input type="text" name="ISBN_code" placeholder="ISBN_code" value="<?php echo $data['ISBN_code'] ?>" /></td>

            </tr>

                        <tr>

                <th>status</th>

                <td><input type="text" name="status" placeholder="status" value="<?php echo $data['status'] ?>" /></td>

            </tr>

                        <tr>

                <th>img</th>

                <td><input type="text" name="img" placeholder="img" value="<?php echo $data['img'] ?>" /></td>

            </tr>

                        <tr>

                <th>description</th>

                <td><input type="text" name="description" placeholder="description" value="<?php echo $data['description'] ?>" /></td>

            </tr>



                        <tr>

                <th>size</th>

                <td><input type="text" name="size" placeholder="size" value="<?php echo $data['size'] ?>" /></td>

            </tr>

            <tr>

                

                <td><button type="submit">Save Changes</button></td>

                <td><a href="index.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>

 

<?php

}

?>

