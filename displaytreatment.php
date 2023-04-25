  <html lang="en">
<head>
  <title>TREATMENTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./CSS/pages.css">
  <style>
    body{
    
    background-size:120%;
    margin: 0px;
    padding: 0;
    /* background: #28231f; */
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
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ANJALI BEAUTY SALONE</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="adtreatment.php">HOME</a></li>
      <li><a href="inserttreatment.php">ADD TREATMENT</a></li>
      <li class="active"><a href="displaytreatment.php">UPDATE TREATMENT</a></li>
      <li><a href="display.php">CUSTOMERS INFO</a></li>
      <li><a href="displaycomplain.php">COMPLAINTS</a></li>
      <li><a href="dappointment.php">APPOINTMENTS</a></li>
      <li><a href="bill.php">CUSTOMER BILL</a></li>
      
    </ul>
  </div>
</nav>
</body>
</html>


<?php
include("./connect.php");

$result1 = mysqli_query($conn,"SELECT * FROM treatment");

$limit = 10;
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
  echo "<table border=1 id='display' align='center' >
  <tr>
  <th> p_id </th>
  <th> T_NAME </th>
  <th> T_PRICE </th>
  <th>UPDATE</th>
  
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['p_id']."</td><td>".$row['T_NAME']."</td><td>".$row['T_PRICE']."</td><td>
          <a href= './upadtreatment.php? p_id=".$row['p_id']."' style='text-decoration:none;'>Update</a>
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
?>


<!-- <footer align ="center">
                <p1>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p1><br><br>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer> -->