<html>
<head>
    <link rel="stylesheet" href="./../../CSS/MainPage.css" />
    <style>
        #finance
        {
            display: none;
        }
        #Hay
        {
           display: none; 
        }
        #Cattle
        {
           display: none; 
        }
        #Equipment
        {
           display: none; 
        }
    </style>
</head>
<body>
    <h1>What would you like to update:</h1>
    
    <form>
        <label for="finBut">Finance</label>
        <input type="radio" id="finBut" onclick="openFinance()" name="forms" />
        <br>
        <label for="hayBut">Hay</label>
        <input type="radio" id="hayBut" onclick="openHay()" name="forms" />
        <br>
        <label for="cattleBut">Cattle</label>
        <input type="radio" id="cattleBut" onclick="openCattle()" name="forms" />
        <br>
        <label for="equipBut">Equipment</label>
        <input type="radio" id="equipBut" onclick="openEquipment()" name="forms" />
    </form>

    <form id="Finance" method=POST action="/PHP/Insert-Process.php">
        <label name="type">Finance</label> <br>
        <input type="text" name="fname"/> <br>
        <input type="text"/> <br>
        <input type="text"/> <br>
        <input type="text"/> <br>
        <input type="text"/>
        <input type="submit" value="Submit"/>
    </form>

    <form id="Hay" action="/PHP/Insert-Process.php">
        <h1>Hay</h1>
        <input type="text"/> <br>
        <input type="text"/> <br>
        <input type="text"/> <br>
        <input type="text"/>
        <input type="submit"/>
    </form>

    <form id="Cattle" action="/PHP/Insert-Process.php">
        <h1>Cattle</h1>
        <input type="text"/> <br>
        <input type="text"/> <br>
        <input type="text"/> <br>
        <input type="text"/>
        <input type="submit"/>
    </form>

    <form id="Equipment" action="/PHP/Insert-Process.php">
        <h1>Equipment</h1>
        <input type="text"/> <br>
        <input type="text"/> <br>
        <input type="text"/> <br>
        <input type="text"/>
        <input type="submit"/>
    </form>

    <script>
        function openFinance() {
            document.getElementById("Finance").style.display = "block";
            document.getElementById("Hay").style.display = "none";
            document.getElementById("Cattle").style.display = "none";
            document.getElementById("Equipment").style.display = "none";
        }

        function openHay() {
            document.getElementById("Finance").style.display = "none";
            document.getElementById("Hay").style.display = "block";
            document.getElementById("Cattle").style.display = "none";
            document.getElementById("Equipment").style.display = "none";
        }

        function openCattle() {
            document.getElementById("Finance").style.display = "none";
            document.getElementById("Hay").style.display = "none";
            document.getElementById("Cattle").style.display = "block";
            document.getElementById("Equipment").style.display = "none";
        }

        function openEquipment() {
            document.getElementById("Finance").style.display = "none";
            document.getElementById("Hay").style.display = "none";
            document.getElementById("Cattle").style.display = "none";
            document.getElementById("Equipment").style.display = "block";
        }
    </script>
</body>
</html>