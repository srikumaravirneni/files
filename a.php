<table name = "edu">
        <tr>
            <th>Links</th>
            
        </tr>
        <?php
            include_once "connection.php";
            $sql = "select links from link";
			$result = mysqli_query($con,$sql) or die(mysqli_error($con));
            if(mysqli_num_rows($result) >= 0){
             
                while ($row = mysqli_fetch_assoc($result)) 
				{
                    echo '<tr>';
                    echo '<td>'. $row['links'].'</td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>