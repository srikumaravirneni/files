<html>
<body>
<table border=1><tr>
<?php

for($i=1;$i<=10;$i++){
	
	if($i%6==0){
		echo "\n</tr><tr>";
	}
	
	echo "<td><table>";

	for($v=1;$v<=10;$v++){
		echo "\n<tr><td>";
		$s=$i*$v;
		echo "$i*$v=".$s;
		echo "</td></tr>";
	}
	echo "</table></td>";
}
echo "</tr>";
?>
</table>
</body>
</html>
	