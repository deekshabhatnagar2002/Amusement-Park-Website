<?php
    session_start();
?>

<?php
$insert=false;
if(isset($_POST['FName'])){
    $server= "localhost";
    $username="root";
    $password="";

    $con= mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die("Connection to the server failed due to ".mysqli_connect_error());
    }

    // echo "Success connecting to the db";

    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $PNo = $_POST['PNo'];
    $EMail = $_POST['EMail'];
    $Pass = $_POST['Pass'];
    $CPass=$_POST['confirmPass'];
    $emailquery="SELECT * from `practice`.`signup` where `Email`='$EMail';";
    $query=mysqli_query($con, $emailquery);

    $emailcount= mysqli_num_rows($query);

    if($emailcount>0){
        echo "
        <script>
            alert('Email already exists!');
        </script>
        ";
    }
    else{
        if($Pass === $CPass){
            $sql="INSERT INTO `practice`.`signup` (`FName`, `LName`, `PNo`, `Email`, `Password`, `CPassword`, `Dt`) VALUES ('$FName', '$LName', '$PNo', '$EMail', '$Pass', '$CPass',current_timestamp());";
            // echo $sql;
        
            if($con->query($sql) == true){
                $insert=true;
            }
            else{
                echo "ERROR: $sql <br> $con->error";
            }
        }
        else{
            echo "
            <script>
                alert('Password and Confirm Password did not match.');
            </script>
            ";
        }
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');

        body {
            background-image: url("https://images.pexels.com/photos/1076429/pexels-photo-1076429.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
            margin: 0;
        }

        body::after {
            content: " ";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: #000000;
            opacity: 0.5;
            z-index: -1;
        }

        .container {
            display: flex;
            justify-content: center;

        }

        .form {
            display: flex;
            flex-direction: column;
            background-color: black;
            color: #f399a8;
            list-style: none;
            border-radius: 40px;
            border: 10px solid #f08c9c;
            font-family: 'Comfortaa', cursive;
            width: 550px;
            height: 720px;
        }

        .items {
            display: flex;
            justify-content: center;
            padding: 1.5rem;
            font-size: 20px;
            font-weight: bold;
        }

        .items>label {
            padding: 0.5rem 0rem 0rem 1rem;
            flex: 0.5;
        }

        .items>input {
            flex: 0.5;
        }

        .items button {
            height: 40px;
            width: 300px;
            color: #f399a8;
            font-size: 25px;
            background-color: #000000;
            border-radius: 50px;
            border: 3px solid #f399a8;
            cursor: pointer;
        }

        .items button:hover {
            background-color: rgb(42, 104, 219);
            color: cornsilk;
            border: 3px solid #05062b;
        }
        .items span {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            width: 300px;
            color: #f399a8;
            font: 25px Arial, Sans-serif;
            background-color: #000000;
            border-radius: 50px;
            border: 3px solid #f399a8;
            box-sizing: border-box;
            cursor: pointer;
        }

        .items span:hover {
            background-color: red;
            color: cornsilk;
            border: 3px solid #05062b;
        }

        .items p {
            margin-top: 0px;
            font-weight: lighter;
            font-size: 14px;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            overflow-y: hidden;

        }

        #heading {
            text-align: center;
            margin-bottom: 0;
            color: #f399a8;
            font-family: sans-serif;
            background-color: rgb(0, 0, 0);
        }

        .items a {
            color: burlywood;
            text-decoration: none;
        }

        .items a:hover {
            text-decoration: underline;
        }

        .form {
            transition: 0.5s ease transform;
        }

        .form:hover {
            transform: scale(0.9);
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="SignUp.php" method="post">
            <ul class="form">
                <h1 id="heading">SIGN UP</h1>
                <li class="items">
                    <label for="fname">Firstname:</label>
                    <input type="text" id="fname" placeholder="Enter your first name" name="FName" required>
                </li>
                <li class="items">
                    <label for="lname">Lastname:</label>
                    <input type="text" id="lname" placeholder="Enter your last name" name="LName" required>
                </li>
                <li class="items">
                    <label for="phone">Mobile number:</label>
                    <input type="tel" id="phone" placeholder="Enter your mobile number" name="PNo" required>
                </li>
                <li class="items">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" placeholder="Enter your email address" name="EMail" required>
                </li>
                <li class="items">
                    <label for="password">Password:</label>
                    <input type="password" id="password" placeholder="Create password" name="Pass" required>
                </li>
                <li class="items">
                    <label for="retype">Confirm password:</label>
                    <input type="password" id="retype" placeholder="Retype password" name="confirmPass" required>
                </li>
                <label class="check" for="privacy">
                    I agree to Terms of Service, Privacy Policy and Content Policies:
                    <input type="checkbox" id="boxCheck">
                    <span class="privacy"></span>
                </label>
                <li class="items">
                    <span id="nonfuncButton" onclick="displayerror()">Create account</span>
                    <button type="submit" id="funcButton" style="display:none;">Create account</button>
                </li>
                <li class="items">
                    <p>Already have an account?<a href="login.php"> Log in</a></p>
                </li>
            </ul>
        </form>
    </div>
    <script>
        let boxCheck_status = document.getElementById('boxCheck');

        boxCheck.addEventListener("change", function () {
            if (boxCheck_status.checked) {
                document.getElementById('funcButton').style.display = 'block';
                document.getElementById('nonfuncButton').style.display = 'none';
            }
            else {
                document.getElementById('funcButton').style.display = 'none';
                document.getElementById('nonfuncButton').style.display = 'flex';
            }
        });

        function displayerror(){
            alert('Please make sure you have checked the checkbox!');
        }
    </script>
    <?php
            if($insert){
                echo "
                <script>
                    alert('Your acount has been created SUCCESSFULLY.');
                </script>
                ";
            }
        ?>
</body>

</html>