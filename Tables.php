<html>
<body>
<table border=1>
<?php

for($i=1;$i<=10;$i++)
{
	echo "<tr>";
	
	
	for($v=1;$v<=10;$v++)

{
		echo "<td>";
		
	$s=$i*$v;
	echo "$i*$v=".$s;
	echo "</td>";
}
	


}
echo "</tr>";
?>
</table>
</body>
</html>
	