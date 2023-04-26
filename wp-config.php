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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'yWwqp0g3!Wm&}QEt14-46h9FT9r0tz:F3tcNKF<9)IGIfMkg3P~_:/P:x;HKMMb4' );
define( 'SECURE_AUTH_KEY',  'hi|)UF:8ejKTwf8bVQi:ABJO+KHo-.<QwQ0cGI|_%p^BzB&Z7US{n]XBt3A;,fZ6' );
define( 'LOGGED_IN_KEY',    '6Jm(Bf#=paM2hnNm5}d]%dx.L5%BQOWG(&4]t{z#`ckD1Ou<n 7]tDTNTPw#FL}}' );
define( 'NONCE_KEY',        'td-wUd=z^jR>N*`BSZf$v{gR34gN7h>k*)2Vx%}16l_`h?j64>{#ydnFJ ]*/I*Z' );
define( 'AUTH_SALT',        'tf{q n^]/t+ey`qJ^.vJ!p!*}agj<yh*%i[g99m3{9ppI2Hx3cJ}hoz=Bo+CC8*S' );
define( 'SECURE_AUTH_SALT', '%&NZ )>JuyyaHo|UZQu:2|j)4<fO+!X<2Nw%Msq6mv?p?D>}t#1S1}YmYBr`Tu}a' );
define( 'LOGGED_IN_SALT',   '<s+B5lB.031p0zV=Fe^XB:m904509M}Mn&j$bH$v^Z`?Qkpp,2ed,7g8Q9d(69cg' );
define( 'NONCE_SALT',       'sTwEY:b.nMc3OQ5Q)}7&T#~]s!?$zC4KIqCGY%PJS&w%oLJM.Jt<Ljc#Cz-Ci+ca' );

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
