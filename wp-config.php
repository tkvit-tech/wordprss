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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'superpass' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '/;!w~(,(bXE4j,qG0I?C /ftE-J#7DqU#[/RoUD_r#i[Vt?T&-%]Y46BvoCef3*H' );
define( 'SECURE_AUTH_KEY',  'i&$X $X;MSz)Cg&#i`1<oG+~ZN7P<jaX=aJZxr%}c7D2evo~K>ygkRQ-{z_/_9m.' );
define( 'LOGGED_IN_KEY',    '}K_|GN_y{02!h7hOg8?o/l_<=4D] lAQ$L`OD|&TiaKS_QwUMRKoAw5U[4_l2IqB' );
define( 'NONCE_KEY',        'HwfL`JrD,W;R<W8@:d0^e*=ebcoeU30dPDI8eCmMJ d/vQUfq?qLoF0s`Y(YFxed' );
define( 'AUTH_SALT',        '?f$4lA%6VORPniOB5;^-EkJqXzpoM_p^A1kDT9E4`Iv4L!xkadJ(tOP$L@!OE&gz' );
define( 'SECURE_AUTH_SALT', 'O4#4z!aQzVi_{mEL]|4`NmhF;|#Rm+B4i@.!#pf@BhNIX*FUtP y{;]D|W_9G7[b' );
define( 'LOGGED_IN_SALT',   ' *9*+$v66kl~fTZuiCvWkD]hT/OD$u_4t6n(dDA`+x##ye]b<wh7^FFZ.Z-oKoky' );
define( 'NONCE_SALT',       'gG,}Qi`mT%a!iciY+CUlBG,TVF$N#W)4D[.>2w<dg!G(@lc[n^okc^Z=oL8y:ge5' );

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

define('FS_METHOD','direct');