<?php
$username="root";
$password="";
$database="custom";
$mysqli = new mysqli('localhost',$username,$password,$database);
if($mysqli->connect_error)
{
        die("Connection Failed (" . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}
       $sql1 = "INSERT into transfer VALUES ('Rahul','Geetanjali',000)";
           $query = mysqli_query($mysqli,$sql1);
       $sql = "SELECT * FROM details where name = 'Rahul' ";
       $result = mysqli_query($mysqli,$sql);
       if ($result) {
        echo "";
        }
        else {
         echo "ERROR" . mysqli_error($mysqli);
}
$rows=mysqli_fetch_assoc($result);
$mysqli->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Details</title>
       <style>
               html,body{
    background: url("bg2.jpg");
    height: 100%;
    background-position: center;
    background-size: cover;
}
h1{
    font-size: 70px;
    text-align: center;
    color: whitesmoke;
}
table{
    table-layout:auto;
}
table td{
    border: 2px solid white;
    padding: 4px 8px;
    color:white;
    font-size:22px;
    background-color: rgb(62, 52, 146);
    width: 100px;
}
table th{
    border: 2px solid white;
    padding: 4px 8px;
    font-size:22px;
    font-weight:bold;
    color:whitesmoke;
    background-color: rgb(91, 93, 218);
    width: 300px;
}
.btn li{
    display: inline;
}
.btn li a{
    color: #fff;
    text-decoration: none;
    padding: 2px 5px;
    font-family: poppins;
    background: rgb(35, 70, 94);
    font-size: 20px;
    font-weight: bold;
    margin-left: 44%;
    margin-top: 80%;
    width: 220px;
    height: 100px;
    border:2px solid whitesmoke;
}
.btn li a:hover{
    background: #fff;
    color: rgb(88, 39, 204);
    border:2px solid rgb(88, 39, 204);
}
</style>
    </head>
    <body>
         <h1>View Customer Details</h1>
          <table>
                <tr>
                    <th>Name</th>
                    <th>EmailID</th>
                    <th>Current Balance</th>
                    <th>Account Number</th>
                    <th>IFSC</th>
                </tr>       
                <tr>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['phno'];?></td>
                    <td><?php echo $rows['accno'];?></td>
                    <td><?php echo $rows['ifsc'];?></td>
                </tr>
        </table>
          <br><br>
          <ul class="btn">
               <li><a href="http://localhost/Internship/transfer.php">Transfer Money</a></li>
          </ul>
          <br>
       </body>
</html>