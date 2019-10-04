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

    <form id="Finance" method="POST" action="/PHP/Insert-Process.php">
        <h1>Finance</h1>
        <input type="text" placeholder="Hay Finances" name="finHay" required/> <br>
        <input type="text" placeholder="Cattle Finances" name="finCow" required/> <br>
        <input type="text" placeholder="Repair Finances" name="finRep" required/> <br>
        <input type="text" placeholder="Spring,Fall,Summer,Winter" name="finQuarter" required/> <br>
        <input type="text" placeholder="Year" name="finYear" required/>

        <input type="hidden" value="fin" name="type"/>
        <input type="submit" value="Submit"/>
    </form>

    <form id="Hay" method="POST" action="/PHP/Insert-Process.php">
        <h1>Hay</h1>
        <input type="text" placeholder="Round or Square" name="hayType"/> <br>
        <input type="text" placeholder="Current Amount" name="hayCurr"/> <br>
        <input type="text" placeholder="Sold Amount" name="haySol"/> <br>
        <input type="text" placeholder="Fed Amount" name="hayFed"/>

        <input type="hidden" value="hay" name="type"/>
        <input type="submit" value="Submit"/>
    </form>

    <form id="Cattle" method="POST" action="/PHP/Insert-Process.php">
        <h1>Cattle</h1>
        <input type="text" placeholder="Tag Number" name="cowTag"/> <br>
        <input type="text" placeholder="Name" name="cowName"/> <br>
        <input type="text" placeholder="Breed" name="cowBreed"/> <br>
        <input type="text" placeholder="Color" name="cowColor"/>

        <input type="hidden" value="cow" name="type"/>
        <input type="submit" value="Submit"/>
    </form>

    <form id="Equipment" method="POST" action="/PHP/Insert-Process.php">
        <h1>Equipment</h1>
        <input type="text" placeholder="Type (ex. Tractor)" name="equipType"/> <br>
        <input type="text" placeholder="Make" name="equipMake"/> <br>
        <input type="text" placeholder="Model" name="equipModel"/> <br>
        <input type="text" placeholder="Year" name="equipYear"/>

        <input type="hidden" value="equip" name="type"/>
        <input type="submit" value="Submit"/>
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