<?php

// composer
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/vendor/autoload.php';

// autoload
require_once __DIR__ . '/include/autoload.php';

// функции для разработчика
require_once __DIR__ . '/include/functions.php';


/*
 * Событие при выводе буферизированного контента.
 * Обработчик минифицирует html
 */
AddEventHandler('main', 'OnEndBufferContent', ['\Zarzandmkh\Events\Main', 'endBufferContentHandler']);

/*
 * Событие в выполняемой части пролога сайта
 * Обработчик активирует API
 */
AddEventHandler('main', 'OnBeforeProlog', ['\Zarzandmkh\Events\Main', 'initApi']);
