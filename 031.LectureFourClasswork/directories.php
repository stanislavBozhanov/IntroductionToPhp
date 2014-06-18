<?php
// Взема файл в съшата директория по абсолютен път
include __DIR__. DIRECTORY_SEPARATOR . 'time.php';
echo basename(__FILE__) . '<br>';
$path ='data.txt';
echo realpath($path) . '<br>';
if (file_exists('data.txt')) 
{
	echo "file exist" . '<br>';
}
else {
echo "file does not exit";
}
$dir = "C:".DIRECTORY_SEPARATOR."Users".DIRECTORY_SEPARATOR."Stanislav".DIRECTORY_SEPARATOR."Desktop".DIRECTORY_SEPARATOR."CV.docx";

echo '<pre>' . print_r($dir, true) . '</pre>';

//отваряме файла за четене
// fopen работи и с URL адреси
$handle = fopen('data.txt', 'r');
while (!feof($handle)) {
	$str = fread($handle, 8192);
}

fclose($handle); 
// Задължително затваряме файла след четене 
// за да се освободят резурсите
print_r($str);
echo '<br>';
//Да проверим дали дадена директория съществува
//Да проверим какво има в нея
if (is_dir('C:\\Users\\Stanislav\\Pictures')) {
	$files = scandir('C:\\Users\\Stanislav\\Pictures');
	echo '<pre>' . print_r($files, true) . '</pre>';
}
else{
	echo 'directory does not exit!';
}

// Функцията pathinfo
echo '<pre>' . print_r(pathinfo(__FILE__), true) . '</pre>';