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
define( 'DB_NAME', 'wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '~YX1:Lll&;|)}m@7bV+ZM.[czm9h$l:ThJ4*PvqPg(fbT%aIHUPK*I5WRJW{KgY@' );
define( 'SECURE_AUTH_KEY',  'C[aqtOhC$qtxEMF*~3U|k/SHJWl-{>2k#9H41/Ddh%D(wcEj<xkUuVc>=2ym@~ 7' );
define( 'LOGGED_IN_KEY',    'dNE=l7]b-X/fq4)g*$rnaWBHxm4U1pxV3`gZtzRN}i&y[8_@=V2x&?qIzh*^v^Pu' );
define( 'NONCE_KEY',        '!bk1kzM=OZR@$&<~}N~.3/Tc5 -8WpHG}Q6tzU|#l|ji+elO?w&w<Q&bGj]:3=7N' );
define( 'AUTH_SALT',        'g{!k4(()|LcJwc>~3w btV??*WUu;7 y,(R<Q2jhQ)KP^new|8i[6 Y#kD]j$d@e' );
define( 'SECURE_AUTH_SALT', ';Nobqf`/<LlX+&e-~Lj6Q@w3m+9?h(h,pR`<F6U;r*>L9AZV(dnCv_yPdNDs.[VA' );
define( 'LOGGED_IN_SALT',   'd%j$(m|FxG<R? }/Zh*vS8F7:{w!5*o+J/h&@EJ90KsD<8X-u*AR[av}xw`7md2q' );
define( 'NONCE_SALT',       '7=B7O0S^DYx@S@$dnE842H_J{aGR*sF+SUnG+m17~5J>sMXTwBtJ|oS[l4O7du|$' );

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
