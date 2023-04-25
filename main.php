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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        section {
            background-image: url('/bg/10.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            margin: 20px auto;
            transform: translate(-50%, -55%);
            background: transparent;
            backdrop-filter: blur(3px);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box p:first-child {
            margin: 0 0 30px;
            padding: 0;
            color: #2f002c;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #2f002c;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #2f002c;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #2f002c;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #2f002c;
            font-size: 12px;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            font-weight: bold;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 3px
        }

        .login-box a:hover {
            transform: scale(1.1);
            box-shadow: 0 0 24px 0;
        }
    </style>
</head>

<body>

    <section>
        <div class="login-box">
            <p>Login</p>
            <form>
                <div class="user-box">
                    <input required="true" name="" type="email">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input required="true" name="" type="password">
                    <label>Password</label>
                </div>
                <button onclick="clickMe()" href="xyz.php">Submit</button>
            </form>
        </div>
    </section>


</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
</style>
</html>
