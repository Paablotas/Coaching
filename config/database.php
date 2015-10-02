<?php return array (
  'fetch' => 8,
  'default' => 'mysql',
  'connections' => 
  array (
    'sqlite' => 
    array (
      'driver' => 'sqlite',
      'database' => '/Library/WebServer/Documents/blog/storage/database.sqlite',
      'prefix' => '',
    ),
    'mysql' => 
    array (
      'driver' => 'mysql',
      'host' => 'localhost',
      'database' => 'pablo',
      'username' => 'adminBLnjhrh',
      'password' => 'Wv5WJ5PaBkEa',
      'unix_socket' => '/var/lib/openshift/560ebee70c1e665eb400001c/mysql//socket/mysql.sock'
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix' => 'blog_',
    ),
    'pgsql' => 
    array (
      'driver' => 'pgsql',
      'host' => 'localhost',
      'database' => 'forge',
      'username' => 'forge',
      'password' => '',
      'charset' => 'utf8',
      'prefix' => '',
      'schema' => 'public',
    ),
    'sqlsrv' => 
    array (
      'driver' => 'sqlsrv',
      'host' => 'localhost',
      'database' => 'database',
      'username' => 'root',
      'password' => '',
      'prefix' => '',
    ),
  ),
  'migrations' => 'migrations',
  'redis' => 
  array (
    'cluster' => false,
    'default' => 
    array (
      'host' => '127.0.0.1',
      'port' => 6379,
      'database' => 0,
    ),
  ),
);
