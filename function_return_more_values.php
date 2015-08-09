<html>
    <head>
        <title>Function: return more values</title>
    </head>
        
    <body>
        <?php 
            function cong_tru($x, $y) {
                $tong = $x + $y;
                $hieu = $x - $y;
                $dap_so = array($tong, $hieu);
                return $dap_so;
            }
            
            $total = cong_tru(8, 5);
            echo "Tong so: $total[0] <br/>";
            echo "Hieu so: $total[1] <br/>";
            
            list($tong, $hieu) = cong_tru(8, 5);
            echo "Tong so: $tong <br/>";
            echo "Hieu so: $hieu <br/>";
            
                      
        ?>
    </body>
</html>