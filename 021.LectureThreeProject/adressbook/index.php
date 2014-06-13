<?php
$pageTitle = 'Списък';
include 'includes/header.php';
?>

<a href="form.php">Добави нов контакт</a>
<table border="1">
    <tr>
        <td>Име</td>
        <td>Телефон</td>
        <td>Група</td>
    </tr>

    <?php
    #Преди да започнем да работим с файла трябва да проверим дали той съществува и дали имаме правата да работим с него
    if(file_exists('data.txt')) {
        $result= file('data.txt'); #връща масив, в който всеки един ред е елемент от масива
        foreach ($result as $value) {
            $colums = explode('!', $value);
            #тук на последния елемент освен символа взема и новия ред \n дори и да не виждаме това
            echo '<tr>
                    <td>'.$colums[0].'</td>
                    <td>'.$colums[1].'</td>
                    <td>'.$groups[trim($colums[2])].'</td>
                  </tr>';

        }
    }


    ?>
</table>

<?php
include 'includes/footer.php';
?>

<?php
