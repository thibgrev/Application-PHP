<?php
    
    $ip = $_SERVER['REMOTE_ADDR'];

    echo 'IP address is '.$ip.'<br>';

    $tg_variable = $null
    $tg_variable = $_ENV['TGVARIABLE'];
    $isTouch = isset($tg_variable);

    if ( $isTouch )
    {
        echo 'ENV variable named tg_variable is "'.$tg_variable.'"!';
    }
    else
    {
        echo 'No value for tg_variable variable';
    }
    
    echo "-------------------------------------------------------------------------";
?>
