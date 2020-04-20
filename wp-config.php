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
define( 'AUTH_KEY',         'c!f9(FK x0G.T]m+:Akl%Uz0jP^&Z/ GH+$O`4?cjv5ET?G52fRxm/k!2:Y#v(nE' );
define( 'SECURE_AUTH_KEY',  '/cbqdt}^LBi,A[gQC`Y%?`_$G}zQQW^Mx-*@Dl1<$+M#sDXwt5E&uXgQ=~Ab-3;&' );
define( 'LOGGED_IN_KEY',    'OZe2E(ntRA#jMCt?Ci/vg1.#iFdPK:t9leEbZFu#?Ma9,c&t|X_@ue6i=;CiSEx?' );
define( 'NONCE_KEY',        ':L%z%G!_%9$%R*xfh^nx@`(i8bRdrwB58SJugbfYPD3oS!Y)/kicapOaw[T=UzI$' );
define( 'AUTH_SALT',        'P`3M57E)mCLJ!sgv#YDo@E>qipNuj{Lc+4cM}:B^El>~c4/#jM#a I`S;K(B2@]I' );
define( 'SECURE_AUTH_SALT', 'hg|1daVw%A-gI5[%yG4p$ZsLI&T;|ZoC):5CBUcHX[dV!MtXEod224f=t3z$pZ%[' );
define( 'LOGGED_IN_SALT',   'i 5KCaX*q?#/IKn)L/e5Yp0Ccc_S-e`Xf(9?}=26Xs8rc1X+Z{I_qx4V:mQY`Qo8' );
define( 'NONCE_SALT',       'U%!feJ^w]fY[;E>FBG~%^L1ofpY (fF [UR^ Z=ZFO5!_KrM}[nL!h[[XPez[m7G' );

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
