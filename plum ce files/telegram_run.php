<?php
#!/usr/bin/env python3.6

    $command = escapeshellcmd("python3 /var/www/html/pscript/telegram.py");
    $output = shell_exec($command);
        echo $output;
?>

