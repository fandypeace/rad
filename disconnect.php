<?php
    $reff = $_GET['reff'];
    $nasi = $_GET['nasname'];
    $nass = $_GET['secret'];
    $comd = shell_exec("echo User-Name='".$reff."' | /usr/bin/radclient -c '1' -n '3' -r '3' -t '3' -x '".$nasi."' 'disconnect' '".$nass."' 2>&1");
?>