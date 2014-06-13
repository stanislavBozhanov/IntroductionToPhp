<?php
include 'includes/header.php';
require 'includes/constants.php';
$pageTitle = 'Форма';

if($_POST) {
    #Нормализация

    $product = trim($_POST['product']);
    $product = str_replace('!', '', $product);
    $price = trim($_POST['price']);
    $price = str_replace('!', '', $price);
    $price = str_replace(',', '.', $price);
    $selected_type = (int)$_POST['product_type'];
    $error = false;


    if(mb_strlen($product) < 2 || mb_strlen($product) > 30) {
        echo '<p>Невалидно име</p>'.'<p>Името на продукта трябва да бъде между 2 и 30 символа</p>';
        $error = true;
    }
    if(!is_numeric($price) || $price < 0 || $price > 1000000) {
        echo '<p>Невалидна цена!</p>'.'<p>Цената трябва да е положителна и нейният формат да е 0.00</p>';
        $error = true;
    }
    if(!array_key_exists($selected_type, $product_types)) {
        echo '<p>Невалидна група</p>';
        $error = true;
    }
    if(!$error) {
        $result = $date_of_entry.'!'.$product.'!'.$price.'!'.$selected_type."\r\n";
        if(file_put_contents('data.txt', $result, FILE_APPEND)){
            echo '<p>Записът е успешен!</p>';
        }
    }
}
?>
<a href="index.php">Списък с разходи</a>
<form method="post">
    <div>Разход:<input type="text" name="product"/></div>
    <div>Сума:<input type="text" name="price"/></div>
    <div>Вид:<select name="product_type">
            <?php
                foreach ($product_types as $key=>$value) {
                    echo '<option value="'.$key.'">'.$value.'</option>';
                }
            ?>
        </select>
    </div>
    <div>
        <input type="submit" value="Добави"/>
    </div>
</form>
<?php
include 'includes/footer.php';
?>