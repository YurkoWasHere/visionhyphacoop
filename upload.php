<?php
$target_dir = "files/";

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["uploadFile"]["tmp_name"]);
    if($check !== false) {
	$fileparts=explode(".",$_FILES["uploadFile"]["name"]);
        $fileName= date("Ymd-His") . "." .  $fileparts[count($fileparts)-1];
	move_uploaded_file($_FILES["uploadFile"]["tmp_name"],"/home/hyphacoop/www/files/" . $fileName);
    } else {
        echo "File is not an image.!!";
        $uploadOk = 0;
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <br />
  <input type="file" name="uploadFile" id="uploadFile" />
  <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>
