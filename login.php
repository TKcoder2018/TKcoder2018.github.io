<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $pswrd = $_REQUEST['password'];
        
        if ($pswrd == "open") {
            include '1st_website_main.html';
        } else {
            echo "Sorry wrong password";
        }
    }

?>
