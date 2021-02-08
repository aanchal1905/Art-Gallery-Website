<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','dbms');
$con = mysqli_connect('localhost', 'root', '','dbms');

// get the post records
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];


// database insert SQL code
$sql = "INSERT INTO `sign` (`username`, `password`,`gender`,`email`,`phoneCode`,`phone`) VALUES ('$username','$password','gender','$email','$phoneCode','$phone')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
        echo "LOGGED IN SUCCESSFULLY :";
        echo '<a href="http://localhost/DBMS_PBL/index.html">  VISIT WEBSITE</a>';
}
?>