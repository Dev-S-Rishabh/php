<?php
	$code = explode("-",$_POST['itemcode']);
	$name = explode("-",$_POST['itemname']);
	$units = explode("-",$_POST['unitsold']);
	$rate = explode("-",$_POST['rate']);

	$totamt = 0;

	echo "<center><h2>ABC Kirana</h2>";
	echo "<table border=1 bgcolor=yellow width=50%>";

	echo "<tr bgcolor=red>";
		echo "<th>Code</th>";
		echo "<th>Item Name</th>";
		echo "<th>Units Sold</th>";
		echo "<th>Rate</th>";
		echo "<th>Amount</th>";
	echo "</tr>";

	for($i=0;$i<5;$i++)
	{
		$amt = $units[$i]*$rate[$i];

		echo "<tr>";
			echo "<td align=center>$code[$i]</td>";
			echo "<td>$name[$i]</td>";
			echo "<td align=right>$units[$i]</td>";
			echo "<td align=right>$rate[$i]</td>";
			echo "<td align=right>$amt</td>";
		echo "</tr>";

		$totamt = $totamt + $amt;
	}

	echo "<tr bgcolor=red>";
		echo "<td colspan=4 align=right>Total Amount</td> <td align=right>$totamt</td>";
	echo "</tr>"; 
	echo "</table></center>";
?>