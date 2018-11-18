<!DOCTYPE HTML>
<html>  
<body>
    
<form action="index.php" method="get">

    Name: 
    <br>
    <input type="text" name="Name">

    <br>
    <br>

    Tageszeit:<br>
    <input type="radio" name="Tageszeit" value="Guten Morgen "> morgens<br>
    <input type="radio" name="Tageszeit" value="Mahlzeit "> mittags<br>
    <input type="radio" name="Tageszeit" value="Guten Abend "> abends<br>       
    <input type="radio" name="Tageszeit" value="Gute Nacht "> nachts
    
    <br>
    <br>

    I say YES! to...
    <select name="Unfug0">
        <option value="Unfug0">Unfug 0</option>
    </select>
    <select name="Unfug1">
        <option value="Unfug1">Unfug 1</option>
    </select>
    <select name="Unfug2">
        <option value="Unfug2">Unfug 2</option>
    </select>

    <br>
    <br>

    <input type="submit" value="Senden">

</form>

    
</body>
</html>