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
        #head {
            height: 50;
            font-size: 2em;
            color: #654236;
            text-align: center;
            background-color: #DB995A;
        }
        #content {
            text-align: center;
            color: #654236;
        }
    </style>
</head>
<body>
    <h1 id="head">What would you like to update:</h1>

    <div id="content">
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

        <form id="Finance" method="POST" action="/PHP/Insert-Process.php">
            <h1>Finance</h1>
            <input type="number" placeholder="Hay Finances" name="finHay" required/> <br>
            <input type="number" placeholder="Cattle Finances" name="finCow" required/> <br>
            <input type="number" placeholder="Repair Finances" name="finRep" required/> <br>
            <input type="text" placeholder="Spring,Fall,Summer,Winter" name="finQuarter" required/> <br>
            <input type="number" placeholder="Year" name="finYear" required/> <br>

            <input type="hidden" value="fin" name="type"/>
            <input type="submit" value="Submit"/>
        </form>

        <form id="Hay" method="POST" action="/PHP/Insert-Process.php">
            <h1>Hay</h1>
            <label for="round">Round Bales</label>
            <input type="radio" name="hayType" id="round" value="Round" required/> <br>

            <label for="square">Square Bales</label>
            <input type="radio" name="hayType" id="square" value="Square" required/> <br>

            <input type="number" placeholder="Current Amount" name="hayCurr" required/> <br>
            <input type="number" placeholder="Sold Amount" name="haySol" required/> <br>
            <input type="number" placeholder="Fed Amount" name="hayFed" required/> <br>

            <input type="hidden" value="hay" name="type"/>
            <input type="submit" value="Submit"/>
        </form>

        <form id="Cattle" method="POST" action="/PHP/Insert-Process.php">
            <h1>Cattle</h1>
            <input type="number" placeholder="Tag Number" name="cowTag" required/> <br>
            <input type="text" placeholder="Name" name="cowName" required/> <br>
            <input type="text" placeholder="Breed" name="cowBreed" required/> <br>
            <input type="text" placeholder="Color" name="cowColor" required/> <br>

            <input type="hidden" value="cow" name="type"/>
            <input type="submit" value="Submit"/>
        </form>

        <form id="Equipment" method="POST" action="/PHP/Insert-Process.php">
            <h1>Equipment</h1>
            <input type="text" placeholder="Type (ex. Tractor)" name="equipType" required/> <br>
            <input type="text" placeholder="Make" name="equipMake" required/> <br>
            <input type="text" placeholder="Model" name="equipModel" required/> <br>
            <input type="number" placeholder="Year" name="equipYear" required/> <br>

            <input type="hidden" value="equip" name="type"/>
            <input type="submit" value="Submit"/>
        </form>
    </div>

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