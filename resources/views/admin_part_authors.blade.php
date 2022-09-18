<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<body>
    <form method='post' action="{{ route('author.store') }}" >
      @csrf
      <label>Name Author: 
        <input name="name">
      </label>
        <input type="submit">
    </form>
	</body>
</html>