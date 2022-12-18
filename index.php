<?php
$token = "";
$chatid = "";

//getUpdates($token);
//sendMessage($chatid, "Ты такая сосочка", $token);


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
        echo "SADASD";
    }
    curl_close($ch);
    return $result;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beton</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
</head>
<body>
<div id="app">
    {{ message }}
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Привет, Vue!'
        }
    })
</script>  <div class="header">
    QWEQWEQWE
</div>
</body>
</html>

<style>
    .header {
        color: pink;
    }
</style>