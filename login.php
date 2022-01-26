<?php 
    session_start();

?>

<?php
$_SESSION['login_success']=false;
$server_name = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server_name, $username, $password);

if(!$con)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['email']))
{
    $Email = $_POST['email'];
    $pass = $_POST['pswd'];

    $email_search="SELECT * from `practice`.`signup` where Email='$Email'";

    $emailquery=mysqli_query($con,$email_search);

    $email_count=mysqli_num_rows($emailquery);

    if($email_count){
        $email_pass=mysqli_fetch_assoc($emailquery);
        $savedPassword=$email_pass['Password'];
        
        $_SESSION['Name']=$email_pass['FName'];

        if($pass === $savedPassword)
        {
            echo "
            <script>
            alert('Login Successful');
            </script>
            ";

            header('location:HomePage.php');
            $_SESSION['login_success']=true;
        }
        else{
            echo "
            <script>
                alert('Incorrect Password');
            </script>
            ";
        }

    }
    else{
        echo "
        <script>
            alert('Email does not exist!');
        </script>
        ";
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-image: url('bc6.jpg');
            background-size: 1700px 900px;
            font-family: sans-serif;
        }

        .loginbox {
            width: 420px;
            height: 520px;
            color: white;
            background: black;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            border-radius: 10px;
            padding: 80px 50px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: 160px;
        }

        h1 {
            margin: 0px;
            height: 20px;
            text-align: center;
            font-size: 30px;
        }

        .heading {
            position: relative;
            bottom: 10px;
            font-family: 'Merriweather', serif;
        }

        label {
            font-size: 17px;
            position: relative;
            top: 40px;
            padding-right: 30px;
            font-weight: bold;
        }

        #email {
            position: relative;
            top: 35px;
            width: 300px;
            height: 25px;
            border: none;
            border-bottom: 1px solid white;
            background: transparent;
            outline: none;
            color: white;
            font-size: 15px;
        }

        #pswd {
            position: relative;
            top: 35px;
            width: 300px;
            height: 25px;
            border: none;
            border-bottom: 1px solid white;
            background: transparent;
            outline: none;
            color: white;
            font-size: 15px;
        }

        label[for="show"] {
            position: relative;
            top: 42px;
            left: 20px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="checkbox"] {
            position: relative;
            top: 43.5px;
            right: 140px;
            cursor: pointer;
        }

        label[for="show"]:hover {
            color: burlywood;
        }

        #login {
            position: relative;
            top: 75px;
            left: 85px;
            right: 30px;
            width: 180px;
            height: 40px;
            border-radius: 20px;
            padding: 6px;
            padding-left: 55px;
            padding-right: 55px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: red;
            border: 2px solid black;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        #login:hover {
            background-color: white;
            color: black;
        }

        a {
            position: relative;
            /* top: 75px; */
            color: white;
            text-decoration: none;
        }

        #fp {
            position: relative;
            left: 100px;
            top: 100px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        #account {
            position: relative;
            left: 80px;
            top: 85px;
            font-size: 14px;
            font-weight: bold;
        }

        a:hover {
            color: rgb(250, 201, 159);
        }

        #create {
            position: relative;
            display: block;
            left: 60px;
            text-align: center;
            right: 200px;
            top: 10px;
            bottom: 60px;
            margin-top: 90px;
            width: 200px;
            height: 25px;
            border-radius: 23px;
            padding: 0px;
            /* padding-left: 4px; */
            /* padding-right: 4px; */
            padding-top: 10px;
            padding-bottom: 2px;
            /* padding-top: 12px; */
            border: 2px solid black;
            background-color: red;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        #create:hover {
            background-color: white;
            color: black;
        }
    </style>

</head>

<body>
    <div class="loginbox">
        <img src="avatar.jpg" class="avatar" alt="">
        <h1 class="heading">Login</h1>
        <form action="login.php" method="POST">
            <label for="emailorpno">Email or Phone No.</label>
            <br> <br>
            <input type="text" placeholder="Enter your email" id="email" name="email">
            <br> <br>

            <label for="pswd">Password</label>
            <br> <br>
            <input type="password" placeholder="Enter your password" id="pswd" name="pswd">
            <label for="show">Show password</label>
            <input type="checkbox" onclick="myFunction()" id="show">

            <input type="submit" value="Login" id="login" name="login">
            <!-- <a href="Amusement Park/HomePage.html" id="login" name="save">Login</a> -->
            <!-- <br>

            <a href="#" id="fp">Forgot password?</a>

            <br> -->
            <br>
            <!-- <a href="#" id="account">Didn't have an account?</a> -->
            <p id="account">Didn't have an account?</p>
            <!-- <input type="submit" name="" value="Create Account" id="create"> -->
            <a href="Signup.php" id="create" name="create">Create Account</a>
        </form>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("pswd");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>