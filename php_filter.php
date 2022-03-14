<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Filter</title>
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>
<table>
	<tr>
		<td>Filter Name</td>
		<td>Filter ID</td>
	</tr>
	<?php 
	//filte_list() la mot mang
	//filter_id tra ve id cua filter name
	foreach(filter_list() as $id => $filter){
		echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
	}
	?>
</table>
</body>
</html>