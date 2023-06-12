<?php
$u_name=$_POST['uname'];
$pass=$_POST['password'];
$conn=new mysqli("localhost","root","","test");
//server , user , password , db
if($conn->connect_error)
{
die("Connection failed. ".$conn->connect_error);
} 
//$sql="select * from form_val where Username='$u_name' and Password='$pass' ";
$sql="select * from login where UserName='$u_name' and Password='$pass' ";
$result=$conn->query($sql);
if($result->num_rows>0)
echo"Record Matched..... Welcome!";
else
echo "No record Found!!!";
 
$conn->close();
?>
