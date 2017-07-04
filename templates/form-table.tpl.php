<head>
<link rel='stylesheet' type='text/css' href='css/atiras.css'>

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
<input type='number' name='teljesitmeny' class='date' value='###teljesitmeny###'>
<select name='or' class='or'>
	###or-options###
</select>
</td>
</tr>

<tr id='error'>
<td>###error###</td>
</tr>

<tr class='text'>
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


</body>
