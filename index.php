<?php
$raw_post = file_get_contents('php://input');

$ch = curl_init('https://teslobot.alwaysdata.net/crm/mono_hook_7x9qL.php?key=teslovel_secure_2026');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $raw_post);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

// Жорсткий ліміт: чекаємо на Alwaysdata не більше 1 секунди!
curl_setopt($ch, CURLOPT_TIMEOUT, 1); 

curl_exec($ch);
curl_close($ch);

http_response_code(200);
echo "OK";
?>
