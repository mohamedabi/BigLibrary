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

    <title>View</title>

 

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

    <legend>Update</legend>

 

    <form action="a_update.php" method="post">

        <table cellspacing="0" cellpadding="0">
  

            <tr>

                <th>Type</th>

                <td><input type="text" name="media_type" placeholder="media_type" value="<?php echo $data['media_type'] ?>" /></td>

            </tr>

            <tr>

                <th>publisher</th>

                <td><input type="text" name="publisher_name" placeholder="publisher_name" value="<?php echo $data['publisher_name'] ?>" /></td>

            </tr>

                        <tr>

                <th>author</th>

                <td><input type="text" name="author_name" placeholder="author_name" value="<?php echo $data['author_name'] ?>" /></td>

            </tr>

                        <tr>

                <th>date</th>

                <td><input type="text" name="publish_date" placeholder="publish_date" value="<?php echo $data['publish_date'] ?>" /></td>

            </tr>

                        <tr>

                <th>ISBN</th>

                <td><p value="<?php echo $data['ISBN_code'] ?>" /></td>

            </tr>

                        <tr>

                <th>status</th>

                <td><input  name="status" placeholder="status" value="<?php echo $data['status'] ?>" /></td>

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

                <th>address</th>

                <td><input type="text" name="address" placeholder="address" value="<?php echo $data['address'] ?>" /></td>

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









