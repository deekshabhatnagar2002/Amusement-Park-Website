<!DOCTYPE html>
<html lang="en">
<head>
    <title>Water Park </title>
    <link rel="stylesheet" href="water.css">  
</head>
<body>
    <div class="container">
        <div class="header">
            <img id="logo" src="https://i.pinimg.com/originals/2a/0d/d7/2a0dd79cf1372716a4e3254e4861d9f3.png">
            <a href="HomePage.php"><button id="home">Back to the Home page</button></a>
            <a href="activities.php"><button id="other">Mini-Desert World</button></a>
        </div>
        <div class="video">
            <h1 id="fun">ULTIMATE FUN IS HERE!</h1>
            <video id="view" autoplay loop muted src="water.mp4"></video>
        </div>
        <div class="activities">
            <h1 id="explore">Rides and Attractions</h1>
            <div class="rides">
                <div class="deep"><h2>Deep see adventure</h2><p>It is a water adventure where you get to enjoy the longest tunnel style.</p></div>
                <div class="rapid"><h2>Rapid Racer</h2><p>It is a water adventure where you get to glide down into the water with a group.</p></div>
                <div class="wave"><h2>Wave Pool</h2><p>It is a water adventure where you get to experience a beach like life.</p></div>
                <div class="raft"><h2>Raft Ride</h2><p>It is a water adventure where you plunge into water twirling around in a huge slide.</p></div>
                <div class="boom"><h2>Boomerango</h2><p>It is a water adventure where you enjoy various turns and bumps before hitting the water.</p></div>
                <div class="cart"><h2>Cart Smashers</h2><p>The Cart Smasher is an adventure ride for adults where you enjoy hitting on opponent cart.</p></div>
                <div class="big"><h2>Big Beat</h2><p>This ride is for adults who love adventure games. The ride will swirls you around in the air to give you the much needed adrenaline rush.</p></div>
                <div class="lake"><h2>Lake Wow</h2><p>This adventurous activity allows both adults and kids to enjoy a memorable boat ride in a man-made lake.</p></div>
            </div>
        </div>
        <div class="care">
            <h1>We care for you!</h1>
            <h2>Please follow the safety measures given below:</h2>
            <ul>
                <li>Be aware of the depth of water before entering a pool.</li>
                <li>Prolonged exposure to wave action may result in fatigue. Exercise caution in deep water.</li>
                <li>Please don’t swallow the pool water.</li>
                <li>Please don’t swim when you have diarrhoea.</li>
                <li>Please wash thoroughly before swimming.</li>
                <li>Do not run, dive, stand, kneel, rotate or stop in the slide.</li>
                <li>Pregnant women, heart patients, people who have undergone surgeries in the recent past, people with high blood pressure <br>and those prone to epilepsy are advised to avoid fast/high-thrill rides.</li>
            </ul>
        </div>
        <!-- <div class="ticket">
            <button>Book your Tickets now!</button>
        </div> -->
        <div id="book_tickets">
            <a href="ticket.php" id="blink">Book Tickets<br><b>NOW</b></a>
        </div>
    
        <script>
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
    </div>
</body>
</html>