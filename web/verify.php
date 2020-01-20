<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname = "my_shopping";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "";
}
else{
    die("Connection failed because ".mysqli_connect_error());
}

    $user = $_POST['username'];
    $pwd = $_POST['password'];
    $query = "SELECT * FROM mytable1 WHERE username ='$user'&& password='$pwd'";
    $data= mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1){
        echo "Login ok";
    }
    else{
        echo "Login Failed";
    }

?>