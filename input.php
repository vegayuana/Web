<?php        
include "koneksi.php"; 

//input data
if(isset($_POST['submit']))
{
 $uname=$_POST['user'];
 $pass=$_POST['pass'];
 $email=$_POST['email'];
    
   $sql = "INSERT INTO user (username, password, email)
   VALUES ('$uname', '$pass', '$email')";
   if ($conn->query($sql) === TRUE) {
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
$conn->close();

?>

