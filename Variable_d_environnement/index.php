<?php
    // Or simply use a Superglobal ($_SERVER or $_ENV)
    $ip = $_SERVER['REMOTE_ADDR'];

    echo 'IP address is '.$ip.'<br>';

    $tg_variable = $_ENV['TGVARIABLE'];

    echo 'ENV variable named tg_variable is "'.$tg_variable.'"!';
    echo $tg_variable;

    echo "-------------------------------------------------------------------------";
?>
