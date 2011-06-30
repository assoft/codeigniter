<h1>User Lists</h1>
<br />
<table cellpadding="2" cellspacing="2">
	<tr>
		<td>User Name</td>
		<td>Email</td>
	</tr>
<?php 
	foreach ($users as $row) {
		echo "<tr>\n";
		echo "<td>".$row->username."</td>\n";
		echo "<td>".$row->email."</td>\n";
		echo "<tr>\n";
	}
?>
</table>