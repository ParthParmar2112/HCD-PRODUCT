<!-- 
include("./connect.php");


$sql = "SELECT customers.name, orders.order_date, orders.order_amount
        FROM customers
        JOIN orders ON customers.id = orders.customer_id";


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"]. " - Order Date: " . $row["order_date"]. " - Order Amount: " . $row["order_amount"]. "<br>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn); -->




















































<!DOCTYPE html>
<html lang="en">
<head>
<style>
   table, th, td {
      background-color : #ADD8E6;
      height : 50px;
      width : 20%;
    }
    body {
          background-image : url("./image/img2.jpg"); 
          
          background-repeat : no-repeat ,repeat;
          background-size: 1800px 800px;
    }
    
  </style>
  <title>MSMS/Bills</title>
</head>
<body>
<p><h1 align="center">BEAUTY</h1></p>
<p><h2 align="center">Bills</h2></p>
  <div align="center">
<?php
include("./connect.php"); 

$sql = "SELECT * FROM treatment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1 >
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
  
  echo"<tr>
  <td> <a href= 'pdf.php?' >Print</a></td>
  </tr>";
} else {
  echo "0 results";
}



mysqli_close($conn);
?>
</div>
</body>
</html>

<footer align ="center">
                <p3>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p3>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer>























































            <html lang="en">
<head>
  <title>TREATMENTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./CSS/pages.css">
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
      <li><a href="displaytreatment.php">UPDATE TREATMENT</a></li>
      <li><a href="display.php">CUSTOMERS INFO</a></li>
      <li><a href="displaycomplain.php">COMPLAINTS</a></li>
      <li><a href="dappointment.php">APPOINTMENTS</a></li>
      <li class="active"><a href="bill.php">CUSTOMER BILL</a></li>
      
    </ul>
  </div>
</nav>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
<!-- <style>
   table, th, td {
      background-color : #ADD8E6;
      height : 50px;
      width : 20%;
    }
    body {
          background-image : url("./image/img2.jpg"); 
          
          background-repeat : no-repeat ,repeat;
          background-size: 1800px 800px;
    }
    
  </style> -->
  <title>MSMS/Bills</title>
</head>
<body>
<p><h1 align="center">BEAUTY</h1></p>
<p><h2 align="center">Bills</h2></p>
  <div align="center">
<?php
include("./connect.php");





// mysqli_close($conn);

if ($result->num_rows > 0) {
  echo "<table border=1 >
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
  
  echo"<tr>
  <td> <a href= 'pdf.php?' >Print</a></td>
  </tr>";
} else {
  echo "0 results";
}



mysqli_close($conn);
?>
</div>
</body>
</html>

<footer align ="center">
                <p3>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p3>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer>