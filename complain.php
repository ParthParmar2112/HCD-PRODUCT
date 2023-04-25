<?php
include("./connect.php");




if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name =$_POST["name"];
  $email = $_POST["email"];
  $complain = $_POST["complain"];
 


 if($complain == $complain){
  $sql = "INSERT INTO complain ( name,email,complain,status)
  VALUES ('$name','$email','$complain', 1)";
 }
  if ($conn->query($sql) === TRUE) {
    echo "complain added successfully";
  } else {
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
  <title>COMPLAINPAGE</title>
  <link rel="stylesheet" href="./CSS/complain.css">
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
        <li class="active"><a href="complain.php">ATTECH COMPLAIN</a></li>
        <li><a href="appointment.php">APPOINTMENT</a></li>
        <!-- <li><a href="adminlogin.php">ADMIN LOGIN</a></li> -->
    </ul>
  </div>
</nav>


<table width="100%" >
			
      <tr height="100px">
        <td colspan="3"> </td>
      </tr>
      
      <tr height="250px">
        <td width ="30%"></td>
        
        <td width ="40%" align="center">
        <h1>COMPLAIN</h1>
            <form method="post">
                <input type="text" id="t1" name="name" class="input" placeholder="NAME" required>
                <input type="text" id="t1" name="email" class="input" placeholder="EMAIL" required>
                <input type="text" id="t1" name="complain" class="input" placeholder="COMPLAIN" required><br>
                
                
                
                <button onclick="clickMe()" name="login" class="button1">SUBMIT</button>
                
                </form>
					</td>

					<td width ="30%"></td>
				</tr>
				
				<tr height="100px">
					<td colspan="3"> </td>
				</tr>

			</table>
      

      <!-- <footer align ="center">
                <p1>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p1><br><br>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer> -->



</body>
</html>