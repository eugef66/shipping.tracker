<html>

<head>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="js/jquery-3.6.1.min.js"></script>
	<script type="text/javascript" charset="utf8"
		src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

	<script>

		$(document).ready(function () {
			$('#trackings').DataTable();
		});


	</script>
</head>

<body>

	<table id="trackings" class="display">
		<thead>
			<tr>
				<th>Description</th>
				<th>Carrier</th>
				<th>Tracking Number</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Row 1 Data 1</td>
				<td>Row 1 Data 1</td>
				<td>Row 1 Data 2</td>
				<td>Row 1 Data 2</td>
			</tr>
			<tr>
				<td>Row 2 Data 1</td>
				<td>Row 1 Data 1</td>
				<td>Row 2 Data 2</td>
				<td>Row 2 Data 2</td>
			</tr>
		</tbody>
	</table>



</body>

</html>