<?php 
	include 'db_connection.php';
	$conn = OpenCon();
	//echo "Connection Successful";
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" href="cssbeebo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<div class="topnav" id="myTopnav">
	<a href="world.php" class="active">Home</a>
	<a href="country.php">Country</a>	
	<a href="city.php">City</a>
	<a href="language.php">Language</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	</a>
	</div>
		<style>
		  h1{
			text-align: center;
		  }

		  
		  table {
		   border-collapse: collapse;
		   width: 100%;
		   color: #588c7e;
		   font-family: monospace;
		   font-size: 12px;
		   text-align: left;
			 } 
		  th {
		   background-color: #588c7e;
		   color: white;
			}
		  tr:nth-child(even) {background-color: #f2f2f2}
		  
		  .topnav {
			overflow: hidden;
			background-color: #333;
			}

			.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
			}

			.topnav a:hover {
			background-color: #ddd;
			color: black;
			}

			.active {
			background-color: #0000ff;
			color: white;
			}

			.topnav .icon {
			display: none;
			}

			@media screen and (max-width: 600px) {
			.topnav a:not(:first-child) {display: none;}
			.topnav a.icon {
				float: right;
				display: block;
			}
			}

			@media screen and (max-width: 600px) {
			.topnav.responsive {position: relative;}
			.topnav.responsive .icon {
				position: absolute;
				right: 0;
				top: 0;
			}
			.topnav.responsive a {
				float: none;
				display: block;
				text-align: left;
			
			}
		}
		</style>

        <title>World Database for Dummies</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
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
			<script>
			function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
			}
			</script>
		
    </head>
	
    <body>
		<div id="form">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    <div class="pb-3">
						<h1> World Datasets </h1>
                        <h1> Start searching! </h1>
						<body>
                    </div>
                </div>
            </div>
		</div>
	</body>
</html>