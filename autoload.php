<?php
// BOT API
$BOT_API_KEY = 'TELEGRAM_BOT_API_KEY'; 		//required
$BOT_USERNAME = 'TELEGRAM_BOT_USERNAME'; 	//required
$BOT_ADMIN_ID = 'ADMIN_USER_ID'; 			//required
$BOT_MODER_ID = array('MODERATOR_USER_ID');

$BOT_INDEX_FILE = '/index.php';

// include path
require_once ('include/constant.php');
require_once ('include/function.php');

// classes path
require_once ('classes/Connect.php');
require_once ('classes/API.php');
require_once ('classes/APICommands.php');
require_once ('classes/APIKeyboard.php');
require_once ('classes/APIInline.php');

// use classes
use classes\API;
use classes\APICommands;
use classes\APIKeyboard;
use classes\APIInline;

// add to variable
$API = new API;
$APICommands = new APICommands;
$APIKeyboard = new APIKeyboard;
$APIInline = new APIInline;

?>
