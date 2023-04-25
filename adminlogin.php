<?php
session_start();
include './connect.php';
if(isset($_POST["login"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
        
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from pro where email = '$email' and password = '$password' and status='1'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['city'] = $row['city'];
            header("Location: ./adtreatment.php");  
        }  
        else{  
           // header("Location: ./login.php ?error=PASSWORD DOES NOT MATCH");
            echo '<script>alert("PASSWORD DOES NOT MATCH")</script>';
        }     
}
?>
<html>
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
   <title>Login</title>
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
      <a class="navbar-brand" href="DASHBORD.php">ANJALI BEAUTY SALONE</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li><a href="displayt.php">TREATMENT</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <!-- <li><a href="demophotos.php">DEMO PHOTOS</a></li> -->
        <li><a href="contactus.php">CONTACT US </a></li>
        <li><a href="complain.php">ATTECH COMPLAIN</a></li>
        <li><a href="appointment.php">APPOINTMENT</a></li>
        <li class="active"><a href="adminlogin.php">ADMIN LOGIN</a></li>
    </ul>
  </div>
</nav>

        <table width="100%" >
			
				<tr height="40px">
					<td colspan="3"> </td>
				</tr>
				
				<tr height="350px">
					<td width ="30%"></td>
					
					<td width ="40%" align ="center">
					
					<form  method="POST">
							<label for="LOGIN PAGE"><p class="outset"><h1 style="color:black;font-weight:bold;">LOGIN PAGE</h1></p></label>
							<input  type="text" id="t1" name="email" class="input" placeholder="ADMIN EMAIL" >
							
							
							<input  type="password" id="t1" name="password" class="input" placeholder="ADMIN PASSWORD">
							
							<button onclick="clickMe()" name="login" class="button1"> LOGIN </button>&nbsp;
							
							<!-- <a class="u1" href="forget_password.php" class="link">forgot pass</a>  -->
							
							
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
