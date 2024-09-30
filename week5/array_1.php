<!DOCTYPE html> 
<html>
    <head>
    </head>
    <body>
    <h2>Array Terindeks</h2>
    <?php
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        // Using a for loop to display the array elements
        for ($i = 0; $i < count($Listdosen); $i++) {
            echo $Listdosen[$i] . "<br>";
        }
    ?>
    </body>
</html>
