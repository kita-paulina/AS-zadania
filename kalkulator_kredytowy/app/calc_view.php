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
        <form class="pure-form pure-form-aligned" action="<?php print(_APP_URL);?>/app/calc.php" method="post">
     
            <fieldset>
                
                <div class="pure-control-group">                
                    <label for="kwota_kredytu">Kwota udzielonego kredytu : </label>
                    <input type="text" required="" id="kwota_kredytu" name="kwota_kredytu" value="<?php 
                        if (isset($kwota_kredytu)) {
                            print($kwota_kredytu);
                        } ?>">                  
                </div>
            
                <div class="pure-control-group">
                    <label for="oprocentowanie">Oprocentowanie w skali roku : </label>
                    <input type="text" required="" id="oprocentowanie" name="oprocentowanie" value="<?php 
                        if (isset($oprocentowanie)) {
                            print($oprocentowanie);
                        }
                    ?>">
                </div>
                
                <div class="pure-control-group">
                    <label for="raty_na_rok">Liczba rat płatnych w ciągu roku : </label>
                    <input type="text" required="" id="raty_na_rok" name="raty_na_rok" value="<?php 
                        if (isset($raty_na_rok)) {
                            print($raty_na_rok);
                    }?>">
                </div>
                
                <div class="pure-control-group">
                    <label for="wszystkie_raty">Oprocentowanie w skali roku : </label>
                    <input type="text" required="" id="wszystkie_raty" name="wszystkie_raty" value="<?php 
                        if (isset($wszystkie_raty)) {
                            print($wszystkie_raty);
                    }?>">
                    
                </div>
                
                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
                </div>
                
            </fieldset>
 
        </form>
        
    </body>
    
</html>
