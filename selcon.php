<?php
$con=mysqli_connect('localhost','root','','hamlet');
if($_POST['type']=='1')
{
$name=$_POST['name'];
$email=$_POST['email'];
$passward=$_POST['passward'];
$confirm=$_POST['confirm'];
mysqli_query($con,"INSERT INTO seller(name,email,passward,confirm) VALUES('$name','$email','$passward','$confirm')");
echo $name." ".$email;

}

?>