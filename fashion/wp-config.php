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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'fashion' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~rsQxP+xlv3:4^yt&et;C`hRPMBwp*O%hf<)N~?E8psJ8J[msop#b1X=+ R=St# ' );
define( 'SECURE_AUTH_KEY',  'hX=qJ`es;X6o98u4`P!Cbg^9fQuWezR&zXe!25vj?~5k@up.N%W5#@#PnIe1jHK#' );
define( 'LOGGED_IN_KEY',    'cd+CM(`zxr!NGq+*BWDD8hGSRxFJ9MqZXSd%;xK4:[;w>5{Ken+:X5yjfj~/yZW,' );
define( 'NONCE_KEY',        'MT+D:+&V%fN&qZ*~4Ne=eq>/nLx<LLY?gn}155VICqg5Ke9PR0!_=w,%zR;t(D63' );
define( 'AUTH_SALT',        '^[Jz7h2}+{%p7kQ6Gq]B e;Bue 8Uf=n&WZ >=,y1[2(e.g@cgJ`}Q.r#.kHWL%B' );
define( 'SECURE_AUTH_SALT', 'l&Pi58aW+GmZ`nVAfv>K3ssoG,{k<I{#kB`pQc^%1nI5HeiJZ&C{d3&CQ^LsriQ_' );
define( 'LOGGED_IN_SALT',   'W;Ma6A4y3.O+s+{>|No|Bv$vhSg7aq+9:D%$7hM^H;y?yi6{rv[wa`46=YpPK/Gk' );
define( 'NONCE_SALT',       '*Y0S^[Y~lI.l#hA:$Ql(m.4dA$Fh4*2cpYlF*!Ef~JRZCw^RBGdpEJ|v=q30iU^T' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';


define('WP_ALLOW_REPAIR', true);