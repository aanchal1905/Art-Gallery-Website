<?php
$email = $_POST['email'];
$password = $_POST['Password'];


if(!empty($email) || !empty($Password) )
{
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="dbms";

  //create connection
  $conn=new mysqli($host, $dbUsername, $dbPassword, $dbname);
  
  if(mysqli_connect_error())
  {
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
  } else {
      $SELECT="SELECT email from loginf Where email=? Limit 1";
      $INSERT="INSERT Into loginf (email, Password) values(?, ?)";
 
    //Prepare statement
      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->bind_result($email);
      $stmt->store_result();
      $rnum = $stmt->num_rows;
     
      if ($rnum==0)
       {
         $stmt->close();
         $stmt = $conn->prepare($INSERT);
         $stmt->bind_param("ss", $email, $Password);
         $stmt->execute();
         echo "Login done.";
       } else
           {
             echo "Someone already register using this username";
           }   
         $stmt->close();
         $conn->close();
     }
}
else
{
  echo "All field are required";
  die();
}
?>