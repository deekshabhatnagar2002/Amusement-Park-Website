<?php 
    session_start();

    if(!$_SESSION['Name']){
        header('location: login.php');
    }

?>

<?php
$insert=false;
if(isset($_POST['name'])){
    $server= "localhost";
    $username="root";
    $password="";

    $con= mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die("Connection to the server failed due to ".mysqli_connect_error());
    }

    // echo "Success connecting to the db";

    $name = $_POST['name'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $sql="INSERT INTO `contact`.`contact` (`Name`, `PhNo.`, `Email`, `Msg`, `dt`) VALUES ('$name', '$phno', '$email', '$msg', current_timestamp());";

    // echo $sql;

    if($con->query($sql) == true){
        // echo "Your message has been received";
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Amusement Park</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">

    <style>
        * {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Raleway', sans-serif;
        }

        h1 {
            color: rgb(0, 0, 143);
            font-size: 2.5rem;
            text-decoration: underline;
            text-underline-offset: 20px;
            text-decoration-color: red;
        }

        .sub_heading {
            font-size: 1.5rem;
            color: rgb(155, 37, 37);
        }

        section {
            margin: 20px 5px;
            padding: 10px;
        }

        .coverpicture{
            position: absolute;
            top:0px;
            left: 0px;
        }

        .slideshow img{
            position: absolute;
            top: 0px;
            left: 0px;
            height: 100vh;
            width: 100%;
        }

        #navbar {
            position: fixed;
            top: 0px;
            left: 0px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        #logo img {
            width: 300px;
            height: 195px;
        }

        #navbar div ul li {
            list-style: none;
            display: inline;
        }

        #navbar div ul li a {
            text-decoration: none;
            background-color: black;
            border-radius: 15px;
            margin: 3px 10px;
            padding: 3px 10px;
            font-family: 'Yomogi', cursive;
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }

        #navItem1:hover,
        #navItem5:hover,
        #navItem7:hover,
        #navItem6:hover {
            color: black;
            background-color: rgb(241, 241, 241);
        }

        #water_park:hover {
            color: black;
            background-image: linear-gradient(to bottom right, white, rgb(0, 195, 255), rgb(82, 215, 255));
        }

        #dessert:hover {
            color: black;
            background-image: linear-gradient(to bottom right, white, orange, rgb(146, 114, 54));
        }

        #food:hover {
            color: black;
            background-image: linear-gradient(to bottom right, red, white, red);
        }

        #gap {
            height: 100vh;
        }

        #explore {
            text-align: center;
        }

        #container1 {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        #container1 div {
            width: 300px;
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* background-color: #dfdfdf; */
            box-shadow: 10px 10px 20px black;
            border-radius: 20px;
            padding: 5px;
        }

        #container1 div img {
            border-radius: 20px;
            width: 300px;
            height: 300px;
        }

        .btn {
            text-decoration: none;
            padding: 10px;
            border-radius: 20px;
            color: white;
            background-color: black;
            transition: all 0.4s;
        }

        .btn:hover {
            font-size: 1.1rem;
            border: 2px solid black;
        }

        #essentials {
            text-align: center;
        }

        #container2 {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        #container2 div {
            width: 250px;
            height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #dfdfdf;
            box-shadow: 10px 10px 20px black;
            border-radius: 20px;
        }

        #container2 div img {
            width: 70px;
            height: 70px;
        }

        #contact_us {
            text-align: center;
            margin-bottom: 35px;
        }

        #container3 {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        #container3 div img {
            width: 80px;
            height: 70px;
        }

        #container3 #takingInput {
            text-align: left;
            border: 2px solid black;
            border-radius: 20px;
            background-color: rgb(233, 233, 233);
        }

        #container3 div form input,
        #container3 div form textarea {
            font-size: 1rem;
            border-radius: 20px;
            border: 3px solid black;
            margin: 10px;
            padding: 10px;
        }

        #container3 div form button {
            display: block;
            border-radius: 20px;
            color: white;
            border: 3px solid white;
            background-color: black;
            width: 50%;
            margin: auto;
            padding: 10px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s;
        }

        #container3 div form button:hover {
            color: white;
            background-color: rgb(55, 0, 255);
            border: 3px solid red;
        }

        #book_tickets a {
            text-decoration: none;
            text-align: center;
            font-size: 1rem;
            background-color: red;
            color: yellow;
            padding: 10px;
            border-radius: 20px;
            position: fixed;
            bottom: 30px;
            right: 10px;
            font-family: 'Otomanopee One', sans-serif;
            box-shadow: 0px 5px 10px black;
        }

        footer {
            display: block;
            width: 100%;
            background-color: black;
            color: white;
            position: fixed;
            bottom: 0px;
            left: 0px;
        }
    </style>
</head>

<body>
    
    <div id="coverPicture">
            <div class="slideshow">
                <img src="background1.jpg" alt="">
            </div>
            <div class="slideshow">
                <img src="background3.jpg" alt="">
            </div>
            <div class="slideshow">
                <img src="MiniDessertWorld.jpg" alt="">
            </div>
            <div class="slideshow">
                <img src="background5.jpg" alt="">
            </div>
    </div>
    <nav id="navbar">
        <div id="logo">
            <img src="Logo.png" alt="Funland">
        </div>
        <div>
            <ul>
                <li><a href="#" id="navItem1">Home</a></li>
                <li><a href="water.php" id="water_park">Water Park</a></li>
                <li><a href="activities.php" id="dessert">Mini-Desert World</a></li>
                <li><a href="TheLunchLounge.php" id="food">Food Court</a></li>
                <li><a href="login.php" id="navItem5">Login/ Sign-Up</a></li>
                <li><a href="logout.php" id="navItem7" style="display: none;">Log Out</a></li>
                <li><a href="#contact_us" id="navItem6">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <div id="gap"></div>

    <?php 
        if($_SESSION['login_success'])
        {
            echo "
            <script>
                alert('Welcome, {$_SESSION['Name']}!');
            </script>
            ";
            echo "<script>
                document.getElementById('navItem5').style.display='none';
                document.getElementById('navItem7').style.display='inline';
            </script>";
        }
    ?>

    <section id="explore">
        <h1>Explore</h1>
        <div id="container1">
            <div>
                <img src="WaterPark.jpg" alt="WaterPark">
                <p><a href="water.php" id="water_park" class="btn">Water-Park</a></p>
            </div>
            <div>
                <img src="MiniDessertWorld.jpg" alt="Dessert">
                <p><a href="activities.php" id="dessert" class="btn">Mini-Desert World</a></p>
            </div>
            <div>
                <img src="Food.jpg" alt="FoodCourt">
                <p><a href="TheLunchLounge.php" id="food" class="btn">Food Court</a>
                </p>
            </div>
        </div>
    </section>

    <section id="essentials">
        <h1>Essentials</h1>
        <p class="sub_heading">Here’s the basics to help you plan your trip.</p>
        <div id="container2">
            <div>
                <img src="Timing.png" alt="Timing">
                <p style="font-size: 1.3rem; background-color:yellow; width: 100%;">Timings</p>
                <p>Water-Park<br>
                    10:30HRS - 18:00HRS</p>
                <p></p>
                <p>Mini-Dessert,World<br>
                    10:30HRS - 19:00HRS</p>
            </div>
            <div>
                <img src="Prices.png" alt="Ticket Prices">
                <p style="font-size: 1.3rem; background-color:yellow; width: 100%;">Ticket Prices</p>
                <p>Weekday:<br>
                    Child: ₹ 600/-<br>
                    Adult: ₹ 800/-<br>
                    Sr Citizen: ₹ 700/-
                </p>
                <p>Weekend:<br>
                    Child: ₹ 700/-<br>
                    Adult: ₹ 900/-<br>
                    Sr Citizen: ₹ 800/-
                </p>
            </div>
        </div>
    </section>

    <section id="contact_us">
        <h1>Contact Us</h1>
        <p class="sub_heading">We’d love to help. Send us an enquiry and a member of our<br>
            Guests Services team will get back to you as soon as possible.</p>
        <div id="container3">
            <div>
                <img src="phonelogo.png" alt="Phone">
                <p>+91-8569741236</p>
                <img src="emailLogo.png" alt="E-mail">
                <p>amusementpark@gmail.com</p>
            </div>
            <div id="takingInput">
                <form action="HomePage.php" method="post">
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="text" name="phno" placeholder="Your Phone Number"><br>
                    <input type="text" name="email" placeholder="Your E-mail"><br>
                    <textarea name="msg" id="" cols="50" rows="5" placeholder="Your Message"></textarea><br>
                    <button type="submit">Submit Now</button>
                </form>

                <!-- <?php
                    if($insert == true)
                    {
                        echo "Your message has been received.";
                    }
                ?> -->
            </div>
        </div>
    </section>

    <div id="book_tickets">
        <a href="ticket.php" id="blink">Book Tickets<br><b>NOW</b></a>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("slideshow");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

        let blinkitem = document.getElementById('blink');

        function blink_button() {
            if (blinkitem.style.color == 'yellow') {
                blinkitem.style.color = 'red';
                blinkitem.style.backgroundColor = 'yellow';
            }
            else {
                blinkitem.style.color = 'yellow';
                blinkitem.style.backgroundColor = 'red';
            }
        }

        setInterval(blink_button, 700);
    </script>

    <footer>
        <marquee>Welcome to the official site of <strong>FUNLAND</strong> <span style="color: rgb(255, 140, 140); font-size: 0.7rem;">THE FUN AND ONLY</span>.</marquee>
    </footer>
</body>

</html>