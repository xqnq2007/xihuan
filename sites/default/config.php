<?php

/* 
 * @CODOLICENSE
 */

defined('IN_CODOF') or die();

$installed=true;

function get_codo_db_conf() {


    $config = array (
  'driver' => 'mysql',
  'host' => '127.0.0.1',
  'database' => 'xihuan',
  'username' => 'root',
  'password' => '111111',
  'prefix' => '',
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
);

    return $config;
}

$DB = get_codo_db_conf();

$CONF = array (
    
  'driver' => 'Custom',
  'UID'    => '5a6dfc0b15866',
  'SECRET' => '5a6dfc0b158af',
  'PREFIX' => ''
);
