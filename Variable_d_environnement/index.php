<?php
    // Example use of getenv()
    $ip = getenv('REMOTE_ADDR');

    echo 'L ip est '.$ip;

    // Or simply use a Superglobal ($_SERVER or $_ENV)
    $ip = $_SERVER['REMOTE_ADDR'];

    echo 'L ip est '.$ip;
?>