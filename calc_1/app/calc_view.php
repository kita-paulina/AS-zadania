<?php require_once dirname(__FILE__).'/../config.php';?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kalkulator</title>
    </head>
    <body>
        <form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
            
            <label for="firstNumber">Pierwsza liczba : </label>
            <input type="text" id="firstNumber" name="x" value="<?php if (isset($x)) {
                print($x);
            }
            ?>"><br>
            
            <label for="operation">Wybierz operację:</label>
            <select id="operation" name="operation">
                <option value="add">dodaj</option>
                <option value="subtract">odejmij</option>
                <option value="multiply">pomnóż</option>
                <option value="divide">podziel</option>
            </select><br>
            
            <label for="secondNumber">Druga liczba : </label>
            <input type="text" id="secondNumber" name="y" value="<?php if (isset($y)) {
                print($y);
            }
            ?>"><br>
           
            <input type="submit" value="Oblicz">
        </form>
        
        <?php
            
            if(isset($result)){
                
                echo '<br>Wynik : '.$result;
            }
        
            if(is_array($messages)){
                
                if(!empty($messages)){
                    
                    echo '<ol>';

                    foreach ($messages as $msg) {
                        echo '<li>'.$msg.'</li>';
                    } 
                    
                    echo '</ol>';
                    
                }
                
            }
        
        ?>
    </body>
</html>
