<html>
    <head>
        <title>Global Variables</title>
    </head>
        
    <body>
        <?php
            $var = "Toi o ngoai funciton";
            function scope($var) {
                global $var;
                $var = "Toi nam o trong function";
                return $var;
            }
            
            echo scope($var) . '<br/>';
            // In ra bien da dat
            
            echo $var;
        ?>
        
    </body>
</html>