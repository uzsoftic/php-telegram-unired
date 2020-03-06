<?php require_once ('autoload.php');

if ($_GET['admin'] == true){
    if (isset($_GET['method'])){
        if ($_GET['method'] == 'emp') { // EMPTY
            /*//https://api.telegram.org/bot70360V526:ADHMSEH1eoPfd3YSCppzYdL7PnKYxtk5k10/getUpdates
            //return file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setWebhook");*/
            $redirect = "https://api.telegram.org/bot".API_KEY."/setWebhook";
            header('location: '.$redirect);
        } elseif ($_GET['method'] == 'upd') { //UPDATE
            $redirect = "https://api.telegram.org/bot".API_KEY."/setWebhook?url=".INDEX_LINK;
            header('location: '.$redirect);
        }elseif ($_GET['method'] == 'inf') { // INFORMATION
            $redirect = "https://api.telegram.org/bot".API_KEY."/getWebhookInfo";
            header('location: '.$redirect);
        }elseif ($_GET['method'] == 'del') { // DELETE
            $redirect = "https://api.telegram.org/bot".API_KEY."/deleteWebhook";
            header('location: '.$redirect);
        }
    }else {
        echo '
            <a href="'. currentUrl() .'&method=emp">Empty Webhook</a><br>
            <a href="'. currentUrl() .'&method=del">Clear Webhook</a><br>
            <a href="'. currentUrl() .'&method=upd">Update Webhook</a><br>
            <a href="'. currentUrl() .'&method=inf">Info Webhook</a><br>
        ';
    }

}
?>
