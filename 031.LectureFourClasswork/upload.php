<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Upload</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <div><input type="file" name="picture"/></div>
    <div><input type="submit" name="upload"/></div>
    <?php
    // Post max size is 8mb. It can be changed in php.ini
    if ($_POST) {
        if (count($_FILES) > 0) {
            if (move_uploaded_file($_FILES['picture']['tmp_name'], 'pictures' . DIRECTORY_SEPARATOR . $_FILES['picture']['name'])) {
                echo 'файлът е качен успещно';
            }
            else {
                echo 'Error';
            }
        }
    }
    ?>
</form>
</body>
</html>