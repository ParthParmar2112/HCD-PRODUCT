<?php
include("./connect.php");




if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $T_NAME =$_POST["T_NAME"];
  $T_PRICE = $_POST["T_PRICE"];
 

 if($T_PRICE == $T_PRICE){
  $sql = "INSERT INTO treatment ( T_NAME,T_PRICE,status)
  VALUES ('$T_NAME','$T_PRICE', 1)";
 }
  if ($conn->query($sql) === TRUE) {
    echo "NEW TREATMENT ADDED SUCSESSFULLY ";
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
  <title>TREATMENT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./CSS/int.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ANJALI BEAUTY SALONE</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="adtreatment.php">HOME</a></li>
      <li class="active"><a href="inserttreatment.php">ADD TREATMENT</a></li>
      <li><a href="displaytreatment.php">UPDATE TREATMENT</a></li>
      <li><a href="display.php">CUSTOMERS INFO</a></li>
      <li><a href="displaycomplain.php">COMPLAINTS</a></li>
      <li><a href="dappointment.php">APPOINTMENTS</a></li>
      <li><a href="bill.php">CUSTOMER BILL</a></li>
      
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
        <h1 style="color:black;font-weight:bold;">ADD TREATMENT</h1>
            <form method="post">
                <input type="text" id="t1" name="T_NAME" class="input" placeholder="T_NAME" required><br>
                <input type="text" id="t1" name="T_PRICE" class="input" placeholder="T_PRICE" required><br>
                
                
                
                <button onclick="clickMe()" name="login" class="button1">INSERT TREATMENT</button>
                
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