<?php

namespace Models;


class StatisticsModel {


//main page table for 25-3-2021 includes stats about beirut and mount lebanon
  public static function mainTable() {
    $dbh = \Database::getHandle();
    $statement = $dbh->prepare('SELECT * FROM statistics WHERE province_name != :province_name AND date = :date');
    $statement->bindvalue('province_name' , 'lebanon' , \PDO::PARAM_STR);
    $statement->bindvalue('date' , '2021-3-25' , \PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

    $result = [];
    foreach ($data as $row) {
      $result[] = $row;
    }
    return $result;

}


//stats in the main pages cases, deaths, tests
public static function mainStats() {
  $dbh = \Database::getHandle();
    $statement = $dbh->prepare('SELECT * FROM statistics WHERE province_name = :province_name AND date = :date');
    $statement->bindvalue('province_name' , 'lebanon' , \PDO::PARAM_STR);
    $statement->bindvalue('date' , '2021-3-25' , \PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

    $result = [];
    foreach ($data as $row) {
      $result[] = $row;
    }
    return $result;

  }



//date, cases, deaths, tests, deltadiff, province_name for beirut 6 rows
  public static function beirutTable() {
    $dbh = \Database::getHandle();
    $statement = $dbh->prepare('SELECT * FROM statistics WHERE province_name = :province_name');
    $statement->bindvalue('province_name' , 'beirut' , \PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

      $result = [];
      foreach ($data as $row) {
        $result[] = $row;
      }
      return $result;
    }

    //date, cases, deaths, tests, deltadiff, province_name for beirut 1 row
    public static function beirutStats() {
      $dbh = \Database::getHandle();
      $statement = $dbh->prepare('SELECT * FROM statistics WHERE province_name = :province_name AND date = :date');
      $statement->bindvalue('province_name' , 'beirut' , \PDO::PARAM_STR);
      $statement->bindvalue('date' , '2021-3-25' , \PDO::PARAM_STR);
      $statement->execute();
      $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

        $result = [];
        foreach ($data as $row) {
          $result[] = $row;
        }
        return $result;
      }





        //date, cases, deaths, tests, deltadiff, province_name for mount-lebanon 6 rows
          public static function mountLebanonTable() {
            $dbh = \Database::getHandle();
            $statement = $dbh->prepare('SELECT * FROM statistics WHERE province_name = :province_name');
            $statement->bindvalue('province_name' , 'mount-lebanon' , \PDO::PARAM_STR);
            $statement->execute();
            $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

              $result = [];
              foreach ($data as $row) {
                $result[] = $row;
              }
              return $result;
            }

            //date, cases, deaths, tests, deltadiff, province_name for mount-lebanon 1 row
            public static function mountLebanonStats() {
              $dbh = \Database::getHandle();
              $statement = $dbh->prepare('SELECT * FROM statistics WHERE province_name = :province_name AND date = :date');
              $statement->bindvalue('province_name' , 'mount-lebanon' , \PDO::PARAM_STR);
              $statement->bindvalue('date' , '2021-3-25' , \PDO::PARAM_STR);
              $statement->execute();
              $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

                $result = [];
                foreach ($data as $row) {
                  $result[] = $row;
                }
                return $result;
              }





}
