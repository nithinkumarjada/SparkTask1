<!DOCTYPE html>
<html>
    <head>
        <title>Transfer Money</title>
        <style>
               html,body{
    background: url("transfer.png");
    background-position: center;
    background-size: cover;
    height: 100%;
}
h1{
    font-size: 70px;
    text-align: center;
    text-decoration: underline;
    color: black;
    margin-top: 20px;
}
label{
    font-size: 30px;
    padding-left: 450px;
    color: black;
}
input{
    font-size: 20px;
    color: #000;
    background-color: white;
    margin-left: 20px;
    padding: 4px 8px;
}
.btn button{
    display: inline;
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
    font-family: poppins;
    background: rgb(27, 41, 163);
    font-size: 22px;
    font-weight: bold;
    margin-left: 43%;
    width: 140px;
    height: 40px;
    border:2px solid whitesmoke;
}
table{
    margin-left: 250px;
}
table th{
    border: 2px solid white;
    padding: 4px 8px;
    background-color: black;
    width: 300px;
    color: whitesmoke;
    font-size: 20px;
    font-weight: bold;
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
    margin-left: 91%;
    margin-top: 70%;
    width: 170px;
    height: 70px;
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
        <h1>Transfer Money</h1>
        <br>
        <br>
        <form action="insert.php" method="post">
        <label for="To">Transfer Money(to) : </label>
        <input type="text" id="name2" name="name2" placeholder="Name">
        <br>
        <br>
        <label for="amount">Amount(Rs.) : </label>
        <input type="number" id="amount" name="amount" placeholder="in Rs.">
        <br>
        <br>
        <br>
        <div class="btn">
            <button type="submit" name="transfer" value="transfer">Transfer</button>
        </div>
        </form>
    </body>
</html>