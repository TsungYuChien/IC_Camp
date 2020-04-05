<?php

header("Content-Type:text/html; charset=utf-8");
//關閉系統提示
error_reporting(0);
session_start();
require('config.php');
$con=mysqli_connect($db_host,$db_user,$db_pass);

$name=$_SESSION["name"];

if (mysqli_connect_errno($con))  
{  
    echo "Unable to connect: " . mysqli_connect_error();  
}
mysqli_query($con,'SET CHARACTER SET utf8');

$db_seleted=mysqli_select_db($con,$db_name);

$sql="SELECT * FROM users WHERE name='$name'";

$result=mysqli_query($con,$sql)or die("無法新增".mysqli_error($con));//執行sql語法

while($row=mysqli_fetch_array($result)){
    $_SESSION["nickname"]=$row["Nickname"];
}
    
header('Location: check_group.php');

?>