<?php

return [

    /*
    |--------------------------------------------------------------------------
    | DEBUG MODE
    |--------------------------------------------------------------------------
    | Debug mode for testing your project
    | Режим отладки для тестирования вашего проекта
    |
     */
    'debug'                      => false,
    /*
    |--------------------------------------------------------------------------
    | APP NAME
    |--------------------------------------------------------------------------
    | App name
    | Имя проекта
    |
     */
    'app_name'                   => null,
    /*
    |--------------------------------------------------------------------------
    | BOT NAME
    |--------------------------------------------------------------------------
    | Set bot name for Telegram SDK
    | Укажите имя бот для Telegram SDK
    |
     */
    'botname'                    => '',
    /*
    |--------------------------------------------------------------------------
    | CHAT ID
    |--------------------------------------------------------------------------
    | Chat id you can find out through @RawDataBot
    | Chat id можете узнать у чат бота @RawDataBot
    |
     */
    'chat_id'                    => '',
    /*
    |--------------------------------------------------------------------------
    | SAVE LOG
    |--------------------------------------------------------------------------
    | Save log in path storage/logs
    | Сохранять ошибки в storage/logs
    |
     */
    'save_log'                   => true,
    /*
    |--------------------------------------------------------------------------
    | PATH SAVE TEMPORARY LOG
    |--------------------------------------------------------------------------
    | Set path save log temporary files
    | Укажите путь сохранения временнего файла лога
    |
     */
    'path_save'                  => 'local',
    /*
    |--------------------------------------------------------------------------
    | LIMIT ERROR MESSAGE
    |--------------------------------------------------------------------------
    | Set limit message error. Default: 20
    | Укажите лимит длины сообщение ошибки. По умолчанию: 20
    |
     */
    'limit_error_message'        => 20,
    /*
    |--------------------------------------------------------------------------
    | DISABLE EXCEPTION TELEGRAM
    |--------------------------------------------------------------------------
    | Disable write exception Telegram in log file. Default: false
    | Отключение записи ошибок Telegram в лог файл. По умолчанию: false
    |
     */
    'disable_exception_telegram' => false,
];
