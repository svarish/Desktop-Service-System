<?php
session_start();

$result = "";
$conn = new mysqli('localhost','root','','admin2');
$passw = $_POST['username'];
$user = $_POST['password'];


$clu = $conn->real_escape_string($passw);
$clp = $conn->real_escape_string($user);


if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $sql = "SELECT * FROM panel WHERE  email = '$clu' and password = '$clp';" ;
    
    $result = $conn->query($sql);
    $rcheck = mysqli_num_rows($result);
    if($rcheck == 1){
        header("location:register.html");
        $_SESSION['login_user'] = $clu;
       
        }
       
        
   
    else{
        echo "TRY AGAIN";
    }
   






    }

 





  

?>
