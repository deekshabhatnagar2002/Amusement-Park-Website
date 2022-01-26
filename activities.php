<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background-image: url("bc3.jpg");
            background-size: cover;
            text-align: center;
            backdrop-filter: blur(1px);
            overflow-x: hidden;
        }

        .navbar {
            position: sticky;
            display: block;
            border: 3px solid black;
            margin: 3px;
            padding: 7px;
            border-radius: 20px;
            background-color: black;
        }

        .navbar::before {
            content: "";
            position: absolute;
            z-index: -1;
            opacity: 0.4;
        }

        .navbar li {
            font-size: 25px;
            display: inline-block;
        }

        .navbar li a {
            color: white;
            text-decoration: none;
            padding: 5px;
        }

        .navbar .btn a{
            text-decoration: none;
            color: black;
        }

        a {
            transition: all 1s ease;
        }

        .wp {
            position: relative;
            right: 330px;
            top: 3px;
        }

        .active {
            position: relative;
            right: 25px;
            font-size: 20px;
        }

        .aff {
            position: relative;
            left: 10px;
            font-size: 20px;
        }

        .afc {
            position: relative;
            left: 40px;
            font-size: 20px;
        }

        .fc {
            position: relative;
            left: 330px;
            top: 4px;
        }

        .navbar li a:hover,
        .navbar li a.active .navbar li a.focus {
            text-decoration: underline;
            color: rgb(95, 93, 93);
            background-color: rgb(252, 223, 228);
        }

        .btn {
            position: relative;
            left: 330px;
            margin: 5px 10px;
            padding: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn:hover {
            color: rgb(131, 127, 127);
            background-color: rgb(240, 195, 180);
        }

        h1 {
            margin-top: 10px;
            font-family: 'Acme', sans-serif;
            font-size: 50px;
            color: red;
        }

        .images {
            border: 15px solid black;
            border-radius: 20px;
            margin-top: 20px;
        }

        .slideshow {
            cursor: pointer;
            position: relative;
            bottom: 60px;
            left: 40px;
            text-align: center;
        }

        .slideshow .slideshow-item {
            position: absolute;
            top: 0;
            left: 0;
            color: #fff;
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
            opacity: 0.9;
        }

        .slideshow:hover .slideshow-item {
            opacity: 0.6;
        }

        .text {
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
            transform: translateY(30px);
            -webkit-transform: translateY(30px);
            position: relative;
            top: 270px;
            background-color: rgb(201, 191, 191);
            width: 1400px;
            margin: 15px;
            opacity: 0.4;
        }

        .slideshow .text {
            font-size: 2.5em;
            text-transform: uppercase;
            opacity: 0;
            transition-delay: 0.2s;
            transition-duration: 0.3s;
        }

        .slideshow:hover .text,
        .slideshow:focus .text {
            opacity: 5;
            transform: translateY(0px);
            -webkit-transform: translateY(0px);
        }

        .heading .heading1 {
            font-family: 'Patua One', cursive;
        }

        .head1 {
            font-family: 'Kaushan Script', cursive;
            text-decoration: underline;
        }

        .head2 {
            font-family: 'Kaushan Script', cursive;
            text-decoration: underline;
        }

        .head3 {
            font-family: 'Kaushan Script', cursive;
            text-decoration: underline;
        }

        .head4 {
            font-family: 'Kaushan Script', cursive;
            text-decoration: underline;
        }

        .header1 {
            font-family: 'Kaushan Script', cursive;
            text-decoration: underline;
        }

        .header2 {
            font-family: 'Kaushan Script', cursive;
            text-decoration: underline;
        }

        ul {
            font-family: 'Courgette', cursive;
            text-decoration: underline;
        }

        .heading {
            display: block;
            background-image: linear-gradient(rgb(175, 67, 175), rgb(111, 243, 140), rgb(255, 255, 62));
            margin: 5px 10px;
            padding: 5px;
            border: 3px solid black;
            border-radius: 5px;
            font-size: 45px;
            position: relative;
            top: 500px;
        }

        .container1 {
            position: relative;
            top: 500px;
            border: 8px solid black;
            margin: 40px;
            margin-bottom: 0px;
            padding: 5px;
            width: 1400px;
            height: 650px;
            border-radius: 10px;
            animation: 10000ms ease-in-out infinite color-change;
        }

        .head1 {
            position: relative;
            left: 510px;
            top: 170px;
            font-size: 40px;
        }

        .container1 ul {
            text-align: center;
            text-decoration: none;
            list-style-type: none;
            vertical-align: middle;
            font-size: 30px;
            font-weight: bold;
        }

        .container1 ul li {
            position: relative;
            bottom: 340px;
            left: 490px;
        }

        .pic {
            border: 5px solid black;
            position: relative;
            right: 200px;
            bottom: 70px;
        }

        .pic1 {
            border: 5px solid black;
            position: relative;
            right: 150px;
            top: 30px;
        }

        .container2 {
            position: relative;
            top: 500px;
            border: 8px solid black;
            margin: 40px;
            margin-bottom: 0px;
            padding: 5px;
            width: 1400px;
            height: 650px;
            border-radius: 10px;
            animation: 10000ms ease-in-out infinite color-change1;
        }

        .head2 {
            position: relative;
            right: 500px;
            top: 160px;
            font-size: 40px;
        }

        .container2 ul {
            text-align: center;
            text-decoration: none;
            list-style-type: none;
            vertical-align: middle;
            font-size: 30px;
            font-weight: bold;
        }

        .container2 ul li {
            position: relative;
            bottom: 350px;
            right: 530px;
        }

        .pic2 {
            border: 5px solid black;
            position: relative;
            left: 670px;
            bottom: 60px;
        }

        .pic3 {
            border: 5px solid black;
            position: relative;
            right: 300px;
            top: 30px;
        }

        .container3 {
            position: relative;
            top: 500px;
            border: 8px solid black;
            margin: 40px;
            margin-bottom: 0px;
            padding: 5px;
            width: 1400px;
            height: 650px;
            border-radius: 10px;
            animation: 10000ms ease-in-out infinite color-change2;
        }

        .head3 {
            position: relative;
            left: 510px;
            top: 130px;
            font-size: 40px;
        }

        .container3 ul {
            text-align: center;
            text-decoration: none;
            list-style-type: none;
            vertical-align: middle;
            font-size: 30px;
            font-weight: bold;
        }

        .container3 ul li {
            position: relative;
            bottom: 380px;
            left: 490px;
        }

        .pic4 {
            border: 5px solid black;
            position: relative;
            right: 200px;
            bottom: 60px;
        }

        .pic5 {
            border: 5px solid black;
            position: relative;
            right: 150px;
            top: 30px;
        }

        .container4 {
            position: relative;
            top: 500px;
            border: 8px solid black;
            margin: 40px;
            margin-bottom: 0px;
            padding: 5px;
            width: 1400px;
            height: 650px;
            border-radius: 10px;
            animation: 10000ms ease-in-out infinite color-change3;
        }

        .head4 {
            position: relative;
            right: 500px;
            top: 160px;
            font-size: 40px;
        }

        .container4 ul {
            text-align: center;
            text-decoration: none;
            list-style-type: none;
            vertical-align: middle;
            font-size: 30px;
            font-weight: bold;
        }

        .container4 ul li {
            position: relative;
            bottom: 350px;
            right: 530px;
        }


        .pic6 {
            border: 5px solid black;
            position: relative;
            left: 670px;
            bottom: 60px;
        }

        .pic7 {
            border: 5px solid black;
            position: relative;
            right: 300px;
            top: 30px;
        }

        .heading1 {
            display: block;
            background-image: linear-gradient(rgb(104, 219, 190), rgb(246, 248, 91), rgb(255, 62, 94));
            margin: 30px 10px;
            padding: 5px;
            border: 3px solid black;
            border-radius: 5px;
            font-size: 45px;
            position: relative;
            top: 500px;
        }

        .box1 {
            position: relative;
            top: 500px;
            border: 8px solid black;
            margin: 40px;
            margin-bottom: 0px;
            padding: 5px;
            width: 1400px;
            height: 650px;
            border-radius: 10px;
            animation: 10000ms ease-in-out infinite color-change4;
        }

        .header1 {
            position: relative;
            left: 510px;
            top: 130px;
            font-size: 40px;
        }

        .box1 ul {
            text-align: center;
            text-decoration: none;
            list-style-type: none;
            vertical-align: middle;
            font-size: 30px;
            font-weight: bold;
        }

        .box1 ul li {
            position: relative;
            bottom: 380px;
            left: 490px;
        }

        .pic8 {
            border: 5px solid black;
            position: relative;
            right: 200px;
            bottom: 60px;
        }

        .pic9 {
            border: 5px solid black;
            position: relative;
            right: 150px;
            top: 30px;
        }

        .box2 {
            position: relative;
            top: 500px;
            border: 8px solid black;
            margin: 40px;
            margin-bottom: 0px;
            padding: 5px;
            width: 1400px;
            height: 650px;
            border-radius: 10px;
            animation: 10000ms ease-in-out infinite color-change5;
        }

        .header2 {
            position: relative;
            right: 500px;
            top: 90px;
            font-size: 40px;
        }

        .box2 ul {
            text-align: center;
            text-decoration: none;
            list-style-type: none;
            vertical-align: middle;
            font-size: 30px;
            font-weight: bold;
        }

        .box2 ul li {
            position: relative;
            bottom: 420px;
            right: 530px;
        }


        .pic10 {
            border: 5px solid black;
            position: relative;
            left: 670px;
            bottom: 60px;
        }

        .pic11 {
            border: 5px solid black;
            position: relative;
            right: 300px;
            top: 30px;
        }

        #book_tickets a {
            text-decoration: none;
            text-align: center;
            font-size: 2rem;
            background-color: red;
            color: yellow;
            padding: 30px;
            border-radius: 20px;
            position: fixed;
            bottom: -700px;
            /* top: 200px; */
            right: 650px;
            /* bottom: 10px;
            left: 10px; */
            font-family: 'Otomanopee One', sans-serif;
            box-shadow: 0px 5px 10px black;
        }


        @keyframes color-change {
            0% {
                background-color: burlywood;
            }

            20% {
                background-color: gold;
            }

            40% {
                background-color: indianred;
            }

            60% {
                background-color: violet;
            }

            80% {
                background-color: orangered;
            }

            100% {
                background-color: burlywood;
            }
        }

        @keyframes color-change1 {
            0% {
                background-color: indianred;
            }

            20% {
                background-color: paleturquoise;
            }

            40% {
                background-color: greenyellow;
            }

            60% {
                background-color: palevioletred;
            }

            80% {
                background-color: rgb(69, 69, 133);
            }

            100% {
                background-color: rgb(245, 216, 179);
            }
        }

        @keyframes color-change2 {
            0% {
                background-color: springgreen;
            }

            20% {
                background-color: paleturquoise;
            }

            40% {
                background-color: orchid;
            }

            60% {
                background-color: rosybrown;
            }

            80% {
                background-color: thistle;
            }

            100% {
                background-color: brown;
            }
        }

        @keyframes color-change3 {
            0% {
                background-color: rgb(146, 136, 153);
            }

            20% {
                background-color: sandybrown;
            }

            40% {
                background-color: skyblue;
            }

            60% {
                background-color: olivedrab;
            }

            80% {
                background-color: plum;
            }

            100% {
                background-color: cyan;
            }
        }

        @keyframes color-change4 {
            0% {
                background-color: magenta;
            }

            20% {
                background-color: mediumpurple;
            }

            40% {
                background-color: darkorange;
            }

            60% {
                background-color: aquamarine;
            }

            80% {
                background-color: lightpink;
            }

            100% {
                background-color: tan;
            }
        }

        @keyframes color-change5 {
            0% {
                background-color: mediumspringgreen;
            }

            20% {
                background-color: powderblue;
            }

            40% {
                background-color: deeppink
            }

            60% {
                background-color: gold;
            }

            80% {
                background-color: lightsalmon;
            }

            100% {
                background-color: peachpuff;
            }
        }
    </style>

</head>

<body>
    <div>
        <nav class="navbar">
            <li><a href="water.php" class="wp">Water Park</a></li>
            <li><a href="#aff_section" class="aff">Activities for Family</a></li>
            <li><a href="#afc_section" class="afc">Activities for Childern</a></li>
            <li><a href="TheLunchLounge.php" class="fc">Food Court</a></li>
            <button class="btn"><a href="HomePage.php">Go back to home page</a></button>
        </nav>
        <h1>Welcome to the Mini-Desert World</h1>
    </div>

    <div class="container">
        <div class="slideshow">
            <div class="slideshow-item">
                <img src="img_21.jpg" alt="" width="1400px" height="600px" class="images">
            </div>
            <div class="text">
                <h2>Destination for whole family entertainment</h2>
            </div>
        </div>

        <div class="slideshow">
            <div class="slideshow-item">
                <img src="img_31.jpg" alt="" width="1400px" height="600px" class="images">
            </div>
            <div class="text">
                <h2>A full day enjoyment</h2>
            </div>
        </div>

        <div class="slideshow">
            <div class="slideshow-item">
                <img src="img_32.jpg" alt="" width="1400px" height="600px" class="images">
            </div>
            <div class="text">
                <h2>Introducing new generation to old culture</h2>
            </div>
        </div>

        <div class="slideshow">
            <div class="slideshow-item">
                <img src="img_17.jpg" alt="" width="1400px" height="600px" class="images">
            </div>
            <div class="text">
                <h2>A best weekend plan to have</h2>
            </div>
        </div>

        <div class="slideshow">
            <div class="slideshow-item">
                <img src="img_29.jpg" alt="" width="1400px" height="600px" class="images">
            </div>
            <div class="text">
                <h2>Fun Activities for whole family</h2>
            </div>
        </div>

        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <div id="aff_section">
            <h1 class="heading">Fun-With-Family</h1>
            <div>
                <div class="container1">
                    <h2 class="head1">Cultural Activities</h2>
                    <img src="img_13.jpg" alt="" width="450px" height="450px" class="pic">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Swanage_Punch_%26_Judy.JPG" alt=""
                        width="450px" height="450px" class="pic1">
                    <ul>
                        <li>DJ Dance</li>
                        <li>Puppet show</li>
                        <li>Dance with dholaks</li>
                    </ul>
                </div>
                <div class="container2">
                    <h2 class="head2">Rides</h2>
                    <img src="img_15.jpg" alt="" width="450px" height="450px" class="pic2">
                    <img src="img_30.jpg" alt="" width="450px" height="450px" class="pic3">
                    <ul>
                        <li>Camel Ride</li>
                        <li>Horse Ride</li>
                        <li>Bullock Cart Ride</li>
                        <li>Boating</li>
                    </ul>
                </div>
                <div class="container3">
                    <h2 class="head3">Group Activities</h2>
                    <img src="img_33.jpg" alt="" width="450px" height="450px" class="pic4">
                    <img src="img_34.jpg" alt="" width="450px" height="450px" class="pic5">
                    <ul>
                        <li>Soccer</li>
                        <li>Volleyball</li>
                        <li>Trampoline</li>
                        <li>Spoon & Lemon Race</li>
                        <li>Musical chair</li>
                        <li>Tambola</li>
                    </ul>
                </div>
                <div class="container4">
                    <h2 class="head4">Relaxation Activities</h2>
                    <img src="img_37.jpg" alt="" width="450px" height="450px" class="pic6">
                    <img src="img_38.jpg" alt="" width="450px" height="450px" class="pic7">
                    <ul>
                        <li>Mehendi</li>
                        <li>Mud Bath</li>
                        <li>Head massage</li>
                        <li>Tube well bath</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="afc_section">
            <h1 class="heading1">Specially for Children</h1>
            <div>
                <div class="box1">
                    <h2 class="header1">Ethnic Activities</h2>
                    <img src="img_35.jpg" alt="" width="450px" height="450px" class="pic8">
                    <img src="img_36.jpg" alt="" width="450px" height="450px" class="pic9">
                    <ul>
                        <li>Gilli Danda</li>
                        <li>Lattoo</li>
                        <li>Archery</li>
                        <li>Kushti</li>
                        <li>Kabaddi</li>
                        <li>Kite Flying</li>
                        <li>Tug of war</li>
                    </ul>
                </div>

                <div class="box2">
                    <h2 class="header2">Adventure Activities</h2>
                    <img src="img_39.jpg" alt="" width="450px" height="450px" class="pic10">
                    <img src="img_40.jpg" alt="" width="450px" height="450px" class="pic11">
                    <ul>
                        <li>Tyre Tunnel</li>
                        <li>Tyre Hooping</li>
                        <li>Balancing Bean</li>
                        <li>Commando Net</li>
                        <li>Double Rope Bridge</li>
                        <li>Zig-Zag Walk</li>
                        <li>Cat Walk</li>
                        <li>Swinging Balance Bean</li>
                        <li>Tyre Balance Bridge</li>
                        <li>Elephant Walk</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="book_tickets">
        <a href="ticket.php" id="blink">Book Tickets<br><b>NOW</b></a>
    </div>

</body>
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

</html>