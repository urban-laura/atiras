<head>
<link rel='stylesheet' type='text/css' href='css/atiras.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/atiras.js"></script>
</head>

<body>
<table class='title'>
<tr>
<td>Személyautó átírás</td>
</tr>
</table>

<form name='calculator' method='post' class='calc-form'>

<table id='atiras'>

<tr>
<td>Évjárat: 
<select name='year' class='date'>
	###year-options###
</select>
</td>

<tr>
<td class='padding-top'>
Teljesítmény: 
<input type='number' name='teljesitmeny' id='power' class='date' value='###teljesitmeny###'>
<select name='or' class='or'>
	###or-options###
</select>
</td>
</tr>

<tr id='error'>
<td>###error###</td>
</tr>

<tr>
<td class='padding-top'>Hengerűrtartalom: 
<select name='barrel' class='barrel'>
	###barrel-options###
</select>
</td>
</tr>

</table>

<table class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<tr>
<td><input type='submit' id='submit' value='Számol' class='form-submit'></td>
</tr>
</table>

</form>

<table id='sum' class='###sum-visibility###'>	

<tr>
<td colspan='2' class='text'>Kiszámolt költségek</td>
</tr>

<tr>
<td class='title2'>Vagyonszerzési illeték:</td>
<td class='value'>###vagyonszerzesi### Ft</td>
</tr>

<tr>
<td class='title2'>Új forgalmi engedély:</td>
<td class='value'>###forgalmi### Ft</td>
</tr>

<tr>
<td class='title2'>Törzskönyv:</td>
<td class='value'>###torzskonyv### Ft</td>
</tr>

<tr>
<td class='title2'>Eredetvizsga:</td>
<td class='value'>###hatosagi_dij### Ft</td>
</tr>

<tr>
<td class='title2'>ÖSSZESEN FIZETENDŐ:</td>
<td class='value'>###sum### Ft</td>
</tr>
</table>	
	
<table class='zero'>
<tr>
<td></td>
</tr>
</table>

</body>
