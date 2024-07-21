<?php
// URL страницы, откуда нужно получить контент
$url = 'https://script.google.com/macros/s/AKfycbyEs3mt_3hDVGnc0bMDIsgJIpH3BMvjxfLrTtJ0ZikSedlJ-UT_0vYkPTerT6VCHCUa/exec';

// Инициализируем cURL
$ch = curl_init($url);

// Устанавливаем опции для cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Выполняем запрос и сохраняем результат в переменной
$content = curl_exec($ch);

// Закрываем cURL
curl_close($ch);

// Отображаем полученный контент
echo $content;
?>
