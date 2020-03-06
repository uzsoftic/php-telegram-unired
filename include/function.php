<?php

function redirect($url){
    if (headers_sent()){
        die('<script type="text/javascript">window.location=\''.$url.'\';</script‌​>');
    }else{
        header('Location: ' . $url);
        die();
    }
}

function currentUrl() {
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
    $host     = $_SERVER['HTTP_HOST'];
    $script   = $_SERVER['SCRIPT_NAME'];
    $params   = $_SERVER['QUERY_STRING'];
    return $protocol . '://' . $host . $script . '?' . $params;
}

function clean($string) {
    //$string = str_replace(' ', '-', $string);
    $string = str_replace(array(' ', '/'), array('-', '-'), $string);
    $string = strtolower($string);
    $string = preg_replace('/--+/', '-', $string);
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

function isadmin($user_id){
    $admin = BOT_ADMIN_ID;
    if(isset($user_id == $admin){
        return true;
    }else{
        return false;
    }
}

function ismoder($user_id){
    $moder = BOT_MODER_ID;
    if(isset(in_array($user_id, $moder))){
        return true;
    }else{
        return false;
    }
}

?>
