<?php 

//Connection
    include 'db_connection.php';
    $conn = OpenCon();

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
    }

    //Deleting where the id is located
    $querydelete = "DELETE FROM city WHERE City_ID = '$id'";

    //Query the database
    $result = mysqli_query($conn, $querydelete);

    //Redirect to City main page
    header("Location: city.php");
?>