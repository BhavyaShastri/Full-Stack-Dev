<?php
$ano=$_POST['Aname'];
$tit=$_POST['title'];
$author=$_POST['auth'];
$ed=$_POST['ed'];
$pub=$_POST['pub'];
$conn=new mysqli("localhost","root","","test");
if($conn->connect_error)
{
    die("Connection Establishment Failed!!".$conn->connect_error);
}
$quer="Insert into BookDB values('$ano','$tit','$author','$ed','$pub');";
$result=$conn->query($quer);
if($result==TRUE)
{
    echo "Records Entered Successfully!!!"."<br/>";
    echo "<a href='search.html'>Search a Book Here</a> OR ";
    echo "<a href='index.html'>Enter a new Record</a>";
}
else
{
    echo "Error Inserting Records!!!"."<br/>";
    echo "<a href='index.html'>Back to Homepage</a>";
}
$conn->close();
?>
