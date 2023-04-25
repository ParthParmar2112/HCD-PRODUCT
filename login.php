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
            header("Location: ./DASHBORD.php");  
        }  
        else{  
           // header("Location: ./xyz.php ?error=PASSWORD DOES NOT MATCH");
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
<head>
   <title>Login</title>
   <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>

        <table width="100%" >
			
				<tr height="130px">
					<td colspan="3"> </td>
				</tr>
				
				<tr height="360px">
					<td width ="30%"></td>
					
					<td width ="40%" align ="center">
					
					<form  method="POST">
							<label for="LOGIN PAGE"><p class="outset"><h1>LOGIN PAGE</h1></p></label>
							<input  type="text" id="t1" name="email" class="input" placeholder="email or phone" >
							
							
							<input  type="password" id="t1" name="password" class="input" placeholder="password"><br>
							
							<button onclick="clickMe()" name="login" class="button1" style="text-decoration:none;margin:3px;padding:5px;"> LOGIN </button>
							<button class="button1"><a class="button1" href = "insert.php" style="text-decoration:none;margin:3px;">SIGN UP</a></button>&nbsp;&nbsp;
							<br>
							
							
							
						</form>
					</td>
					
					<td width ="30%"></td>
				</tr>
				
				<tr height="80px">
					<td colspan="3"> </td>
				</tr>

			</table>

            
            <!-- <footer align ="center">
                <p>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer> -->
    
</body>
</html>
