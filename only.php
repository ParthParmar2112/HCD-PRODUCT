
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ABPMS</title>
  
<body>







<?php
include("./connect.php");




if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $NAME =$_POST["NAME"];
  $EMAIL = $_POST["EMAIL"];
  $SERVICES = $_POST["SERVICES"];
  $DATE = $_POST["DATE"];
  $TIME = $_POST["TIME"];
  $PHONE = $_POST["PHONE"];
  

  
  $sql = "INSERT INTO appointment (NAME,EMAIL,SERVICES,DATE,TIME,PHONE,status)
  VALUES ('$NAME','$EMAIL','$SERVICES','$DATE','$TIME','$PHONE',1)";
  
  // if ($conn->query($sql) === TRUE) {
  //   echo "Appointment booked successfully";
  // } else  {
  //   echo "Error: " . $sql . "<br>" . $conn->error;
  // }

}


// Check if there are already 3 appointments for the given date
// You may need to replace the 'appointments.txt' file path with your own appointment file path
// $appointments_data = file("dappointment.php", FILE_IGNORE_NEW_LINES);
// $appointment_count = 1;
foreach ($appointments as $appointment) {
    $appointment_data = explode(",", $appointment);
    if ($appointment_data[0] == $DATE) {
        $appointment_count++;
    }
}

// Check if the appointment can be accepted or not
$is_valid_appointment = true;

if ($appointment_count >= 3) {
    // Cannot accept more than 3 appointments per day
    $is_valid_appointment = false;
} else if (empty($DATE) || empty($TIME) || empty($NAME)) {
    // Appointment details are incomplete
    $is_valid_appointment = false;
} 

// If the appointment is valid, add it to the appointments file
if ($is_valid_appointment) {
    $new_appointment = "$DATE,$TIME,$NAME,$EMAIL,$SERVICES,$PHONE\n";
    file_put_contents("appointments.txt", $new_appointment, FILE_APPEND);
    echo "Appointment for $NAME on $DATE at $TIME has been accepted.";
} else {
    echo "Sorry, the appointment could not be accepted. Please change  your appointment date  and try again.";
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
  <title>MAKE AN APPOINTMENT</title>
  <link rel="stylesheet" href="./CSS/registration.css">
</head>
<body>
<table width="100%" >
			
      <tr height="40px">
        <td colspan="3"> </td>
      </tr>
      
      <tr height="250px">
        <td width ="30%"></td>
        
        <td width ="40%" align="center">
        <h1 style="color:black;font-weight:bold;">MAKE AN APPOINTMENT</h1>
            <form method="post">
                <input type="text" id="t1" name="NAME" class="input" placeholder="NAME" required>
                <input type="text" id="t1" name="EMAIL" class="input" placeholder="EMAIL" required>
                

                <input type="text" id="t1" name="SERVICES" id="SERVICES" placeholder="TREATMENT" required>
                
                <input type="text" id="t1" name="TIME" class="input" placeholder="TIME" required>
                <input type="password" id="t1" name="PHONE" class="input" placeholder="PHONE" required>
                <input type="date" id="t1" name="DATE" id="date" placeholder="DATE" required>
                
                
                <button onclick="clickMe()" name="login" class="button1">CONFIRM</button>
                
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
  
<!-- <div class="container">
<img src="./IMAGE/bg_5.jpg" height="250" width="240">
<img src="./IMAGE/bg_2.jpg" height="250" width="240">
<img src="./IMAGE/bg_3.jpg" height="250" width="240">
<img src="./IMAGE/bg_4.jpg" height="250" width="240"><br><br>
<img src="./IMAGE/bg-1.jpg" height="250" width="240">
<img src="./IMAGE/bg-2.jpg" height="250" width="240">
<img src="./IMAGE/bg-3.jpg" height="250" width="240">
<img src="./IMAGE/bg-4.jpg" height="250" width="240"><br><br>

    
</div> -->

</body>
</html>






















