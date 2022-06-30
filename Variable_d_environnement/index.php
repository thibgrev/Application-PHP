<?php
    // Example use of getenv()
    $ip = getenv('REMOTE_ADDR');

    echo 'L ip est '.$ip;

    // Or simply use a Superglobal ($_SERVER or $_ENV)
    $ip = $_SERVER['REMOTE_ADDR'];

    echo 'L ip est '.$ip;

    $tg_variable = $_SERVER['TGVARIABLE'];

    echo 'L ip est '.$tg_variable;
?>