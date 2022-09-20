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
      <input value='{{ $author->name }}' name='name'  /> {{ $author->id }}&nbsp
      </label>
<!--       <label> Author:&nbsp 
      <select name='author_id'>
      </label> -->
<!-- @foreach ($authors as $author)
@if ( $author->id == $author->author_id )
        <option value='{{ $author->id }}' selected>{{ $author->name }}</option>
@else
        <option value='{{ $author->id }}'>{{ $author->name }}</option>
@endif
@endforeach
      </select> -->
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