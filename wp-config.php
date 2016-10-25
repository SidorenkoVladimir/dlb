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
define('DB_NAME', 'dlb');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^T_{`bJ|Pg+Ji-MZr3BB2=b(Smn8uen7h=Lk]ZWLcsIvMOE3H~;Ln^(Jf(Rn86,W');
define('SECURE_AUTH_KEY',  'Va)Esj|t.LeBsj`S4%uJyyh8$Kuvp/;Ql5<dhf%XRBF^n? o|k{mu3P|n2Z`u){Z');
define('LOGGED_IN_KEY',    '?TM$ElA}@-#>}phZ;rFw:p(!:#VlpVozfFK3lJzJbzz`hK<73SRynIy9)b!6A}x0');
define('NONCE_KEY',        ']GItqknz],>Et<bB/??y`JZMRCK*<#`5TvWq2T/^acktpo_:Qad#T`KmTmZK3 !?');
define('AUTH_SALT',        'Y< T{;WR558K`!shfP*J8DdQ}I00P;-m ?St6j]Nm<yz`W[g$[r}qWJlJvT+J=7m');
define('SECURE_AUTH_SALT', '~<&<7nf>_ [(rqy[c7*0+t@TLx4^i[^u0;cUI41WMh9xL%o_ KSlKjVn*75ufq3p');
define('LOGGED_IN_SALT',   'b.q[>hSS4 >Jm8(PcxaqEWBNNMwPH90NC}p#Md`X)emW8)U6rWYg3H3Wu^5,B?v9');
define('NONCE_SALT',       ';~U8OLC4n.^$b=pO?+8WC~6=,b}}Oj$NCfK0x<%I75fdqo7DJ+_&#$*$,8-.NTvw');

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
