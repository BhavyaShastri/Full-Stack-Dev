<?php
    $dno=$_POST['Department'];

    $conn=new mysqli("localhost","root","","test");
    if($conn->connect_error)
    {
        die("Connection failed. ".$conn->connect_error);
    } 
    $sql="select * from PERS where DepNo= '$dno' ";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
       
        while($row=$result->fetch_assoc())
        {
            echo "Employee ID :".$row['EmpId']."&emsp;"."&emsp;"."Employee Name: ".$row['Name']."&emsp; "."&emsp;"."Salary: ".$row['Salary']."&emsp; "."&emsp;"."Department Number: ".$row['DepNo']."<br>"."<br>";
        }
    }
    else
        echo "No record Found!!!";

    $conn->close();
?>
