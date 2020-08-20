

<?php
#!"C:\python\python.exe"
    
		  
    $command = escapeshellcmd('C:/xampp/htdocs/files/pp/b.py');
    $output = shell_exec($command);
    echo $output;
	
?>
 