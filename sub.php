<?php
$con=mysqli_connect('localhost','root','','hamlet');
if($_POST['type']=='1')
{
$email=$_POST['email'];
mysqli_query($con,"INSERT INTO sub(email) VALUES('$email')");

}

?>