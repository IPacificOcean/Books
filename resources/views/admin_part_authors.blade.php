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
      <input value='{{ $author->name }}' name='name'  /> {{ $author->count_books }}&nbsp
      </label>

      <input type="submit" value="UPDATE"/>
    </form>
     <form method='post' action='{{ route("author.destroy", $author->id)}}'>
      @method('DELETE')
       <input type="submit" value="DEL"/>
    </form>
@endforeach
<br />
    <form method='post' action="{{ route('author.store') }}" >
      <label>Author: 
        <input name="name">
      </label>
        <input type="submit" value="CREATE">
    </form>
	</body>
</html>