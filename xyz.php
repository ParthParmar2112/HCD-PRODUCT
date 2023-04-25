



<!DOCTYPE html>
<html lang="en">

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
<head>
  <title>ABPMS</title>
  <link rel="stylesheet" href="./CSS/login.css">
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
      <a class="navbar-brand" class="active" href="#">ANJALI BEAUTY SALONE</a>
    </div>
    <ul class="nav navbar-nav">
    
      <li ><a href="displayt.php">TREATMENT</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <!-- <li><a href="demophotos.php">DEMO PHOTOS</a></li>
        <li><a href="contactus.php">CONTACT US </a></li> -->
        <li><a href="complain.php">ATTECH COMPLAIN</a></li>
        <li><a href="appointment.php">APPOINTMENT</a></li>
        <!-- <li><a href="adminlogin.php">ADMIN LOGIN</a></li> -->
        
    </ul>
  </div>
</nav>

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




if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $NAME =$_POST["NAME"];
  $EMAIL = $_POST["EMAIL"];
  $SERVICES = $_POST["SERVICES"];
  $DATE = $_POST["DATE"];
  $TIME = $_POST["TIME"];
  $PHONE = $_POST["PHONE"];
  


 if($PHONE == $PHONE){
  $sql = "INSERT INTO appointment ( NAME,EMAIL,SERVICES,DATE,TIME,PHONE,status)
  VALUES (' $NAME','$EMAIL','$SERVICES','$DATE','$TIME','$PHONE' , 1)";
 }
  if ($conn->query($sql) === TRUE) {
    echo "NEW APPOINTMENT CREATED SUCSESSFULLY";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

  
//$conn->close();
mysqli_close($conn);

?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>MAKE AN APPOINTMENT</title>
  <link rel="stylesheet" href="./CSS/registration.css">
</head>
<body>
<table width="100%" >
			
      <tr height="100px">
        <td colspan="3"> </td>
      </tr>
      
      <tr height="250px">
        <td width ="30%"></td>
        
        <td width ="40%" align="center">
        <h1>MAKE AN APPOINTMENT</h1>
            <form method="post">
                <input type="text" name="NAME" class="input" placeholder="NAME" required><br><br>
                <input type="text" name="EMAIL" class="input" placeholder="EMAIL" required><br><br>
                <div class="row">    
      
      <div class="txt2" class="input">    
        <select id="treatment" name="treatment" class="input">    
          <option value="none">SELECT TREATMENT</option>    
          <option value="1">O3 FACIAL</option>    
          <option value="2">FRUIT FACIAL</option>    
          <option value="3">CHARCOAL FACIAL</option>    
          <option value="4">MANICURE</option>    
          <option value="6">HAIRCUT</option> 
          <option value="7">U-SHAPE HAIRCUT</option>
          <option value="8">LAYER HAIRCUT</option>
          <option value="9">SPA</option> 
          <option value="10">MACKUP</option>
          <option value="11">NAIL ART</option>
        </select>    
      </div>
</div>  <br>  
    


                <input type="date" name="DATE" id="date" placeholder="DATE" required><br><br>
                <input type="text" name="TIME" class="input" placeholder="TIME" required><br><br>
                <input type="password" name="PHONE" class="input" placeholder="PHONE" required><br><br>
                
                
                <button name="btn" class="button1">CONFIRM</button>
                
                </form>
					</td>

					<td width ="30%"></td>
				</tr>
				
				<tr height="100px">
					<td colspan="3"> </td>
				</tr>

			</table>


      
      
</body>
</html> -->
  
<div class="container">
<img src="./IMAGE/bg_5.jpg" height="300" width="240">
<img src="./IMAGE/bg_2.jpg" height="300" width="240">
<img src="./IMAGE/bg_3.jpg" height="300" width="240">
<img src="./IMAGE/bg_4.jpg" height="300" width="240"><br><br>
<img src="./IMAGE/bg-1.jpg" height="300" width="240">
<img src="./IMAGE/bg-2.jpg" height="300" width="240">
<img src="./IMAGE/bg-3.jpg" height="300" width="240">
<img src="./IMAGE/bg-4.jpg" height="300" width="240"><br>

    
</div>

<!-- <footer align ="center">
                <p>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer> -->

</body>
</html>
