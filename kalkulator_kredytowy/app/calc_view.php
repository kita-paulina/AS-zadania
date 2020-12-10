<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kalkulator kredytowy</title>
        
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-4ZPLezkTZTsojWFhpdFembdzFudphhoOzIunR1wH6g1WQDzCAiPvDyitaK67mp0+" crossorigin="anonymous">
   
    </head>
    <body>
        <form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
            
            <label for="kwota_kredytu">Kwota udzielonego kredytu : </label>
            <input type="text" id="kwota_kredytu" name="kwota_kredytu" value="<?php 
                if (isset($kwota_kredytu)) {
                    print($kwota_kredytu);
                }
            ?>"><br>
            
            <label for="oprocentowanie">Oprocentowanie w skali roku : </label>
            <input type="text" id="oprocentowanie" name="oprocentowanie" value="<?php 
                if (isset($oprocentowanie)) {
                    print($oprocentowanie);
                }
            ?>"><br>
            
            <label for="raty_na_rok">Liczba rat płatnych w ciągu roku : </label>
            <input type="text" id="raty_na_rok" name="raty_na_rok" value="<?php 
                if (isset($raty_na_rok)) {
                    print($raty_na_rok);
                }
            ?>"><br>
            
            <label for="wszytskie_raty">Oprocentowanie w skali roku : </label>
            <input type="text" id="wszytskie_raty" name="wszytskie_raty" value="<?php 
                if (isset($wszytskie_raty)) {
                    print($wszytskie_raty);
                }
            ?>"><br>
            
            <input type="submit" value="Oblicz">
        </form>
    </body>
</html>
