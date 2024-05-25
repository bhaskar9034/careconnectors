<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!DOCTYPE html>

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>CARE CONNECTORS &amp; Medical template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="novena" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

  <!-- 
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
                <ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li style="color:black;" class="list-inline-item"><a style="color:black;" href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2" style="color:black;"></i>careconnectors.com</a></li>
						<li style="color:black;" class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Bhimavaram </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890">
							<span style="color:black;">Call Now : </span>
							<span class="h4" style="color:black;">9676583892</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="">
            <img src="images/z2.jpg" alt="" class="img-fluid">
                <h3>Imperial hospitals</h3>
			</a>
	</nav>
</header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Table Display</title>
    <style>
        body {
            background-color: #87CEEB; /* Sky blue background color */
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* White container with some transparency */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<head>
    <title>Imperial Hospitals</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }





        /* adding some casual css for the button */

    button {
  text-decoration: none;
  position: relative;
  border: none;
  font-size: 14px;
  font-family: inherit;
  color: #fff;
  width: 9em;
  height: 2em;
  line-height: 2em;
  text-align: center;
  background: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);
  background-size: 300%;
  border-radius: 30px;
  z-index: 1;
}

button:hover {
  animation: ani 8s linear infinite;
  border: none;
}

@keyframes ani {
  0% {
    background-position: 0%;
  }

  100% {
    background-position: 400%;
  }
}

button:before {
  content: '';
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  z-index: -1;
  background: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);
  background-size: 400%;
  border-radius: 35px;
  transition: 1s;
}

button:hover::before {
  filter: blur(100px);
}

button:active {
  background: linear-gradient(32deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);
}
    </style>
</head>
<body>
    <center>
    <br><br>
    <div>
        <button id="showButton" onclick="showTable()">Show DataBase</button>
        <button id="hideButton" onclick="hideTable()" style="display:none;">Hide DataBase</button>
    </div>
    <table id="userTable" style="display:none;">
        <tr>
            <th>department</th>
            <th>DoctorNameName</th>
            <th>date</th>
            <th>time</th>
            <th>name</th>
            <th>phone</th>  
            <th>message</th>

        </tr>
        <?php
            echo "<br><br><p style='font-size: 28px; text-align: center;'>welcome to <b>Imperial Hospitals</b> DataBase";
            echo "<br><br><p style='font-size: 28px; text-align: center;'>Today Booked appointments are..";
        // PHP code for fetching data from the database.
        $conn = mysqli_connect("localhost", "root", "", "sih");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT department ,DoctorName ,date ,time ,name ,phone ,message FROM imperial";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["department"] . "</td><td>" . $row["DoctorName"] . "</td><td>". $row["date"] . "</td><td>". $row["time"] 
                . "</td><td>". $row["name"] . "</td><td>". $row["phone"] . "</td><td>". $row["message"] ;
            }
        } else {
            echo "<tr><td colspan='3'>No rows to display..!</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</center>
    <script>

        function showTable() {
            var showButton = document.getElementById("showButton");
            var hideButton = document.getElementById("hideButton");
            var table = document.getElementById("userTable");
            var rowCountSpan = document.getElementById("rowCount");
            
            showButton.style.display = "none";
            hideButton.style.display = "block";
            table.style.display = "table";
        }

        function hideTable() {
            var showButton = document.getElementById("showButton");
            var hideButton = document.getElementById("hideButton");
            var table = document.getElementById("userTable");
            var rowCountSpan = document.getElementById("rowCount");
            
            showButton.style.display = "block";
            hideButton.style.display = "none";
            table.style.display = "none";
        }
    </script>
</body>
</html>
