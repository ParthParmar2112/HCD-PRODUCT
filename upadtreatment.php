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

$sql = "SELECT * FROM treatment";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $T_NAME =$_POST["T_NAME"];
  $T_PRICE = $_POST["T_PRICE"];
  
  $sql = "UPDATE treatment SET T_NAME='".$T_NAME."',T_PRICE='".$T_PRICE."' WHERE p_id='".$_GET['p_id']."'";
  if ($conn->query($sql) === TRUE) {
    header('location:displaytreatment.php');
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
  
  $sql1 = mysqli_query($conn,"SELECT * FROM treatment WHERE p_id='".$_GET['p_id']."'");
  $row = $sql1->fetch_assoc();
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
    <title>Update</title>
    <link rel="stylesheet" href="./CSS/registration.css">
</head>
<body>

<table width="100%" >
			
				<tr height="130px">
					<td colspan="3"><marquee behavior="scroll" scrollamount="15"><h1 id="loginh1">UPDATE TRATEMENT PRICE</h1></marquee> </td>
				</tr>
				
				<tr height="360px">
					<td width ="30%"></td>
					
					<td width ="40%" align ="center">
					
					<form method="post" >
                <input type="text" id="t1" name="T_NAME" placeholder="T_NAME" required><br>
                <input type="text" id="t1" name="T_PRICE" placeholder="T_PRICE" required><br>
                
                <button name="btn" class="button1">UPDATE</button>
							<br>
						</form>
					</td>
					
					<td width ="30%"></td>
				</tr>
				
				<tr height="80px">
					<td colspan="3"> </td>
				</tr>

			</table>

</body>
</html>
<!-- <footer align ="center">
                <p3>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p3><br>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer> -->
