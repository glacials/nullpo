<?php

$dbms = 'mysqli';

$dburl = parse_url($_ENV['CLEARDB_DATBASE_URL']);

$dbhost = $dburl['host'];
$dbport = $dburl['port'];
$dbname = $dburl['path'];
$dbuser = $dburl['user'];
$dbpasswd = $dburl['pass'];

$table_prefix = 'phpbb_';
$acm_type = 'file';
$load_extensions = '';

@define('PHPBB_INSTALLED', true);
// @define('DEBUG', true);
// @define('DEBUG_EXTRA', true);
?>
