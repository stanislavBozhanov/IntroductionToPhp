<form action="PostAndGetMethods.php" method="get">
    <input type="text" name="rows">
    <input type="text" name="cols">
    <input type="submit" name="Go!">
</form>

<?php

echo '<table border=1>';

for($i=0; $i<$_GET['rows']; $i++){
    echo '<tr>';
    for($j=0; $j<$_GET['cols']; $j++){
    echo '<td></td>';
    }
    echo '</td>';
}

echo '</table>';
