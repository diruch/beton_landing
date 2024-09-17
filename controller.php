<?php
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SERVER['HTTP_TOKEN'])) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
}
$token = getenv("TG_TOKEN");
$chatid = getenv("CHAT_ID");
getUpdates($token);
$tokenUser = $_SERVER['HTTP_TOKEN'];
if (isset($_SESSION['LAST_PHONE_REQUESTED']) && (time() - $_SESSION['LAST_PHONE_REQUESTED']) < 30) {
    echo "TOO MANY REQUESTS";
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
}
if ($tokenUser !== $_SESSION['token']) {
    // return 405 http status code
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
} else {
    $json = file_get_contents('php://input');
    $values = json_decode($json, true);
    if (!$values['name'] || !$values['phone'] || !$values['calc']) {
        echo "VALIDATION ERROR";
    }
    $text = "Имя: " . $values['name'] . "\r\nТелефон: " . $values['phone'] . "\r\nКалькулятор: " . $values['calc'];

    $token = getenv("TG_TOKEN");
    $chatid = getenv("CHAT_ID");
    getUpdates($token);

    $_SESSION['LAST_PHONE_REQUESTED'] = time();
    sendMessage($chatid, $text, $token);
}

function getUpdates($token)
{
    $url = "https://api.telegram.org/bot" . $token . "/getUpdates";
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    echo $result;
    curl_close($ch);
}

function sendMessage($chatID, $messaggio, $token)
{
    echo "sending message to " . $chatID . "\n";

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die(curl_error($ch));
    } else {
        echo "{}";
    }
    curl_close($ch);
    return $result;
}
?>
