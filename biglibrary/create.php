<!DOCTYPE html>

<html>

<head>

    <title>BigLibrary</title>

 

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

    <legend>Add Book</legend>

 

    <form action="a_create.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>customer_id</th>

                <td><input type="text" name="customer_id" placeholder="customer_id" /></td>

            </tr> 

                        <tr>

                <th>type</th>

                <td><input type="text" name="type" placeholder="type" /></td>

            </tr>    





                        <tr>

                <th>author</th>

                <td><input type="text" name="author" placeholder="author"/></td>

            </tr>

                        <tr>

                <th>data</th>

                <td><input type="text" name="data" placeholder="data" /></td>

            </tr>



                        <tr>

                <th>status</th>

                <td><input type="text" name="status" placeholder="status" /></td>

            </tr>

                        <tr>

                <th>img</th>

                <td><input type="text" name="img" placeholder="img" /></td>

            </tr>

                        <tr>

                <th>description</th>

                <td><input type="text" name="description" placeholder="description" /></td>

            </tr>



                        <tr>

                <th>size</th>

                <td><input type="text" name="size" placeholder="size" /></td>

            </tr>   

                                 <tr>

                <th>name</th>

                <td><input type="text" name="name" placeholder="name" /></td>

            </tr>


            <tr>

                <td><button type="submit">Insert user</button></td>

                <td><a href="index.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>