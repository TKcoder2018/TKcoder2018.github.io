<?php
        
        $pswrd = $_POST['password'];
        
        if ($pswrd == "open") {
            include '1st_website_main.html';
        } else {
            echo "Sorry wrong password";
        }
    

?>
