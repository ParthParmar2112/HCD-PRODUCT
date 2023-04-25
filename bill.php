<!DOCTYPE html>
<style>
    body{
    
    background-size:120%;
    margin: 0px;
    padding: 0;
    background: #28231f;
    text-align: center;
      background-size:cover;
    
    background-image: url("./IMAGE/bg-3.jpg");
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
  <title >TREATMENTS</title>
  <link rel="stylesheet" href="./CSS/pages.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>TOTAL BILL AMMOUNT</title>
</head>
  <style>
    .button1{
    background-color: aqua;
    color: red;
    font-size: larger;
    font-weight: bolder;
}
    .button1:hover{
    background-color: rgb(241, 241, 139);
    color: green;
    font-size: large;
    font-weight: bolder;
}
  </style>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="DASHBORD.php">ANJALI BEAUTY SALONE</a>
    </div>
    <ul class="nav navbar-nav">
      
    <li ><a href="#">HOME</a></li>
      <li ><a href="inserttreatment.php">ADD TREATMENT</a></li>
      <li><a href="displaytreatment.php">UPDATE TREATMENT</a></li>
      <li><a href="display.php">CUSTOMERS INFO</a></li>
      <li><a href="displaycomplain.php">COMPLAINTS</a></li>
      <li><a href="dappointment.php">APPOINTMENTS</a></li>
      
        <li class="active"><a href="bill.php">CUSTOMER BILL</a></li>
    </ul>
  </div>
</nav>



</body>







<?php
include("./connect.php");

// Define the name of the row you want to retrieve
$row_name = "sibu";

// Create a SQL query to retrieve the row with the specified name
$sql = "SELECT * FROM appointment WHERE NAME = '$row_name'";

// Execute the query and store the result
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["p_id"] . "<br>";
        echo "Name: " . $row["NAME"] . "<br>";
        echo "Email: " . $row["EMAIL"] . "<br>";
        echo "SERVICES: " . $row["SERVICES"] . "<br>";
        echo "DATE: " . $row["DATE"] . "<br>";
        // Add additional fields as needed
    }
    echo "<tr>
         <td>
            <form action='pdf.php'>
               <button type='submit' class='button1' style='margin:20px;width:100px;'>Print</button>
            </form>
         </td>
      </tr>";
} else {
    echo "No rows found.";
}

// Close the database connection
mysqli_close($conn);
?>





</div>
</body>
</html>

<!-- <footer align ="center">
                <p1>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p1><br><br>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer> -->
















            <!-- <?php
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

$sql = "SELECT * FROM treatment";
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
    echo "<tr><td>".$row['p_id']."</td>
    <td>".$row['T_NAME']."</td>
    <td>".$row['T_PRICE']."</td>
    </tr>";
    
  }
  
  echo "</table>";
  
  echo "<tr>
         <td>
            <form action='pdf.php'>
               <button type='submit' class='button1' style='margin:20px;width:100px;'>Print</button>
            </form>
         </td>
      </tr>";
} else {
  echo "0 results";
}



mysqli_close($conn);
?> -->