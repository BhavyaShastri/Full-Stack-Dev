<!DOCTYPE html>
<html lang="en">
<head>
        <title>Book Info</title>
</head>
<style>
        table{
        margin-left: 50px;
        margin-bottom: 20px;
        }
        th{
        width: 10%;
        }
        table,tr,td,th{
        border: 5px solid black;
        border-collapse: collapse;
        padding: 5px;
        text-align: center;
        } 
        h2,h3{
        text-align: center;
        }
</style>
<body>
        <h2>Book Information and Management System</h2>
        <h3>The Book you Requested for</h3>
        <?php
        $tit = $_POST['title'];
        $conn = new mysqli("localhost", "root", "", "test");
        if ($conn->connect_error) {
            die("Connection Establishment Failed!!" . $conn->connect_error);
        }
        $quer = "select * from BookDB where Title='$tit' ";
        $result = $conn->query($quer);
        if ($result->num_rows > 0) {
             while($row=$result->fetch_assoc())
                {?>
                    <table>
                        <tr>
                        <th>Accession Number</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Publisher</th>
                        </tr>
                        <tr>
                        <td><?php echo $row['ANo']; ?></td>
                        <td><?php echo $row['Title']; ?></td>
                        <td><?php echo $row['Author']; ?></td>
                        <td><?php echo $row['Edition']; ?></td>
                        <td><?php echo $row['Publisher']; ?></td>
                        </tr>
                    </table>
                <?php
                }
} 
else {
    echo "Is Not Present!!! No Records Found for the Requested Title " . "<br/>";
    echo "<a href='search.html'>Back to Search Page</a>";
}
$conn->close();
echo '<pre>';
echo "\t<a href='search.html'>Search a Book Here</a>\n \tOR\n\t<a href='index.html'>Enter a new 
Record</a>\n";
echo '</pre>';
?>
</body>
</html>
