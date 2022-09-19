<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<body>

@foreach ($books as $book)
    <form>
      <input value='{{ $book->name }}' name='name' />
      <input value='{{ $book->author_name }}' name='author_name' />
      <input type="submit" />
    </form>
@endforeach
<br />
    <form method='post' action='{{ route("book.store")}}'>
      <input value='new_book' name='name' />
      <select name='author_id'>
@foreach ($authors as $author)
        <option value='{{ $author->id }}'>{{ $author->name }}</option>
@endforeach
      </select>
      <input type="submit" />
    </form>
	</body>
</html>