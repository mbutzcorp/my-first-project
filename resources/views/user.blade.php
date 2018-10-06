<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $item)
				<tr>
					<td>{{ $item->name }}</td>
					<td>{{ $item->email }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	
</body>
</html>