<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'otzyvy');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':=<Pnjs:aW}73oLU)#u8rnc>GJJxAJNMUm:s_DG.Ju28g3BS;C.glWQGKw*I%X9.');
define('SECURE_AUTH_KEY',  '4ODy6a5wa<wpIFUMgmOY+}0ZHb?+n)pOXSo?riu?3:0QTUfs)Ksw9K-__=$qkTlX');
define('LOGGED_IN_KEY',    'CnA=y#rEf 0#^KecLF]Gn}{iNHA iP4I6X%S>tw96cbNG#.O+ZRToCPuNI.4PMa5');
define('NONCE_KEY',        'Gg}9Z@.k2I,|K1AAqIm%/$`aLm,9-7(SG03;1/Tp2;|K|&k^c>*uhbGP=2C_n:dG');
define('AUTH_SALT',        'DMdGf{W%#]z%W#Lg;u=;Tm/hf= N;1]9VJW57=#`g>T(g9q@K@Yr~,/8ecM,Nqq1');
define('SECURE_AUTH_SALT', 'cY8G] VM;+lO622ofWd8r5_.K/!:|@R*z.?pk`F2jN5<^ZBR9M~/Lm*FcPejRnO,');
define('LOGGED_IN_SALT',   's8sSuu^;N-&|/a|G_xyxu/0gLR{zkg!Z0e|.$ GjHzKbF}{X[_~|RyXzv4v [8r~');
define('NONCE_SALT',       '[8-@|Ri=(t=pdPsSTEA=P=cE339Fkv_O2J8NKJo)(vx33)SB1k7;nD}Zq(<[d/wj');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
