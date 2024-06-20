<?php

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$query=$_POST['query'];
$brand=$_POST['brand'];

$conn=mysqli_connect('localhost','root','');

mysqli_select_db($conn,'chinni');

$sql=( " insert into kiki (name, mobile, email, query, brand) VALUES ('$name', '$mobile', '$email', '$query', '$brand')");

mysqli_query($conn,$sql);
    echo "Registered successfully...";


include('register.php');
mysqli_close($conn);

?>