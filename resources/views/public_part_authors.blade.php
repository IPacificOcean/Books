<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<body>
    @foreach ($authors as $author)
    <form method='post' action='{{ route("author.update", $author->id)}}'>
      @method('PUT')
      <label> Author:&nbsp
      <input value='{{ $author->name }}' name='name'  /> {{ $author->count_books }}&nbsp books
      </label>

    </form>
@endforeach
<br />
	</body>
</html>