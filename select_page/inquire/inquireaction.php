<?php
error_reporting(0);
session_start();
require('../../config.php');
$con=mysqli_connect($db_host,$db_user,$db_pass);

$nickname=$_POST["renick"];
$id=$_SESSION["id"];
$team=$_SESSION["team"];

if (mysqli_connect_errno($con))  
{  
    echo "Unable to connect: " . mysqli_connect_error();  
}
mysqli_query($con,'SET CHARACTER SET utf8');

$db_seleted=mysqli_select_db($con,$db_name);


if($_SESSION["nickname"]==" "){
    $sql="INSERT INTO users(Nickname) VALUES ('$nickname') WHERE ID=$id";
}
else{
    $sql="Update users Set Nickname='$nickname' WHERE ID=$id";
}

$result=mysqli_query($con,$sql)or die ("無法新增".mysqli_error($con)); //執行sql語法

while($row=mysqli_fetch_array($result)){
    $_SESSION["nickname"]=$row["Nickname"];
}


header('Location: ../../check_users.php');


?>