<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Loader;
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/autoload.php');
if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/constants.php")) {
    require_once 'include/constants.php';
}
if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/functions.php")) {
    require_once 'include/functions.php';
}
if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/include/event_handlers.php")) {
    require_once 'include/event_handlers.php';
}