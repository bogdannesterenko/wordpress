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
define( 'DB_NAME', 'wp_bt' );

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
define( 'AUTH_KEY',         'MKSjpYM h[qn7<pb.uB|r-zvttXXjXhPT@Ko3U7U TZX+UM`$=X SfXeoX,|S=Go' );
define( 'SECURE_AUTH_KEY',  'a5Rz.z~RSWZqz2tYHKi*#%1L^8g.{xiI1rIc8GGCKj5_LK$G!H SXTGvmOUuGO,b' );
define( 'LOGGED_IN_KEY',    '.*3VsHf{ND41.GPazg,xmFds%E_-|,d8C+TtDdoAj;C4e[b$`3vAm`r#RSYvTr4%' );
define( 'NONCE_KEY',        ')`[a)*@;VK/P_XY*wDbrD8k0;$-eXXo7`?BiZ6YEl#pF_3^yJ#&8wr$EzfZ@TC24' );
define( 'AUTH_SALT',        'n_A0bt MMB-5<;RGVpoINL(jv`K8O-D}%akWyB_aCn#*fWjiaf*8iJ~a7h5<|#F!' );
define( 'SECURE_AUTH_SALT', '2;%9O=~jFjf}&fh6]=1v1MX9HEO{P7LKOGv{gz-%l25nGzq-YcewF(W4U?zV0c3(' );
define( 'LOGGED_IN_SALT',   'q^Cr+hN<;r*W]C`!$HMJzsi%n@%MxrYK2C Z(/c14xHc`W3*Cn-3hS-.DH7Hh!]>' );
define( 'NONCE_SALT',       'ifCs0gr~N1W5<=ZdULVb4ymEw|w`_FBD39- {+SPb2f|ySiq^2_CWe~akkHZ5w_f' );

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
