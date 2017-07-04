<?php

if(isset($_POST['submitted']))
{
print"
<table id='sum'>	

<tr>
<td colspan='2' class='text'>Kiszámolt költségek</td>
</tr>

<tr>
<td>Vagyonszerzési illeték:</td>
<td>" . $debug['vagyonszerzesi'] . " Ft</td>
</tr>
</table>
";
}	
	
print"	
<table class='zero'>
<tr>
<td></td>
</tr>
</table>
";



