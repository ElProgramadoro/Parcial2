<?php
    if(session_status() == 1 )session_start();

    setcookie("user", "ms", time()-(60*60*24));



?>