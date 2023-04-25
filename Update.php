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

$sql = "SELECT * FROM pro";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name =$_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $uname = $_POST["uname"];
  $password = $_POST["password"];
  $city = $_POST["city"];
  $sql = "UPDATE pro SET name='".$name."',email='".$email."',phone='".$phone."',uname='".$uname."',Password='".$password."',city='".$city."' WHERE p_id='".$_GET['p_id']."'";
  if ($conn->query($sql) === TRUE) {
    header('location:Display.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }
}
/*value=<?php echo"UserId"?>*/


$conn->close();
?>
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
  
  $sql1 = mysqli_query($conn,"SELECT * FROM pro WHERE p_id='".$_GET['p_id']."'");
  $row = $sql1->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <link rel="stylesheet" href="./CSS/int.css">

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

<!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
  
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
</nav> -->

</head>
<body>


  
                <form method="post" >
                <input type="text" class="input" id="t1" name="name" placeholder="name" required>
                <input type="text" class="input" id="t1" name="email" placeholder="email" required>
                <input type="text" class="input" id="t1" name="phone" placeholder="phone" required>
                <input type="text" class="input" id="t1" name="uname" placeholder="uname" required>
                <input type="password" id="t1" class="input" name="password" placeholder="new password" required>
                <input type="password"  id="t1" class="input"name="cpassword" placeholder="confirm password" required>
                <input type="city" id="t1" class="input"  name="city" placeholder="city" required>
                <br><br>
                
                
                <button name="btn" class="button1" >UPDATE</button>
</body>
</html>
<?php