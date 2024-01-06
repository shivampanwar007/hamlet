<?php
$con=mysqli_connect('localhost','root','','hamlet');
if($_POST['type']=='1')
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mysqli_query($con,"INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')");
echo $name." ".$email;

}

?>