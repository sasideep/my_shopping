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
    #$user = $_POST['product'];
    $user = "pro1";
    $query = "SELECT * FROM mytable2 WHERE prod ='$user'";
    $data= mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1){
        $sum=0;
        echo "product found<br><br>";
        while($row= mysqli_fetch_array($data)){
            echo "Product Name:{$row['prod']}<br>";
            echo "Product Cost:{$row['cost']}<br>";
            $totalsum=$sum+$row['cost'];
        }
        $no="input:3";
        sscanf($no,"input:%d",$input);
        $totalsum = $totalsum*$input;
        echo "Total cost:".$totalsum;
        echo "<h4>You wii get your delivery within 10 days</h4>";
        
    }
    else{
        echo "product not found";
    }

?>
<html>
    
</html>