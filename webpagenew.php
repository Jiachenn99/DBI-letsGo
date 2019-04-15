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


$conn->close();
?> 


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Look up the Cities You Want!
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>
<body style="background-color: beige;">
    <div id="form">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    <div class="pb-3">
                        <h1> Look up the Cities you want! </h1>
                    </div>
                    <form action = "display.php" method ="post">
                        <div class="form-group">
                            <input type="text" name = "cityid" class="form-control"
                                placeholder="Search for countries, cities or languages">
                            <!--<input type = "text" name = "countrycode" class = "form-control" placeholder="lmao"> -->
                            </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
    </div>
</body>
</html>
