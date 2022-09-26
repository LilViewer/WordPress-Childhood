<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z|LxlHVJ)P=~ }8sS&sS6W!+f%k6EJmR+EsCrT>n%4O,8wow!;fr9hs7tsH{=%T6' );
define( 'SECURE_AUTH_KEY',  'o0!d#0-h?rqi!q#T8Z(dBC$m{8J9ljry6lpC>Y,RcF[cwEnx!24o7t2DxC-1aT3m' );
define( 'LOGGED_IN_KEY',    'hd9|PVe09;IGJkzS1zkvEQ[KNamDHQ{V}ddyon4~(NpVdR!6^ihvJFwX42!X&B)E' );
define( 'NONCE_KEY',        '2SX@Pco+U-7MTbBFqbzZolL}[<cw ZY;(ViiD!#396 ae}q{^8]V4WOPPGSo{Ykc' );
define( 'AUTH_SALT',        '*n9?si#|!ggO=@T<;5F:>K2Yl`5PzQ6TscBoZ=QT2N abjPhFE%#(=STI5Lt3K]x' );
define( 'SECURE_AUTH_SALT', '][SXfkyD_O2aj%+gk-LhhC7&-<V>-&W:~d]i{.7<%Z+,kWM2pHv|eX[qO;:n[is6' );
define( 'LOGGED_IN_SALT',   'ZxLPG2=(j;C:oq[sf-}/m[@TnnH@KKepac!jZd.c]/Xa*RH&0:CT~sM{V*oKr![g' );
define( 'NONCE_SALT',       'Ax0zP4e@%}f*gas:9oppJz.mM=uhSiwoQl^{eg0tddl1C&2@THNHQaP*|vMd%bj,' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
