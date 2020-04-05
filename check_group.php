<?php

header("Content-Type:text/html; charset=utf-8");
//關閉系統提示
error_reporting(0);
session_start();
require('config.php');
$con=mysqli_connect($db_host,$db_user,$db_pass);

$team=$_SESSION["team"];
$per=$_SESSION["per"];

if (mysqli_connect_errno($con))  
{  
    echo "Unable to connect: " . mysqli_connect_error();  
}
mysqli_query($con,'SET CHARACTER SET utf8');

$db_seleted=mysqli_select_db($con,$db_name);

$sql="SELECT * FROM camp_group WHERE team=$team";

$result=mysqli_query($con,$sql)or die("無法新增".mysqli_error($con));//執行sql語法

while($row=mysqli_fetch_array($result)){
    $_SESSION["teamname"]=$row["teamname"];
    $_SESSION["money"]=$row["money"];
}
    
if($per==1)header('Location: select_page/select_manage.php');
else if($per==2)header('Location: select_page/select_staff.php');
else if($per==3)header('Location: select_page/select_teamlead.php');
else if($per==4)header('Location: select_page/select_freshman.php');
else if($per==5)header('Location: select_page/select_by2.php');


?>