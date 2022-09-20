<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<body>

@foreach ($books as $book)
    <form method='post' action='{{ route("book.update", $book->id)}}'>
      @method('PUT')
      <label> Book:&nbsp
      <input value='{{ $book->name }}' name='name' /> &nbsp
      </label>
      <label> Author:&nbsp 
      <select name='author_id'>
      </label>
@foreach ($authors as $author)
@if ( $author->id == $book->author_id )
        <option value='{{ $author->id }}' selected>{{ $author->name }}</option>
@else
        <option value='{{ $author->id }}'>{{ $author->name }}</option>
@endif
@endforeach
      </select>
      <input type="submit" value="UPDATE"/>
    </form>
     <form method='post' action='{{ route("book.destroy", $book->id)}}'>
      @method('DELETE')
       <input type="submit" value="DEL"/>
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
      <input type="submit" value="CREATE" />
    </form>
	</body>
</html>