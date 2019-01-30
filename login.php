<?php
        
        $pswrd = $_POST['password'];
        
        if ($pswrd == "open") {
            include_once('location: 1st_website_main.html');
            exit;
        } else {
            echo "Sorry wrong password";
        }
    

?>
