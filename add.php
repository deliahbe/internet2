<!DOCTYPE HTML>
<html>  

<head>
    <title>Satzgenerator | Internet 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <?php 
        include('nav.inc');
    ?>
</body>

    
<h1>SATZGENERATOR</h1>

<form action="index.php" method="get">

    <p><b>Name:</b></p>
 
    <input type="text" name="Name">

    <br>
    <br>

    <p><b>Tageszeit:</b></p>
    
    <input type="radio" name="Tageszeit" value="Guten Morgen, "> morgens<br>
    <input type="radio" name="Tageszeit" value="Mahlzeit, "> mittags<br>
    <input type="radio" name="Tageszeit" value="Guten Abend, "> abends<br>       
    <input type="radio" name="Tageszeit" value="Gute Nacht, "> nachts
    
    <br>
    <br>

    <p><b>Ich sage "JA!" zu...</b></p>
   
    <select name="Unfug1">
        <option value="toller ">toller</option>
        <option value="super ">super</option>
        <option value="fantastischer ">fantastischer</option>
        <option value="bombastischer ">bombastischer </option>
    </select>
    <select name="Unfug2">
        <option value="Obst-">Obst</option>
        <option value="Gemüse-">Gemüse</option>
        <option value="Fleisch-">Fleisch</option>
        <option value="Weizen-">Weizen</option>
    </select>
    <select name="Unfug3">
        <option value="Salat">Salat</option>
        <option value="Smoothie">Smoothie</option>
        <option value="Auflauf">Auflauf</option>
        <option value="Eintopf">Eintopf </option>
    </select>

    <br>
    <br>
    
    <p><b>Das will ich noch loswerden:</b></p>
    <textarea name="Textfeld" rows="10" cols="50"></textarea>
        
    <br>
    <br>
        
    <input type="submit" value="Senden">

</form>
   
<?php 
    include('footer.inc');
?>
    
    
</html>
