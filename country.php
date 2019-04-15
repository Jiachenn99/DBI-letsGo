<?php

if(isset($_POST['search'])){
		$searchq = $_POST['search'];
		$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

		$query = mysql_query("SELECT * FROM country WHERE ") or die("could not search!");

 
}

?>

<!DOCTYPE html>
<html>
    <head>
		<div class="topnav" id="myTopnav">
		<a href="world.php" >Home</a>
		<a href="country.php" class="active">Country</a>
		<a href="#contact">City</a>			//havent link
		<a href="#about">Language</a>				//havent link
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
		   font-size: 12px;
		   text-align: left;
			 } 
		  th {
		   background-color: #588c7e;
		   color: white;
			}
		  tr:nth-child(even) {background-color: #f2f2f2}
		  
		  body {
			  background-color: beige;
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

	</head>
	<body>
	<div id="form">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    <div class="pb-3">
                        <h2> Search Countries </h2>
                    </div>
                    <form action = "country.php" method ="post">
                        <div class="form-group">
                            <input type="text" name = "search" class="form-control"
                                placeholder="Search for countries"/>
                            </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
		</div>
		<p></p>
    <table>
		<tbody>
			  <tr>
				 <th>Country_Code</th>
				 <th>Country_Name</th>
				 <th>Continent</th>
				 <th>Region</th>
				 <th>Area</th>
				 <th>Year_of_Independence</th>
				 <th>Population</th>
				 <th>Life_Expectancy</th>
				 <th>GNP</th>
				 <th>GNPOld</th>
				 <th>Alt_Names</th>
				 <th>Rulling_System</th>   
				 <th>Founder</th> 
				 <th>City_ID</th> 
				 <th>ISO_code</th> 
			  </tr>
			  <tr>
				  <?php
					
					include 'db_connection.php';

					$conn = OpenCon();
					$sql = "SELECT * from country";
					$result = $conn-> query($sql);
					
					
				   if($result-> num_rows > 0){
						while($row = $result-> fetch_assoc()){
							echo "<tr><td>". utf8_encode($row["Country_Code"]) ."</td><td>". utf8_encode($row["Country_Name"]) ."</td><td>". $row["Continent"] ."</td><td>". $row	["Region"] ."</td><td>". $row["Area"] ."</td><td>". $row["Year_of_Independence"] ."</td><td>". $row["Country_Population"] ."</td><td>". $row["Life_Expectancy"] ."</td><td>". $row["GNP"] ."</td><td>". $row["OldGNP"] ."</td><td>". utf8_encode($row["Alt_Name"]) ."</td><td>". $row["Rulling_System"] ."</td><td>". utf8_encode($row["Founder"]) ."</td><td>". $row["City_ID"] ."</td><td>". $row["ISO_Code"] ."</td></tr>";
						}
						echo "</table>";
					}
				   else{
						echo "0 result";
					}
				   $conn-> close();
				   ?>
			  </tr>
		</tbody>
	</table>
	</body>
</html>