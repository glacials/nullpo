<?php

$dbms = 'mysqli';

$dburl = parse_url(getenv('CLEARDB_DATABASE_URL'));

$dbhost = $dburl['host'];
$dbport = $dburl['port'];
$dbname = ltrim($dburl['path'], '/');
$dbuser = $dburl['user'];
$dbpasswd = $dburl['pass'];

$table_prefix = 'phpbb_';
$acm_type = 'file';
$load_extensions = '';

@define('PHPBB_INSTALLED', true);
// @define('DEBUG', true);
// @define('DEBUG_EXTRA', true);
?>
