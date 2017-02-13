<?php
// {{ ansible_managed }}
define('DB_NAME', '{{ wordpress_db_name }}');
define('DB_USER', '{{ wordpress_db_user_name }}');
define('DB_PASSWORD', '{{ wordpress_db_user_password }}');
define('DB_HOST', '{{ wordpress_db_host}}');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

{{ wordpress_unique_keys }}

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
