<?php
$mysqli=mysqli_connect("localhost","root","","my_shopping");
$id=$_POST['userid'];
$username=$_POST['username'];
if(isset($_POST['gender']))
$gender =$_POST['gender'];
$phonecode = $_POST['phonecode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];

if(!(!empty($id) && !empty($username) && !empty($gender) && !empty($phonecode) && !empty($phone) && !empty($email) && !empty($password) && !empty($address))){
echo "All felids are required! <br> Your are redirected to registration page...";
header("Location: register.html");
exit();
}
else{
$query="INSERT INTO mytable1 (_id,username,gender,phonecode,phone,email,password,address) VALUES (?,?,?,?,?,?,?,?)";
$stmt=$mysqli->prepare($query);
$stmt->bind_param("issiisss",$id,$username,$gender,$phonecode,$phone,$email,$password,$address);
$stmt->execute();
echo "Congratulations! You have registered now. <br> You will now be redirected to Homepage...";
header("Location: login.html");
}

?>