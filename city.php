<?php
	//Update Country code

	include 'db_connection.php';
	$conn = OpenCon();

	if(isset($_POST['updateCity'])){
		$City_ID = $_POST['City_ID'];
		$City_Name = $_POST['City_Name'];
		$Country_Code = $_POST['Country_Code'];
		$Province = $_POST['Province'];
		$Population = $_POST['Population'];
		
		$sql = "UPDATE city
			SET City_Name = '$City_Name', Country_Code = '$Country_Code', Province = '$Province', Population = '$Population'
			WHERE City_ID = '$City_ID'";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
		
	}

?>

<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<div class="topnav" id="myTopnav">
		<a href="world.php" >Home</a>
		<a href="country.php">Country</a>
		<a href="city.php" class = "active">City</a>
		<a href="language.php">Language</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
		</div>
    <style>
				h1{
				text-align: center;
				background-color: green;
			}
		  table {
		   border-collapse: collapse;
		   width: 100%;
		   color: #588c7e;
		   font-family: monospace;
		   font-size: 15px;
		   text-align: left;
		
			 } 
		  th {
		   background-color: #588c7e;
		   color: white;
			}
		  
		  

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

			table{
			width:100%;
			table-layout: fixed;
			}
			.tbl-header{
			background-color: rgba(255,255,255,0.3);
			}
			.tbl-content{
			height:300px;
			overflow-x:auto;
			margin-top: 0px;
			border: 1px solid rgba(255,255,255,0.3);
			}
			th{
			padding: 20px 15px;
			text-align: left;
			font-weight: 500;
			font-size: 12px;
			color: #fff;
			text-transform: uppercase;
			}
			td{
			padding: 15px;
			text-align: left;
			vertical-align:middle;
			font-weight: 300;
			font-size: 12px;
			color: #fff;
			border-bottom: solid 1px rgba(255,255,255,0.1);
			}


			/* demo styles */

			@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
			body{
			background: -webkit-linear-gradient(left, #25c481, #25b7c4);
			background: linear-gradient(to right, #25c481, #25b7c4);
			font-family: 'Roboto', sans-serif;
			}
			section{
			margin: 50px;
			}


			/* follow me template */
			.made-with-love {
			margin-top: 40px;
			padding: 10px;
			clear: left;
			text-align: center;
			font-size: 10px;
			font-family: arial;
			color: #fff;
			}
			.made-with-love i {
			font-style: normal;
			color: #F50057;
			font-size: 14px;
			position: relative;
			top: 2px;
			}
			.made-with-love a {
			color: #fff;
			text-decoration: none;
			}
			.made-with-love a:hover {
			text-decoration: underline;
			}


			/* for custom scrollbar for webkit browser*/

			::-webkit-scrollbar {
				width: 6px;
			} 
			::-webkit-scrollbar-track {
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
			} 
			::-webkit-scrollbar-thumb {
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
			}
			.wrapper {
				text-align: right;
			}
	</style>

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

			<script>
			$(window).on("load resize ", function() {
			var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
				$('.tbl-header').css({'padding-right':scrollWidth});
			}).resize();
			</script>

	</head>
	<body>
	<div id="form">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    <div class="pb-3">
                        <h2> Search cities here! </h2>
                    </div>
                    <form action = "city.php" method ="post" >
                        <div class="form-group">
                            <input type="text" name = "selection" class="form-control"
                                placeholder="Search for cities or country codes?"/>
                            </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
					<br>
					<form action = "insertCity.php" method ="post">
					<button type="submit" name =addbutton class="btn btn-primary">Add City fields</button>
                </div>
            </div>
		</div>
		<p></p>
		<p></p>	

		<div class="tbl-content">
			<table>
			<tbody>
			<?php	
					//SELECT			  						
					//Display a table to user first
					$dispall = "SELECT * FROM city";
					$querycity = mysqli_query($conn, $dispall);

					if(isset($_POST['selection']))
					{
						$keyword = $_POST['selection'];
						//Query based off keywords
						$sqlsecond =  "SELECT * FROM city WHERE City_Name LIKE '$keyword%' OR Province LIKE '$keyword%' OR City_ID = '$keyword' OR Country_Code LIKE '$keyword%'";
						//Query the database
						$querycity = mysqli_query($conn, $sqlsecond); 

					}
					
					//Table for City					
					if(mysqli_num_rows($querycity) > 0)
					{
						//Table headers
						echo "<table border='1'>
						<th>City ID </th>
						<th>City Name</th >
						<th>Country Code</th>
						<th>Province</th>
						<th>Population</th>
						<th>Update</th>
						<th>Delete</th>";
						while($row = mysqli_fetch_assoc($querycity))
						{						
							echo "<tr>";
							echo "<td>" . utf8_encode($row['City_ID']) . "</td>";
                            echo "<td>" . utf8_encode($row['City_Name']) . "</td>";
                            echo "<td>" . utf8_encode($row['Country_Code']) . "</td>";
                            echo "<td>" . utf8_encode($row['Province']) . "</td>";
							echo "<td>" . utf8_encode($row['Population']) . "</td>";
							echo "<td><a href='updateCity.php?id=".$row['City_ID']."'>Update</a></td>";
							echo "<td><a href='deleteCity.php?id=".$row['City_ID']."'>Delete</a></td>";
                            echo "</tr>";
                        }
                    echo "</table>";
					}	
					
					else
					{
						printf("No such city found.");
					}
					$conn-> close();
			?>
			</tbody>
		
		</table>		
		</div>	 
	</body>
	<div class="made-with-love">
	<i>World Datasets 2019</i>
	</div>
</html>
		