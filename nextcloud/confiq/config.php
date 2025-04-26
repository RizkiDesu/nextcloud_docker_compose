<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'passwordsalt' => 'rDOCMl0euDokvHSasnztAz/T/9Rznz',
  'secret' => 'wVJHGwAaiSv+x6q+1FHlJ/+MvRAYzqM9f/MKBI+8WZUZzlZ0',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'localhost:8080',
    2 => '0.0.0.0:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '31.0.4.1',
  'overwrite.cli.url' => 'http://localhost',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'ds=nextcloud@2025',
  'installed' => true,
  'instanceid' => 'oci236z34hi3',
);
