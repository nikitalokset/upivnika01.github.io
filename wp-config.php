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
define('DB_NAME', 'UPivnika');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'D.Z2<efQU[/zZ?7U^&Xk@agb FL*% Xk,n?kEynJnDUZ-D$gim[lEpTt,y0?u<1C');
define('SECURE_AUTH_KEY',  '4* C]%mD92Y0|F(1n:4v_oxO_Xt#v-qg&~h$V8YsNugIIz+I@YBAyITj(Zz4gCM{');
define('LOGGED_IN_KEY',    '8Cmv?=*u;xl$&coJON$a-*Bkt+ZXq<m%w-yquRmO|[}=w&MPi`1WG:vfHUv<uqC>');
define('NONCE_KEY',        ')u{hNJl]9+rY|mY?Ut5ps380W&Q|JI9wjsq7B:)&WEEWoFGn~HTP|T| ez9U]z;(');
define('AUTH_SALT',        '^v^kk7V^|lQy 4;QY1?^ @V)08L~rD8*k%;GVI =c8!{uM</NjDy>j0W3%hc>7+1');
define('SECURE_AUTH_SALT', 'rEb>gUlop^R@[][k1n*~X`i%Qm9rX.nn3-D4EdZO nse99-eX`:76HQ^xE? 9oa=');
define('LOGGED_IN_SALT',   '4WO0*#Q3?IgX9fZIbQL:]@,),-Cx;ujp!fs!uOL>G#*PJYo5cZVi5g4)ex}R?XZk');
define('NONCE_SALT',       '0pdD5sfXz%:CLN>g`<h{j$,l.ia)mW2d^(N4*DDCB;)P/-jzTF{.b%rM?yhZFY4Z');

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
