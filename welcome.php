<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['cityid']))
{
    $cityid = $_POST['cityid'];
}

$sql =  "SELECT * FROM city WHERE City_ID = '$cityid'";
$result =mysqli_query($conn, $sql); 
/*
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo nl2br($row["City_ID"] . $row["Province"] .$row["City_Name"]."\n");
    }
}

else
{
    echo "0 results";
}
*/

echo "<tr>";
while ($col = $result->fetch_field()) {
    echo "<th>" . $col->name . "  \t  " ."</th>";
}
echo "</tr>";

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["City_ID"]."</td><td>".$row["City_Name"]."\t\t ".$row["Country_Code"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



$conn->close();
?> 