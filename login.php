<?php
        
        $pswrd = $_POST['password'];
        
        if ($pswrd == "open") {
            header('location: 1st_website_main.html');
            exit;
        } else {
            echo "Sorry wrong password";
        }
    

?>
