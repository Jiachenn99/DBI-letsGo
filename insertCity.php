<!DOCTYPE html>
<html>
    <head>
        <div class="topnav" id="myTopnav">
		<a href="world.php" >Home</a>
		<a href="country.php" >Country</a>
		<a href=city.php class="active">City</a>			
		<a href="language.php">Language</a>			
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
		</div>

        <style>
            @import "http://fonts.googleapis.com/css?family=Droid+Serif";
                .submit {
                color:#fff;
                border-radius:3px;
                background:#1F8DD6;
                padding:5px;
                margin-top:40px;
                border:none;
                width:100%;
                height:30px;
                box-shadow:0 0 1px 2px #123456;
                font-size:18px
                }
                span {
                text-align:center;
                color:green
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
                        <h2> Add into City Dataset </h2>
                    </div>
                        <form action = "insertCity.php" method ="post">
                            <div class="form-group">
                                City_ID: <input type="text" name = "addCI" class="form-control" placeholder="City ID"/><br><br>
                                City_Name: <input type="text" name = "addCN" class="form-control" placeholder="City Name"/><br><br>
                                Country_Code: <input type="text" name = "addCC" class="form-control" placeholder="Country Code"/><br><br>
                                Province: <input type="text" name = "addProv" class="form-control" placeholder="Province"/><br><br>
                                Population: <input type="text" name = "addPop" class="form-control" placeholder="City Population"/><br><br>
                                
                            </div>
                            <button type="submit" name ="submit" class="btn btn-primary">Add</button><br><br>
                        </form>
                </div>
            </div>
		</div> 
        <?php 
        include 'db_connection.php';
        $conn = OpenCon();
        //echo "Connection Successful";
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        if(isset($_POST['submit'])){
            $CI =$_POST['addCI'];
            $CN =$_POST['addCN'];
            $CC = $_POST['addCC'];
            $Prov = $_POST['addProv'];
            $Pop = $_POST['addPop'];
            
            if($CI != '' || $CN != ''){
                $query = ("INSERT INTO city(City_ID,City_Name,Country_Code,Province,Population) 
                VALUES ('$CI','$CN','$CC','$Prov','$Pop')");
                
                $result = $conn-> query($query);
                
                echo "<br/><br/><span>Data Inserted successfully...!!</span>";
            }
            else{
            echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
            }
        }
        
        $conn->close();
        ?>

    </body>
</html>
