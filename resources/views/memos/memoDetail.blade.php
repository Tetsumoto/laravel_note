<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel Query Filter Sample</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css" type="text/css" media="all"
	/>
</head>

<body>
	<div class="container">
		<table class="table is-bordered">
			<thead>
				<tr>
					<th>{{$memo->title}}</th>
				</tr>
			</thead>
			<tbody>
            <tr>
					<td>
						{{$memo->tag}}
					</td>
				</tr>
				<tr>
					<td>
						{{$memo->text}}
					</td>
				</tr>
			</tbody>
		</table>

        <!-- <input type="button" onClick="Models.delete({{$memo->id}}, {{$memo->folder_id}})" value="削除" /> -->
        <a href="{{url('delete/'.$memo->id)}}">削除</a>

	</div>
</body>