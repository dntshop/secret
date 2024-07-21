<?php
// URL вашего скрипта Google Apps Script
$googleScriptUrl = 'https://script.google.com/macros/s/AKfycbz6fFl06ZlWtzrngK18Nu2d4KIizfxDNudEtXGpEp8CR_tOE9gkYR67NWEXccfRO0Vo/exec';

// Инициализация cURL
$ch = curl_init($googleScriptUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);

// Проверка ошибок cURL
if ($content === false) {
    header('Content-Type: text/plain');
    echo 'Ошибка при получении данных.';
    exit;
}

// Установка заголовков для RSS
header('Content-Type: application/rss+xml; charset=utf-8');

// Вывод содержимого
echo $content;
?>
