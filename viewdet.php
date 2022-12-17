<?php
$username="root";
$password="";
$database="custom";
$mysqli = new mysqli('localhost',$username,$password,$database);
if($mysqli->connect_error)
{
        die("Connection Failed (" . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}
       $sql = "SELECT name FROM details";
       $result = $mysqli->query($sql);
       $mysqli->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Customers</title>
       <style>
               html,body{
    background: url("view.png");
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
   
    margin-left:26%;
}
table td{
    border: 2px solid black;
    padding: 4px 8px;
    color:black;
    font-size:20px;
    background-color: rgb(62, 52, 146);
    
    background-color:whitesmoke;
    width: 100px;
}
table th{
    border: 2px solid white;
    padding: 4px 8px;
    font-size:22px;
    font-weight:bold;
    color:whitesmoke;
    background-color: rgb(91, 93, 218);
    background-color:black;
    width: 300px;
}
table td button{
          margin-left:130px;
}
       </style>
    </head>
    <body>
        <h1>Details of the Customers</h1>
        <table>
                <tr>
                    <th>Username</th>
                   <th> Details</th>
                </tr>
                <?php
                    $count = -1;
                    while($rows=$result->fetch_assoc())
                    { 
                        $count = $count + 1;
                ?>     
                 <form action="viewac<?php echo $count; ?>.php" method="post">   
                <tr>
                    <td><?php echo $rows['name'];?></td>
                    <td><button type="submit" name="view" value="view">View</button></td>
                </tr>
                </form>
                <?php
                    }
                ?>
        </table>
    </body>
</html>