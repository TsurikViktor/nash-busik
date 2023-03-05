<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "translation.php";
$lang = "pl";
?>
<!doctype html>
<html lang="pl">
    <?php
    include("../../body_header.php");
    include("../../body_main_menu.php");

    if (filter_has_var(INPUT_GET, 'country')) {
        $country = filter_input(INPUT_GET, 'country');
        $regexp = array("options" => array("regexp" => "/^[\w]+$/"));

        if (!filter_var($country, FILTER_VALIDATE_REGEXP, $regexp)) {
            $data = array('error' => 'Validation error(ts).');
            exit;
        }

        switch ($country) {
            case "poland":
                include("../../body_poland.php");
                break;
            case "ukraine":
                include("../../body_ukraine.php");
                break;
        }
        include("../../body_endmodals.php");
    } else {
        include("../../body_countries.php");
    }
    include("../../body_content.php");
    include("../../body_footer.php");
    ?>
</html>