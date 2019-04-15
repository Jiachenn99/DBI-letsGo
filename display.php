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

//Checking whether variables are set
if(isset($_POST['countrycode']))
{
    $countrycode = $_POST['countrycode'];
}


if(isset($_POST['cityid']))
{
    $cityid = $_POST['cityid'];
}

//Declaring sql statements to use
$sql =  "SELECT * FROM city WHERE 1";

//Query the database
$result = mysqli_query($conn, $sql); 

//Print result
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        //Display output in format provided
        echo nl2br($row["City_ID"] ."\t". $row["Province"] .$row["City_Name"]."\n");
    }
}

else
{
    echo "0 results";
}

$conn->close();
?> 
