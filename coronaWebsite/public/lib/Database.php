<?php


class Database {
  private static $dbh = false;

  private function __construct() {
    $config = \Config::getConfig();
    self::$dbh = new \PDO('mysql:host=' .$config['host'] . ';dbname=' .$config['schema'], $config['dbuser'], $config['dbpass']);
  }

  public static function getHandle() {
    if (self::$dbh == false) {
      $db = new \Database();

    }
    return self::$dbh;
  }



}
