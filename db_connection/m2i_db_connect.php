<?php
//Database Connection:
$conn=new mysqli('localhost','root','','m2its');
//$conn=new mysqli('localhost','u592725850_dbadminuser','Welcome#M2i@123','u592725850_m2its');
if($conn->connect_errno)
{
echo $conn->connect_error;
echo "Database not connected";
die();
}
else
{
//echo "Database connected";
}
?>