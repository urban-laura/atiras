<head>
<link rel='stylesheet' type='text/css' href='css/atiras.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/atiras.js"></script>
</head>

<body>
<div class='frame'>

<div class='title'>
<h1>Személyautó átírás</h1>
</div>

<form name='calculator' method='post' class='calc-form'>

<div id='atiras'>

<h4>
Évjárat: 
<select name='year' class='date'>
	###year-options###
</select>
</h4>

<h4>
Teljesítmény: 
<input type='number' name='teljesitmeny' id='power' class='date' value='###teljesitmeny###'>
<select name='or' class='or'>
	###or-options###
</select>
</h4>

<div id='error'>
<h3>###error###</h3>
</div>

<h5>
Hengerűrtartalom: 
<select name='barrel' class='barrel'>
	###barrel-options###
</select>
</h5>
</div>

<div class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<input type='submit' id='submit' value='Számol' class='form-submit'>
</div>

</form>

<div id='sum' class='###sum-visibility###'>	

<h3>Kiszámolt költségek</h3>

<table>
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
<td class='value sum'>###sum### Ft</td>
</tr>
</table>
</div>	
	
</div>
</body>
