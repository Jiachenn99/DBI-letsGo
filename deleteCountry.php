<?php 

//Connection
    include 'db_connection.php';
    $conn = OpenCon();

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
    }

    //Deleting where the id is located
    $querydelete = "DELETE FROM country WHERE Country_Code = '$id'";

    //Query the database
    $result = mysqli_query($conn, $querydelete);

    //Redirect to main Country page
    header("Location: country.php");


    






?>