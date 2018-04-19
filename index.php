<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formative one example</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	
	<h1>Forms-uploading files/photos.</h1>
	
	<div class="para">
	<p>First in the c-panel you must find <span>"php.ini"</span> file and set <span>"file_uploads = on"</span></p>

	<p>Then make html form.</p>
	</div>
	
	<div class="form">
		<form action="upload.php" method="post" enctype="multipart/form-data">
		    Select image to upload:
		    <input type="file" name="fileToUpload" id="fileToUpload">
		    <input type="submit" value="Upload Image" name="submit">
		</form>
	</div>
	
	<div class="para">
		<ul>
			<li>The form must use <span>method="post"</span></li>
			<li>The form must also have the attribute: <br><span>enctype="multipart/form-data"</span><br>This specifies which content type to use when submitting the form.</li>
		</ul>
	</div>

	<div class="para">
		<p>The form sends data to a file called <span>"upload.php".</span>Which is a file we must create and put inside of the root dir.</p>
	</div>

	<div class="para">
		<h2>PHP script explanation:</h2>
		<ul>
			<li><span>$target_dir = "uploads/"</span> - specifies the directory where the file is going to be placed</li>
			<li><span>$target_file</span> specifies the path of the file to be uploaded</li>
			<li><span>$imageFileType</span> holds the file extension of the file (in lower case)</li>
		</ul>
	</div>
	<div class="ref para">
	<p>References: <br>https://www.w3schools.com/php/php_file_upload.asp</p>
	<p>http://php.net/manual/en/features.file-upload.post-method.php</p>
	<p>Jesse Walsh formative one CMS - Yoobee</p>
	</div>

</body>
</html>