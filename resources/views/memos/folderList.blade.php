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
					<th>フォルダ名</th>
					<th>タグ</th>
					<th>何かの要素</th>
				</tr>
			</thead>
			<tbody>
                @foreach($folders as $folder)
                    <tr>
                        <td>
                            <a href="{{url('memos/'.$folder->id)}}">{{$folder->title}}</a>
                        </td>
                        <td>
                            {{$folder->tag}}
                        </td>
                        <td>
                            未定
                        </td>
                    </tr>
                @endforeach
			</tbody>
		</table>
        
	</div>
</body>

</html>