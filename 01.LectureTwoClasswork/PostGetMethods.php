<form action="PostGetMethods.php" method="get">
    <input type="text" name="login">
    <input type="text" name="email">
    <input type="submit" value="GO with get">
</form>

<form action="PostGetMethods.php" method="post">
    <input type="text" name="login">
    <input type="text" name="email">
    <input type="submit" value="GO with post">
</form>
<?php

echo 'Show get login value'.$_GET['login'].'</br>';
echo 'Show GET array'.'</br>';
echo '<pre>'.print_r($_GET, true).'</pre>';
echo 'Show POST array'.'</br>';
echo '<pre>'.print_r($_POST, true).'</pre>';