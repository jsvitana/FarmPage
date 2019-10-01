<html>
<head>
	<link rel="stylesheet" href="./../../CSS/tables.css" />
</head>
<body onload="posNeg(-10)">
	<table id="main">
	<th colspan="4">Summary</th>
	<tr>
		<td style="text-align: right;"><b>Important Matters:<b></td>
		<td colspan="2"><ol><li><span>Tractor tire needs fixed</span></li><li>Round bales need put away</li><li>Fence needs to be fixed</li></ol></td>
		<td></td>
	</tr>
	<tr>
		<td style="text-align: right;"><b>Finances this Quarter:</b></td>
		<td id="money" colspan="2"></td>
		<td></td>
	</tr>
	<tr>
		<td style="text-align: right;"><b>Hay Sold:</b></td>
		<td colspan="2">Round Bales: 15<br>Square Bales: 125</td>
		<td></td>
	</tr>
	<tr>
		<td style="text-align: right;"><b>Current Cattle Number:</b></td>
		<td colspan="2">Angus: 15<br>Hereford: 2</td>
		<td></td>
	</tr>
	<tr>
		<td style="text-align: right;"><b>Equipment Notices:</b></td>
		<td colspan="2"><ul><li>Tractor needs new tie rod</li><li>Discbine needs new bearings</li></ul></td>	
		<td></td>
	</tr>
	</table>
	
	<script>
		function posNeg(amount)
		{
			if(amount > 0)
			{
				document.getElementById("money").innerHTML = 'We are '+'<div style="color: green;"><b><u><i>$' + amount + '</i></u></b></div>'+'above our goal!';
			}
			else
			{
				document.getElementById("money").innerHTML = 'We are '+'<div style="color: red;"><b><u><i>$' + amount + '</i></u></b></div>'+'below our goal';
			}
		}
	</script>
	
</body>
</html>