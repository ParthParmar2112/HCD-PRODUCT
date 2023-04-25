<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("location : ./index.php");
}
?>
<html>
    
	<head>
	<link rel="stylesheet" href="./CSS/dashbord.css">
	</head>
<body>
    <table width="100%" align="center">
        <tr>
            <td align="right"><b><?php echo $_SESSION['name'] ?></b> &nbsp;&nbsp;
            <button class="button1"><a class="u1" href = "xyz.php">HOME</a></button>&nbsp;&nbsp;
            <button class="button1"><a class="u1" href = "logout.php">LOGOUT</a></button></td>
        </tr>
        
    </table><br><br><br>

    <!-- <footer align ="center">
                <p>ANJALI BEAUTY SALONE MANAGEMENT SYSTEM</p>
                MOBILE NO :- 7621049566 <BR> EMAIL ID :- parthparmar75409@gmail.com</p>
            </footer> -->
</body>
</html>



<style>
		table, th, td {
		border:0px solid black;
		}


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