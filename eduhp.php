<?php
include_once "connection.php";
session_start();
?>

<html>
<body>
<style>
body
{
	background-color:#dbf5d3;
}
.tablink 
{
  background-color:#8ee86f;
  color: bvlack;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.hr 
{
	style="height:2px;border-width:1;color:#8ee86f;background-color:#8ee86f";
}
</style>

<button class="tablink" onclick="openPage('Home', this,'green')"><b>Home</b></button>
<button class="tablink" onclick="openPage('t1', this,'green')"><b>My Links</b></button>
<button class="tablink" onclick="openPage('t2', this,'green')"><b>t2</b></button>
<button class="tablink" onclick="openPage('t3', this,'green')"><b>t3</b></button>
<a href=logout.php><center>LOGOUT</center></a></td>


<div id="Home" class="tabcontent" style=display:none>
 <center><h1>Home</h1></center>
 <hr >
 <p></p>
</div> 

<div id="t1" class="tabcontent" style=display:none>
   <center><h1>My Links</h1></center>
    <hr>
	<table name = "edu">
        <tr>
            <th><Links</th>
            
        </tr>
        <?php
            include_once "connection.php";
            $sql = "select links from link where username='".$_POST["name"]."'";
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
	  
</div>
<?php
/*if($_POST['submit']!='')
{
$sql= "SELECT * FROM links WHERE username ='".$_POST['name']."' ";
}
$result = mysqli_query($con,$sql) or die(mysqli_error($con));


$check = mysqli_fetch_array($result);
if(isset($check))
	{
		echo "hi";
	}
	else
	{
		echo "no links";
	}
*/	
?>
<div id="t2" class="tabcontent" style=display:none>
  <h3>t2</h3>
  <p>Test2....</p>
</div>

<div id="t3" class="tabcontent" style=display:none>
  <h3>t3</h3>
  <p>Test3</p>
</div>
</body>
</html>




<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

document.getElementById("defaultOpen").click();
</script>


