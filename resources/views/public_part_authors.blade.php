<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<body>
    @foreach ($books as $book)
    <form method='post' action=''>
      <label> Book:&nbsp
      <input value='{{ $book->name }}' name='name' /> &nbsp
      </label>
      <br />
      <label> Author:&nbsp 
      </label>
@foreach ($authors as $author)
<!-- @if ( $author->id == $book->author_id ) -->
        <option value='{{ $author->id }}' selected>{{ $author->name }}</option>
<!-- @else
        <option value='{{ $author->id }}'>{{ $author->name }}</option> -->
<!-- @endif -->
@endforeach
    </form>
     <form method='post' action=''>

    </form>
@endforeach
<br />
<br />
	</body>
</html>