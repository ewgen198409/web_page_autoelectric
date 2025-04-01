<?php
$file = 'guests.txt';

// Проверяем, существует ли файл, и читаем текущее количество посещений
if (file_exists($file)) {
    $count = (int) file_get_contents($file);
} else {
    $count = 0;
}

// Увеличиваем счетчик
$count++;

// Записываем новое значение обратно в файл
file_put_contents($file, $count);

// Отправляем число обратно на клиент
echo $count;
?>
