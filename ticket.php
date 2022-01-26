<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');

*{
    font-family: 'Acme', sans-serif;

}
#weekend{
    text-align: center;
    color: red;
    display: none;
}
.header{
    display: flex;
    justify-content: center;
    margin-top: 0px;
}
input[type="date"]{
    height:25px;
    margin-top: 30px;
    margin-left:4px;
}
.container #heading{
    text-align: center;
    font-size: 40px;
}
#man{
    height:45px;
}
#theme{
    height:40px;
}
.container h2{
    text-align: center;
    font-size: 30px;
}
.category{
    display: flex;
    justify-content:center;
    width:100%;
}
.category h2{
    margin:25px;
    padding:10px;
}
.category p{
    font-size: 25px;
    margin:25px;
    padding:10px;
}
.category input{
    margin-left:35px;
}
.child{
    width:100%;
    margin: 0px 30px 30px 0px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.685);
}
.adult{
    width:100%;
    margin: 0px 30px 30px 0px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.685);
}
.senior{
    width:100%;
    margin: 0px 30px 30px 0px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.685);
}
.footer{
    text-align: center;
    font-size: 30px;
    font-weight: bold;
} 

.done{
    text-align: center;
}
button {
    background-image: linear-gradient(to right, #1A2980 0%, #26D0CE  51%, #1A2980  100%);
    font-weight: bold;
    font-size: 25px;
    padding: 15px 45px;
    text-align: center;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;            
    box-shadow: 0 0 20px rgba(6, 23, 99, 0.842);
    border:none;
    border-radius: 10px;
    cursor: pointer;
 }

 button:hover {
   background-position: right center;
   color: #fff;
   }

    </style>
</head>

<body>
    <div class="container">

        <h1 id="heading"><img id="man" src="https://img.icons8.com/bubbles/50/000000/man-cinema-ticket.png" />Online
            Ticket Booking<img id="theme" src="https://img.icons8.com/ios-filled/50/4a90e2/theme-park.png" /></h1>
        <div class="header">
            <h2>Ticket booking for date:</h2><input type="date" id="bookingDate">
        </div>
        <h1 id="weekend">Weekend</h1>
        <div class="category">

            <div class="child">
                <h2>For children above 3 years</h2>
                <p>Price per ticket: ₹ <span id="childTicket">600</span></p>
                <p>No. of Children:</p>
                <input type="number" id="childcount">
                <p>Total: ₹ <span id="childTotal">_______</span></p>
            </div>
            <div class="adult">
                <h2>For Adults</h2>
                <p>Price per ticket: ₹ <span id="adultTicket">800</span></p>
                <p>No. of Adults:</p>
                <input type="number" id="adultcount">
                <p>Total: ₹ <span id="adultTotal">_______</span></p>
            </div>
            <div class="senior">
                <h2>For Senior citizens</h2>
                <p>Price per ticket: ₹ <span id="srCitizenTicket">700</span></p>
                <p>No. of Sr citizens:</p>
                <input type="number" id="srCitizencount">
                <p>Total: ₹ <span id="srCitizenTotal">_______</span></p>
            </div>
        </div>
        <div class="done">
            <button onclick="grandTotal()">Show Total</button>
        </div>
        <div class="footer">
            <p>Grand Total: ₹ <span id="GrandTotal">_______</span></p>
            <button onclick="thankYouMsg()">Pay Now</button>
        </div>
    </div>

    <script>
        let childTicketPrice;
        let adultTicketPrice;
        let srCitizenTicketPrice;
        let countchild;
        let countadult;
        let countsrCitizen;
        let total = 0;
        
        document.getElementById("bookingDate").addEventListener("change", function () {
            let input = this.value;
            let dateEntered = new Date(input);
            console.log(input);
            console.log(dateEntered);
            let day = dateEntered.getDay();
            // console.log(day);
            let weekendHeading = document.getElementById("weekend");

            if (day == 5 || day == 6 || day == 0) {
                childTicketPrice = 700;
                adultTicketPrice = 900;
                srCitizenTicketPrice = 800;
                weekendHeading.style.display = 'block';
                document.getElementById('childTicket').innerText = `${childTicketPrice}`;
                document.getElementById('adultTicket').innerText = `${adultTicketPrice}`;
                document.getElementById('srCitizenTicket').innerText = `${srCitizenTicketPrice}`;
            }
            else {
                childTicketPrice = 600;
                adultTicketPrice = 800;
                srCitizenTicketPrice = 700;
                weekendHeading.style.display = 'none';
                document.getElementById('childTicket').innerText = `${childTicketPrice}`;
                document.getElementById('adultTicket').innerText = `${adultTicketPrice}`;
                document.getElementById('srCitizenTicket').innerText = `${srCitizenTicketPrice}`;
            }
        });

        document.getElementById("childcount").addEventListener("change", function () {
            countchild = this.value;
            document.getElementById('childTotal').innerText = `${childTicketPrice * countchild}`;
        });

        document.getElementById("adultcount").addEventListener("change", function () {
            countadult = this.value;
            document.getElementById('adultTotal').innerText = `${adultTicketPrice * countadult}`;
        });
        document.getElementById("srCitizencount").addEventListener("change", function () {
            countsrCitizen = this.value;
            document.getElementById('srCitizenTotal').innerText = `${srCitizenTicketPrice * countsrCitizen}`;
        });

        function grandTotal() {
            total = childTicketPrice * countchild + adultTicketPrice * countadult + srCitizenTicketPrice * countsrCitizen;
            document.getElementById('GrandTotal').innerText = `${total}`;
        }
        function thankYouMsg() {
            alert('Thank you for purchasing the tickets. Have a happy and safe visit!');
        }
    </script>
</body>

</html>