<?php
    $content = '';
    foreach ($_POST as $key => $value) {
        if($value){
            $content .= "<b>$key</b>: <i>$value</i>\n";
        }
    }
    if(trim($content)){
        $content = "<b>Заявка від:</b>\n".$content;
        $apiToken = "6348717892:AAFL-zMwB_fGctvIv7aftpcQh8z7OtEEoyQ";
        $data = [
            'chat_id' => '-1002025349539',
            'text' => $content,
            'parse_mode' => 'HTML'
        ];
        $personse = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));

    }
?>