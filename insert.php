<?php
$mysqli = mysqli_connect("localhost","root","","custom");
if($mysqli === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
$receiver = $_REQUEST['name2'];
$amt = $_REQUEST['amount'];
$sql = "UPDATE transfer SET trans_to='$receiver',amount=$amt WHERE trans_to='Geetanjali' AND amount=0;";
$transfer = mysqli_query($mysqli,$sql);
if ($transfer) {
        echo "";
}
else {
         echo "ERROR" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>

<?php
$username="root";
$password="";
$database="custom";
$mysqli = new mysqli('localhost',$username,$password,$database);
if($mysqli->connect_error)
{
        die("Connection Failed (" . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}
       $sql = "SELECT * FROM transfer";
       $result = $mysqli->query($sql);
       $mysqli->close();
?>

 <?php 
                       $mysqli = mysqli_connect("localhost","root","","custom");
        if($mysqli === false){
              die("ERROR: Could not connect. " 
                . mysqli_connect_error());
                           }
                       $up = "update details,transfer set phno=phno-$amt where details.name = transfer.trans_from and phno=details.phno";
                       $query = mysqli_query($mysqli,$up);
                        ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Transfer Details</title>
        <style>
               html,body{
    background: url("home.png");
    background-position: center;
    background-size: cover;
    height: 100%;
}
h1{
    font-size: 70px;
    text-align: center;
    text-decoration: underline;
    color: whitesmoke;
    margin-top: 20px;
}
table{
    margin-left: 250px;
}
table th{
    border: 2px solid white;
    padding: 4px 8px;
    background-color: rgb(91, 93, 218);
    width: 300px;
    color: whitesmoke;
    font-size: 20px;
    font-weight: bold;
}
table td{
    border: 2px solid white;
    padding: 4px 8px;
    background-color: rgb(62, 52, 146);
    width: 100px;
    color: whitesmoke;
    text-align: center;
}
.button li{
    display: inline;
}
.button li a{
    color: #fff;
    text-decoration: none;
    padding: 2px 5px;
    font-family: poppins;
    background: rgb(35, 70, 94);
    font-size: 18px;
    font-weight: bold;
    margin-left: 44%;
    margin-top: 80%;
    width: 200px;
    height: 90px;
    border:2px solid whitesmoke;
}
.button li a:hover{
    background: #fff;
    color: rgb(88, 39, 204);
    border:2px solid rgb(88, 39, 204);
}
        </style>
    </head>
    <body>
        <h1>Transaction History</h1>
        <table>
                <tr>
                    <th>Transaction From</th>
                    <th>Transaction To</th>
                    <th>Amount</th>
                </tr>
                <?php
                    while($rows=$result->fetch_assoc())
                    {
                ?>        
                <tr>
                    <td><?php echo $rows['trans_from'];?></td>
                    <td><?php echo $rows['trans_to'];?></td>
                    <td><?php echo $rows['amount'];?></td>
                </tr>
                <?php
                    }
                ?>
        </table>  
        <br> 
        <ul class="button">
            <li><a href="viewdet.php">Back to View Page</a></li>
        </ul>  
    </body>
</html>