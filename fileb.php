<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','dbms');
$con = mysqli_connect('localhost', 'root', '','dbms');

// get the post records
$email = $_POST['email'];
$Password = $_POST['Password'];

// database insert SQL code
$sql = "INSERT INTO `login` (`email`, `Password`) VALUES ('$email','$Password')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
        echo "LOGGED IN SUCCESSFULLY :";
        echo '<a href="http://localhost/DBMS_PBL/index.html">  VISIT WEBSITE</a>';
}
?>