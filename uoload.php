<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload</title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
	Select image to upload: 
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" name="submit" value="Upload Image">
</form>
</body>
</html>