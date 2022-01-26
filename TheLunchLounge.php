<!DOCTYPE html>
<html lang="en">

<head>
    <title>TheLunchLounge</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0px;
            padding: 0px;
            scroll-behavior: smooth;
        }

        .bold {
            font-weight: bold;
        }

        .center {
            text-align: center;
        }

        #heading::before {
            content: '';
            background: url("FoodCourt.jpg") no-repeat center center/cover;
            position: absolute;
            height: 400px;
            width: 100%;
            top: 0px;
            left: 0px;
            z-index: -2;
            opacity: 0.9;
        }

        #heading h1::before {
            content: '';
            background-color: black;
            position: absolute;
            height: 70px;
            width: 445px;
            z-index: -2;
            opacity: 0.7;
            border-radius: 20px;
            border: 3px solid white;
        }

        #heading {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 325px;
        }

        #heading h1 {
            color: white;
            font-size: 3.1rem;
            font-family: 'Open Sans', sans-serif;
        }

        #navbar {
            height: 30px;
            background-color: black;
            text-align: center;
            opacity: 0.8;
            position: sticky;
            top: 0px;
        }

        #navbar ul {
            margin-top: 10px;
        }

        #navbar ul li {
            display: inline;
            padding: 5px 30px;
        }

        #navbar ul li a {
            text-decoration: none;
            font-family: 'Roboto Slab', serif;
        }

        .navbtn {
            padding: 5px;
            border-radius: 10px;
            color: white;
            font-size: 1.3rem;
            transition: all 0.4s ease-in-out;
        }

        .navbtn:hover {
            cursor: pointer;
            background-color: white;
            color: black;
        }

        #container {
            width: 70%;
            margin: auto;
            margin-top: 75px;
            display:flex;
            grid-gap: 1rem;
        }

        .filter {
            width: 22%;
            box-shadow: 5px -5px 20px black;
            font-family: 'Roboto Slab', serif;
        }

        .inFilter {
            display: block;
            margin: 10px;
            padding: 10px;
        }

        .inFilterHeading {
            font-size: 1.5rem;
            color: rgb(182, 0, 182);
        }

        .fooditems {
            width: 78%;
            padding: 20px;
            box-shadow: 5px -5px 20px black;
        }

        .eatables {
            display: flex;
            justify-content: space-evenly;
            flex-direction: row;
            font-family: 'Roboto Slab', serif;
            box-shadow: 5px 5px 10px brown;
        }

        .eatables div {
            padding: 5px 8px;
            margin: 10px;
            text-align: center;
            height: 170px;
            width: 150px;
            transition: all .5s;
        }
        .eatables .items:hover{
            background-image: linear-gradient(to top right,white,pink,red);
            transform: scale(1.15);
            box-shadow: 2px -2px 5px purple;
            border-radius: 20px;
        }

        .eatables div img {
            width: 135px;
            height: 130px;
        }

        .category{
            background-color: black;
            color: white;
            border-radius: 20px;
        }

        .heading {
            margin-top: 75px;
            margin-bottom: 20px;
            font-family: 'Roboto Slab', serif;
            font-size: 2.5rem;
        }

        #book_tickets a{
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

        #backtotop {
            padding: 5px;
            background-color: black;
            border: 2px solid red;
            border-radius: 25px;
            color: white;
            display: block;
            width: fit-content;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: 'Roboto Slab', serif;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section id="heading">
        <h1>The Lunch Lounge</h1>
    </section>
    <nav id="navbar">
        <ul>
            <li><a href="HomePage.php" class="navbtn">Home</a></li>
            <li><a href="water.php" class="navbtn">Water Park</a></li>
            <li><a href="activities.php" class="navbtn">Mini-Dessert World</a></li>
        </ul>
    </nav>

    <section id="container">
        <div class="filter">
            <span class="inFilter inFilterHeading center">Apply Filters? <input type="checkbox" name="" id="applyFilter"></span>
            <div id="filtersToApply" style="display: none;">
                <span class="inFilter">Fast-Food <input type="checkbox" name="" id="fastfoodcheck"></span>
                <span class="inFilter">Dosa<input type="checkbox" name="" id="dosacheck"></span>
                <span class="inFilter">Chinese-Food <input type="checkbox" name="" id="chinesefoodcheck"></span>
                <span class="inFilter">Desserts <input type="checkbox" name="" id="dessertcheck"></span>
                <span class="inFilter">Ice-Creams <input type="checkbox" name="" id="icecreamcheck"></span>
                <span class="inFilter">Cold-Drinks <input type="checkbox" name="" id="colddrinkcheck"></span>
            </div>
        </div>

        <div class="fooditems">
            <div class="eatables" id="fastfoods">
                <div class="category">
                    <img src="FastFoods.jpg" alt="">
                    <p>Fast Foods</p>
                </div>
                <div class="items">
                    <img src="Burgers.jpg" alt="">
                    <p>Burger</p>
                </div>
                <div class="items">
                    <img src="Pizza.jpg" alt="">
                    <p>Pizza</p>
                </div>
                <div class="items">
                    <img src="Momos.jpg" alt="">
                    <p>Momos</p>
                </div>
            </div>
            
            <div class="eatables" id="dosas">
                <div class="category">
                    <img src="Dosa.jpg" alt="">
                    <p>Dosa</p>
                </div>
                <div class="items">
                    <img src="PlainDosa.jpg" alt="">
                    <p>Plain Dosa</p>
                </div>
                <div class="items">
                    <img src="MasalaDosa.jpg" alt="">
                    <p>Masala Dosa</p>
                </div>
                <div class="items">
                    <img src="PaneerDosa.jpg" alt="">
                    <p>Paneer Dosa</p>
                </div>
            </div>

            <div class="eatables" id="chinesefoods">
                <div class="category">
                    <img src="ChineseFood.jpg" alt="">
                    <p>Chinese Food</p>
                </div>
                <div class="items">
                    <img src="Chowmein.jpg" alt="">
                    <p>Chowmein</p>
                </div>
                <div class="items">
                    <img src="ChilliPrawns.jpg" alt="">
                    <p>Chilli Prawns</p>
                </div>
                <div class="items">
                    <img src="VegMunchurian.jpg" alt="">
                    <p>Veg Munchurian</p>
                </div>
            </div>

            <div class="eatables" id="desserts">
                <div class="category">
                    <img src="Desserts.jpg" alt="">
                    <p>Desserts</p>
                </div>
                <div class="items">
                    <img src="Rasgulla.jpg" alt="">
                    <p>Rasgulla</p>
                </div>
                <div class="items">
                    <img src="Gulab_Jamun.jpg" alt="">
                    <p>Gulab_Jamun</p>
                </div>
                <div class="items">
                    <img src="KajuBarfi.jpg" alt="">
                    <p>KajuBarfi</p>
                </div>
            </div>

            <div class="eatables" id="icecreams">
                <div class="category">
                    <img src="Ice Creams.jpg" alt="">
                    <p>Ice-Creams</p>
                </div>
                <div class="items">
                    <img src="ChocolateIceCream.jpg" alt="">
                    <p>Chocolate Ice-Cream</p>
                </div>
                <div class="items">
                    <img src="StrawberryIceCream.jpg" alt="">
                    <p>Straberry Ice-Cream</p>
                </div>
                <div class="items">
                    <img src="VanillaIceCream.jpg" alt="">
                    <p>Vanila Ice-Cream</p>
                </div>
            </div>
            
            <div class="eatables" id="colddrinks">
                <div class="category">
                    <img src="ColdDrinks.png" alt="">
                    <p>Cold-Drinks</p>
                </div>
                <div class="items">
                    <img src="Coca-Cola.jpeg" alt="">
                    <p>Coca Cola</p>
                </div>
                <div class="items">
                    <img src="Pepsi.jpeg" alt="">
                    <p>Pepsi</p>
                </div>
                <div class="items">
                    <img src="Lemonade.jpg" alt="">
                    <p>Lemonade</p>
                </div>
            </div>
        </div>
    </section>

    <div id="book_tickets">
        <a href="ticket.php" id="blink">Book Tickets<br><b>NOW</b></a>
    </div>

    <script>
        let blinkitem=document.getElementById('blink');

        function blink_button()
        {
            if(blinkitem.style.color=='yellow')
            {
                blinkitem.style.color='red';
                blinkitem.style.backgroundColor='yellow';
            }
            else
            {
                blinkitem.style.color='yellow';
                blinkitem.style.backgroundColor='red';
            }
        }

        setInterval(blink_button,700);


        let apply_filter=document.getElementById('applyFilter');
        let fastfoodcheck_status=document.getElementById('fastfoodcheck');
        let dosacheck_status=document.getElementById('dosacheck');
        let chinesefoodcheck_status=document.getElementById('chinesefoodcheck');
        let dessertcheck_status=document.getElementById('dessertcheck');
        let icecreamcheck_status=document.getElementById('icecreamcheck');
        let colddrinkcheck_status=document.getElementById('colddrinkcheck');

        document.getElementById('applyFilter').addEventListener("change", function () {
            // console.log(apply_filter.checked)
            if(apply_filter.checked){
                document.getElementById('filtersToApply').style.display='block';

                document.getElementById('fastfoods').style.display='none';
                document.getElementById('dosas').style.display='none';
                document.getElementById('chinesefoods').style.display='none';
                document.getElementById('desserts').style.display='none';
                document.getElementById('icecreams').style.display='none';
                document.getElementById('colddrinks').style.display='none';

                fastfoodcheck_status.addEventListener("change", function () {
                    if(fastfoodcheck_status.checked){
                        document.getElementById('fastfoods').style.display='flex';
                    }
                    else{
                        document.getElementById('fastfoods').style.display='none';
                    }
                });

                dosacheck_status.addEventListener("change", function () {
                    if(dosacheck_status.checked){
                        document.getElementById('dosas').style.display='flex';
                    }
                    else{
                        document.getElementById('dosas').style.display='none';
                    }
                });

                chinesefoodcheck_status.addEventListener("change", function () {
                    if(chinesefoodcheck_status.checked){
                        document.getElementById('chinesefoods').style.display='flex';
                    }
                    else{
                        document.getElementById('chinesefoods').style.display='none';
                    }
                });

                dessertcheck_status.addEventListener("change", function () {
                    if(dessertcheck_status.checked){
                        document.getElementById('desserts').style.display='flex';
                    }
                    else{
                        document.getElementById('desserts').style.display='none';
                    }
                });

                icecreamcheck_status.addEventListener("change", function () {
                    if(icecreamcheck_status.checked){
                        document.getElementById('icecreams').style.display='flex';
                    }
                    else{
                        document.getElementById('icecreams').style.display='none';
                    }
                });

                colddrinkcheck_status.addEventListener("change", function () {
                    if(colddrinkcheck_status.checked){
                        document.getElementById('colddrinks').style.display='flex';
                    }
                    else{
                        document.getElementById('colddrinks').style.display='none';
                    }
                });
            }
            else{
                document.getElementById('filtersToApply').style.display='none';

                fastfoodcheck_status.checked=false;
                dosacheck_status.checked=false;
                chinesefoodcheck_status.checked=false;
                dessertcheck_status.checked=false;
                icecreamcheck_status.checked=false;
                colddrinkcheck_status.checked=false;

                document.getElementById('fastfoods').style.display='flex';
                document.getElementById('dosas').style.display='flex';
                document.getElementById('chinesefoods').style.display='flex';
                document.getElementById('desserts').style.display='flex';
                document.getElementById('icecreams').style.display='flex';
                document.getElementById('colddrinks').style.display='flex';
            }
        });

    </script>

    <a href="#" id="backtotop">Back To Top</a>
</body>

</html>