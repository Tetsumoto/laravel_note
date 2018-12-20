<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel Query Filter Sample</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css" type="text/css" media="all"/>
</head>

<body>
	<div class="container">

		メモ作成<br>

		<form action="{{url('editMemo')}}" method="get">
			タイトル　<input type="text" name="title" /><br>
            タグ　　　<input type="text" name="tag" /><br>
            本文　　　<input type="text" name="text" /><br>
			<input type="submit" value="作成" />
		</form>

	</div>
</body>

</html>