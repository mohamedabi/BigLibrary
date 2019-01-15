<?php require_once 'dbconnect.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="styl.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

           


</head>
<body >


<nav class="navbar navbar-inverse" style="width:1340px " >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Big Library</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="contact.html">contact</a></li>
      <li><a href="search-form.php">Search</a></li>
      <li><a href="create.php?id=" style="color:#52C38A; font-size: 20px;">Add Book</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="adminRegisteration.php"><span class="glyphicon glyphicon-user"></span>Add Admin</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>



  <img src="https://wallpapercave.com/wp/wp2297932.jpg" width="1340px;" height="450px;" style="margin-top: -20px;">
    <div class="container-fluid text-center">
    <h1 style="
    font-family: 'Lobster', cursive;
  margin-top: -400px;
  margin-right:890px;
font-size: 80px;
opacity:.8; 
   color:#9E9E9E;">Big Library<br>
 your way to get best future</h1>
 </div>



<div class="manageUser" style="width: 1340px;background-color: black;
">

  

   <table class="table table-hover">
  <thead>

            <tr style="color: #9E9E9E; font-size: 18px; font-family: cursive;">

                <th  style="text-align: center; color:#9E9E9E; "></th>

                <th>Name</th>
                <th>Type</th>
                <th>Author</th>

                <th>Date</th>


                <th  style="text-align: center;">Status</th>

                <th  style="text-align: center; ">Description</th>

                <th>Size</th>
                <th  style="text-align: center;"> </th>


                

            </tr>

        </thead>

        <tbody style="color: #9E9E9E">


            <?php

            $sql = "SELECT * FROM customer ";

            $result = $conn->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr style ='font-size:18px;'>


            <td><img src= ".$row['img'] ." width='100px;'></td>

                        <td  style='text-align: center;'> ".$row['name']."</td>

                        <td  style='text-align: center;'> ".$row['type']."</td>

                      
                        <td style='text-align: center;'>".$row['author']."</td>
                        <td style='text-align: center;'>".$row['data']."</td>
                        
                        <td style='text-align: center;'>".$row['status']."</td>
                        <td style='text-align: center;'>".$row['description']."</td>
                        <td style='text-align: center;'>".$row['size']."</td>

<td>

                            <a href='update.php?id=".$row['customer_id']."'><button type='button' class='btn btn-info'>
                            Edit</button></a>

                            <a href='delete.php?id=".$row['customer_id']."'><button type='button'class='btn btn-danger'>Delete</button></a>  

</td>


                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


             

        </tbody>

</table>
</div>



</body>
</html>