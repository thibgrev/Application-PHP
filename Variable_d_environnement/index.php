<?php
    // Or simply use a Superglobal ($_SERVER or $_ENV)
    $ip = $_SERVER['REMOTE_ADDR'];

    echo 'L ip est '.$ip;

    $tg_variable = $_ENV['TGVARIABLE'];

    echo 'La variable d environnement tg_variable est "'.$tg_variable.'".';
?>