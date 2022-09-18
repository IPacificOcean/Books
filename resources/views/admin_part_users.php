<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<body>
    <form method='post' action="/api/user" >
<!--       @csrf -->
      <label>Name User: 
        <input name="name">
      </label>
      <label>email: 
        <input type="email" name="email">
      </label>
      <label>Password: 
        <input name="password">
      </label>
        <input type="submit">
    </form>
	</body>
</html>