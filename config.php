<?php 

// Database information:
// for SQLite, use sqlite:/tmp/wolf.db (SQLite 3)
// The path can only be absolute path or :memory:
// For more info look at: www.php.net/pdo

// Database settings:
// Use Environment variables if they exist (Volt Grid)
$db_name = (getenv('DB_NAME') ? getenv('DB_NAME') : 'wordpress');
$db_table_prefix = (getenv('DB_TABLE_PREFIX') ? getenv('DB_TABLE_PREFIX') : '');
$db_user = (getenv('DB_USER') ? getenv('DB_USER') : 'root');
$db_password = (getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : '');
$db_host = (getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost');
$debug = (getenv('DEBUG') ? filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN) : false);
$url = (getenv('URL_PUBLIC') ? getenv('URL_PUBLIC') : '');


define('DB_DSN', "mysql:dbname=$db_name;host=$db_host;port=3306");
define('DB_USER', $db_user);
define('DB_PASS', $db_password);
define('TABLE_PREFIX', $db_table_prefix);

// Should Wolf produce PHP error messages for debugging?
define('DEBUG', $debug);

// Should Wolf check for updates on Wolf itself and the installed plugins?
define('CHECK_UPDATES', false);

// The number of seconds before the check for a new Wolf version times out in case of problems.
define('CHECK_TIMEOUT', 3);

// The full URL of your Wolf CMS install
define('URL_PUBLIC', $url);

// Use httpS for the backend?
// Before enabling this, please make sure you have a working HTTP+SSL installation.
define('USE_HTTPS', false);

// Use HTTP ONLY setting for the Wolf CMS authentication cookie?
// This requests browsers to make the cookie only available through HTTP, so not javascript for example.
// Defaults to false for backwards compatibility.
define('COOKIE_HTTP_ONLY', false);

// The virtual directory name for your Wolf CMS administration section.
define('ADMIN_DIR', 'admin');

// Change this setting to enable mod_rewrite. Set to "true" to remove the "?" in the URL.
// To enable mod_rewrite, you must also change the name of "_.htaccess" in your
// Wolf CMS root directory to ".htaccess"
define('USE_MOD_REWRITE', true);

// Add a suffix to pages (simluating static pages '.html')
define('URL_SUFFIX', '');

// Set the timezone of your choice.
// Go here for more information on the available timezones:
// http://php.net/timezones
define('DEFAULT_TIMEZONE', 'UTC');

// Use poormans cron solution instead of real one.
// Only use if cron is truly not available, this works better in terms of timing
// if you have a lot of traffic.
define('USE_POORMANSCRON', false);

// Rough interval in seconds at which poormans cron should trigger.
// No traffic == no poormans cron run.
define('POORMANSCRON_INTERVAL', 3600);

// How long should the browser remember logged in user?
// This relates to Login screen "Remember me for xxx time" checkbox at Backend Login screen
// Default: 1800 (30 minutes)
define ('COOKIE_LIFE', 1800);  // 30 minutes

// Can registered users login to backend using their email address?
// Default: false
define ('ALLOW_LOGIN_WITH_EMAIL', false);

// Should Wolf CMS block login ability on invalid password provided?
// Default: true
define ('DELAY_ON_INVALID_LOGIN', true);

// How long should the login blockade last?
// Default: 30 seconds
define ('DELAY_ONCE_EVERY', 30); // 30 seconds

// First delay starts after Nth failed login attempt
// Default: 3
define ('DELAY_FIRST_AFTER', 3);

// Secure token expiry time (prevents CSRF attacks, etc.)
// If backend user does nothing for this time (eg. click some link) 
// his token will expire with appropriate notification
// Default: 900 (15 minutes)
define ('SECURE_TOKEN_EXPIRY', 900);  // 15 minutes
