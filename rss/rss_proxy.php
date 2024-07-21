<?php
// URL вашего скрипта Google Apps Script
$googleScriptUrl = 'https://script.google.com/macros/s/AKfycbz6fFl06ZlWtzrngK18Nu2d4KIizfxDNudEtXGpEp8CR_tOE9gkYR67NWEXccfRO0Vo/exec';

// Инициализация cURL
$ch = curl_init($googleScriptUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch);

// Установка заголовков
header('Content-Type: application/rss+xml');

// Вывод содержимого
echo $content;
?>
