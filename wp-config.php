<?php
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
define( 'DB_NAME', 'wordpress' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*)<qQX,^ :?c4o7B/6n?Vy_@aVcw0?9[irreb),1Vg=y[T04x:h_m[:#,9~|<3K;' );
define( 'SECURE_AUTH_KEY',  '`jF5hM~u!P+v(_n|p>;UjB__xZ2uE8~r3B@`HixIaYLH&_28@#[1bFgy(ke2-|b&' );
define( 'LOGGED_IN_KEY',    '-_*BEQ3mnl<x[E0|qQ(JiOX!#n3Y*PQooJLwo>.o5A^a&M*Uf[kuw/*SB/p$PbLd' );
define( 'NONCE_KEY',        ',~s4no ((jf(3k$OmL.(/A,3S@!aMM_Np&c7:j&( t3ad]9OSD`pY*YLRh{[caZc' );
define( 'AUTH_SALT',        '4|QQw]P)]AV>O%*|0==*]o_85y08Ak)==<+RA)v*u%W#io=Bu7EUKc H6YkQFkD|' );
define( 'SECURE_AUTH_SALT', '<i?^NzZpJ}n^ND-V`sOY)YtrrPe.`~iirH:O<YQL~.c?e, D3zrsCuPWlFLqz^Y.' );
define( 'LOGGED_IN_SALT',   '/>NvA9GhhNM/~yP?PLxr7t]3~p3VC4JLVlH:@}U,HN=#Ess&# <KH:J!1b;A>u#C' );
define( 'NONCE_SALT',       'QpV]+nwr_0wwCFHfk5jDoV,$oy$5Q]6p@av4o#0lE--YkAwn 2 nB$]g)]eF7L$N' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
