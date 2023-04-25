
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ABPMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="DASHBORD.php">ANJALI BEAUTY SALONE</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li><a href="displayt.php">TREATMENT</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <!-- <li><a href="demophotos.php">DEMO PHOTOS</a></li> -->
        <li><a href="contactus.php">CONTACT US </a></li>
        <li><a href="complain.php">ATTECH COMPLAIN</a></li>
        <li class="active"><a href="appointment.php">APPOINTMENT</a></li>
        <!-- <li><a href="adminlogin.php">ADMIN LOGIN</a></li> -->
    </ul>
  </div>
</nav>





<?php
include("./connect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $NAME =$_POST["NAME"];
  $EMAIL = $_POST["EMAIL"];
  $SERVICES = $_POST["SERVICES"];
  $DATE = $_POST["DATE"];
  $TIME = $_POST["TIME"];
  $PHONE = $_POST["PHONE"];
  

  
  $sql = "INSERT INTO appointment (NAME,EMAIL,SERVICES,DATE,TIME,PHONE,status)
  VALUES ('$NAME','$EMAIL','$SERVICES','$DATE','$TIME','$PHONE',1)";
  
  if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully";
  } else  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}


//$conn->close();
mysqli_close($conn);
?>



<!DOCTYPE html>
<style>
    body{
    
    background-size:120%;
    margin: 0px;
    padding: 0;
    /* background: #28231f; */
    text-align: center;
      background-size:cover;
    
    background-image: url("C:\xampp\htdocs\comp\IMAGE\bg-3.png");
    animation:pan 6s infinite alternate linear; 
   
}


@keyframes pan{
  100%{
    background-position:10% 60%;
  }
}
  </style>
<html lang="en">
<head>
  <title>MAKE AN APPOINTMENT</title>
  <link rel="stylesheet" href="./CSS/registration.css">
</head>
<body>
<table width="100%" >
			
      <tr height="40px">
        <td colspan="3"> </td>
      </tr>
      
      <tr height="250px">
        <td width ="30%"></td>
        
        <td width ="40%" align="center">
        <h1 style="color:black;font-weight:bold;">MAKE AN APPOINTMENT</h1>
            <form method="post">
                <input type="text" id="t1" name="NAME" class="input" placeholder="NAME" required>
                <input type="text" id="t1" name="EMAIL" class="input" placeholder="EMAIL" required>
                

                <input type="text" id="t1" name="SERVICES" id="SERVICES" placeholder="TREATMENT" required>
                
                <input type="text" id="t1" name="TIME" class="input" placeholder="TIME" required>
                <input type="password" id="t1" name="PHONE" class="input" placeholder="PHONE" required>
                <input type="date" id="t1" name="DATE" id="date" placeholder="DATE" required>
                
                
                <button onclick="clickMe()" name="login" class="button1">CONFIRM</button>
                
                </form>
					</td>

					<td width ="30%"></td>
				</tr>
				
				<tr height="40px">
					<td colspan="3"> </td>
				</tr>

			</table>


      <!-- <footer align ="center">
                <p1>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p1><br><br>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer> -->
      
</body>
</html>
  
<!-- <div class="container">
<img src="./IMAGE/bg_5.jpg" height="250" width="240">
<img src="./IMAGE/bg_2.jpg" height="250" width="240">
<img src="./IMAGE/bg_3.jpg" height="250" width="240">
<img src="./IMAGE/bg_4.jpg" height="250" width="240"><br><br>
<img src="./IMAGE/bg-1.jpg" height="250" width="240">
<img src="./IMAGE/bg-2.jpg" height="250" width="240">
<img src="./IMAGE/bg-3.jpg" height="250" width="240">
<img src="./IMAGE/bg-4.jpg" height="250" width="240"><br><br>

    
</div> -->

</body>
</html>






















<!-- modify -->

<!-- <html lang="en" >
<head>
  <title >TREATMENTS</title>
  <link rel="stylesheet" href="./CSS/pages.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$result1 = mysqli_query($conn,"SELECT * FROM treatment");

$limit = 15;
$total_rows = mysqli_num_rows($result1);  
$total_pages = ceil ($total_rows / $limit);

if (!isset ($_GET['page']) ) { 
  $page_number = 1;  
} else {  
  $page_number = $_GET['page'];      
}    
$initial_page = ($page_number-1) * $limit; 

$sql = "SELECT * FROM treatment where Status=1 LIMIT  $initial_page,$limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1 id='display' align='center'>
  <tr>
  <th> PRODUCT ID </th>
  <th> PRODUCT NAME </th>
  <th> PRICE </th>
  
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['p_id']."</td><td>".$row['T_NAME']."</td><td>".$row['T_PRICE']."</td>
          
          </tr>";
  }
  
  echo "</table>";
} else {
  echo "0 results";
}

for($page_number = 1; $page_number<= $total_pages; $page_number++) {
  echo '<a href = "displaytreatment.php?page=' . $page_number . '">' . $page_number . ' </a>';  
}

mysqli_close($conn);
?> -->

<!-- modify -->

