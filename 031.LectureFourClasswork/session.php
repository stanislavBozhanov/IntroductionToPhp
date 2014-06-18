<?php
session_start();
$_SESSION['a']++;
echo $_SESSION['a'] . "\r\n";
echo '<pre>' . print_r($_SESSION, true) . '</pre>';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Sessions</title>
</head>
<body>
<a href="destroy.php">Destroy session</a>
</body>
</html>
