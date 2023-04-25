<?php
include('./connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =$_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $c_password = $_POST["cpassword"];
    $city = $_POST["city"];


   if($password == $c_password){
    $sql = "INSERT INTO pro ( name,email,phone,uname,password,city,status)
    VALUES ('$name','$email','$phone','$uname','$password','$city' , 1)";
   }
    if ($conn->query($sql) === TRUE) {
      echo "YOUR REGISTRATION IS SUCSESSFULL";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
  }
  
  //$conn->close();
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTRATION PAGE</title>
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
          <h1>REGISTRATION PAGE</h1>
          <form method="post">
            <input type="text" name="name" class="input" placeholder="NAME" required><br><br>
                <input type="text" name="email" class="input" placeholder="EMAILl" required><br><br>
                <input type="text" name="phone" class="input" placeholder="PHONE NO.." required><br><br>
                <input type="text" name="uname" class="input" placeholder="USERNAME" required><br><br>
                <input type="password" name="password" class="input" placeholder="PASSWORD" required><br><br>
                <input type="password" name="cpassword" class="input" placeholder="CONFIRM PASS" required><br><br>
                <input type="city" name="city" class="input" placeholder="CITY" required><br><br>
                
                <button name="btn"class="btn1" >REGISTER</button><br>
                <li><a class="u1" href = "./login.php">back</a></li>
                <li><a class="u1" href = "./display.php">update</a></li>
          </form>
					</td>
					<td width ="30%"></td>
				</tr>
				
				<tr height="100px">
					<td colspan="3"> </td>
				</tr>

			</table>
                
                
                
                

</body>
</html>