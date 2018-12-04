<?php 
    $text = $_REQUEST['Unfug1'] . " " . $_REQUEST['Unfug2'] . " " . $_REQUEST['Unfug3'] . "\n";
    file_put_contents("formular.txt", $text, FILE_APPEND);
// Falls das Textfeld nicht ausgefüllt wurde
    if (empty($_GET['Textfeld'])){
        die("Fehler! Kein Text eingegeben.");
        }
    // Falls das Textfeld ausgefüllt wurde
    else {
        // Inhalt des Textfelds in Datei schreiben
        file_put_contents("formular.txt", $_GET['Textfeld'], FILE_APPEND);               
        }  
?>


<!DOCTYPE HTML>
<html>

<head>
    <title>Satzgenerator | Internet 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <style >
        p {
            text-align: center;
        }
    </style>
</head>

<body>
   <?php 
        include('nav.inc');
    ?>
</body>
    
    
<h1>SATZGENERATOR</h1>

<p>
    <?php 
    echo $_GET['Tageszeit'];
    echo $_GET['Name'];
    ?>
    !
</p>

<br>
    
<p>
<b>Du sagst "JA!" zu...</b>
<br>
    <?php 
    echo $_GET['Unfug1']; 
    echo $_GET['Unfug2'];
    echo $_GET['Unfug3'];
    ?>
</p>

<br>

<p>
<b>Das wolltest Du noch loswerden:</b>
<br>
    <?php
    echo $_GET['Textfeld'];
    ?>
</p>
    
<?php 
    include('footer.inc');
?>

    
</html>
