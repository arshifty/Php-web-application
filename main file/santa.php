<?php



if(isset($_POST['save']))
{	

                    $lul = $_POST['lul'] ;
	                $lol=$_POST['lol'] ;
					

	

		if ($lul=='11'  && $lol=='12') {
			 
			 echo " <ul>

<li> <a href='up.php' > upload div dis </a>  </li>
<li> <a href='donar.html' >  blood donar  </a>  </li>
<li> <a href='contact/view.php' >   contact  info </a>  </li>
<li> <a href='iso/isolation.php' >  quarantine </a>  </li>
<li> <a href='update/world.php' > bisso  </a>  </li>
<li> <a href='update/country.php' >  desh </a>  </li>




</ul> ";

		} else {
			echo "Error updating record: " ;
		}
	
		
		
}

?>







<form  method="post">
<table align="center">

	
	<tr>
		<td>lul : </td>
		<td><input type="password"    name="lul"  /></td>
	</tr>
	
	<tr>
		<td>lol:</td>
		<td><input type="password"  name="lol"    /></td>
	</tr>	
	
	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>
