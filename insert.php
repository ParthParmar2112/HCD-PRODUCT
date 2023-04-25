<?php
include("./connect.php"); 


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
    echo "New record created successfully";
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
  <title>REGISTER PAGE</title>
  <link rel="stylesheet" href="./CSS/registration.css">
  <style>
 
    
  </style>
</head>
<body>
<table width="100%" >
			
      <tr height="25px">
        <td colspan="3"> </td>
      </tr>
      
      <tr height="250px">
        <td width ="30%"></td>
        
        <td width ="40%" align="center">
        <h1>REGISTRATION PAGE</h1>
            <form method="post">
                <input type="text" id="t1" name="name" class="input" placeholder="NAME" required>
                <input type="text" id="t1" name="email" class="input" placeholder="EMAIL" required>
                <input type="text" id="t1" name="phone" class="input" placeholder="PHONE NO.." required>
                <input type="text" id="t1" name="uname" class="input" placeholder="USERNAME" required>
                <input type="password" id="t1" name="password" class="input" placeholder="PASSWORD" required>
                <input type="password" id="t1" name="cpassword" class="input" placeholder="CONFIRM PASS" required>
                <input type="password" id="t1" name="city" class="input" placeholder="CITY" required>
                <!-- <input type="city" id="t1" name="city" class="input" placeholder="CITY" required> -->
                
                
                
                <button onclick="clickMe()" name="login" class="button1"> SIGN UP</button>
                
                <li><a class="button1" href = "./login.php" style="text-decoration:none;border:2px solid black;padding:5px;" >back</a></li>
                
                </form>
					</td>

					<td width ="30%"></td>
				</tr>
				
				<tr height="20px">
					<td colspan="3"> </td>
				</tr>

			</table>

      <footer align ="center">
                <p>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer>
      
</body>
</html>