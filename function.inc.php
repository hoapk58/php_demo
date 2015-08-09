<?php
    function build_form($value) {
        foreach($value as $k => $v) {
        echo "<option value='{$k}'>".$v."</option>";
    }
    } // END funcion build_form
?>