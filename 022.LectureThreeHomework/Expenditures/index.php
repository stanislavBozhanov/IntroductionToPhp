<?php
include 'includes/header.php';
require 'includes/constants.php';
$pageTitle = 'Списък с разходи';
?>
<a href="form.php">Добави разход</a>
<form method="post">
    <select name="filter">
        <option value="0">Всички</option>
        <?php
        foreach ($product_types as $key=>$type) {
            echo '<option value="'.$key.'">'.$type.'</option>';
        }
        ?>
    </select>
    <input type="submit" value="Филтър"/>
</form>
<?php
if(file_exists('data.txt')){
    $file_information = file('data.txt');
    $total = 0;
    echo
    '<table border="1">
        <tr>
        <td>' . 'Дата' . '</td>
        <td>' . 'Разход' . '</td>
        <td>' . 'Сума' . '</td>
        <td>' . 'Вид' . '</td>
        </tr>';

    foreach ($file_information as $line) {
        $columns = explode('!', $line);
        if(isset($_POST['filter']) && $_POST['filter'] > 0 && (int)$_POST['filter']!=(int)$columns[3]) {
            continue;
        }
        $total += (float)$columns[2];
        echo '<tr>
            <td>' . $columns[0] . '</td>
            <td>' . $columns[1] . '</td>
            <td>' . number_format($columns[2], 2, '.', '') . '</td>
            <td>' . $product_types[trim($columns[3])] . '</td>
            <td><a href="index.php">X</a></td>
            </tr>';
    }

    echo    '<tr>
        <td>' . '----' . '</td>
        <td>' . '----' . '</td>
        <td>' . number_format($total, 2, '.', '') . '</td>
        <td>' . '----' . '</td>
        </tr>
        </table>';
}

include 'includes/footer.php';
?>
