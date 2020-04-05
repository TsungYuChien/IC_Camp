<?php
require('config.php');

$password=$_POST['pw'];

$error_flag=FALSE;


//伺服器連線，選擇資料庫
$con=mysqli_connect($db_host,$db_user,$db_pass);
    
//mysql_error()函數會返回上一個mysql操作產生的文本錯誤信息
    
if (mysqli_connect_errno($con))  
{  
    echo "Unable to connect: " . mysqli_connect_error();  
}  
    
 mysqli_query($con,'SET CHARACTER SET utf8');
 $db_seleted=mysqli_select_db($con,$db_name);
 $sql="SELECT * FROM users";
 $result=mysqli_query($con,$sql);
    
 while($row=mysqli_fetch_array($result)){
    if(empty($_POST["pw"])==FALSE){
     
        //攻擊防範
        $userPassword=$_POST["pw"];
        $userPassword=mysqli_real_escape_string($con,$userPassword);
            
        if($row["Password"]==$password){
            //如果相符合，則設定 Session，再轉址到選擇頁面
            session_start();
            $_SESSION["Password"]=$_POST["pw"];
            $_SESSION["id"]=$row["ID"];
            $_SESSION["per"]=$row["permission"];
            $_SESSION["team"]=$row["team"];
            $_SESSION["name"]=$row["Name"];
            $_SESSION["nickname"]=$row["Nickname"];
            header('Location: check_group.php');
            
        }
        else{
            $error_flag=TRUE;
            
            
        }
    }else{
        //如果沒收到，繼續顯示網頁内容
       
    }
    
      
}

?>
