<!DOCTYPE html>
<html language="en">
<head>
	<title> image app </title>
</head>
<body>
	<form action="/img/store" 
	enctype="multipart/form-data"
	method="POST">

	@csrf

	<p><input type="file" name="img" /> </p>
	<p><input type="submit" value="upload" /></p>

	</form>
</body>
</html>
