<?php

namespace Models;


class adminModel {


//name, cases_graph_path, deaths_graph_path for main page (graphs)
  public static function adminProvinceInsert($data1) {

    $dbh = \Database::getHandle();
    $statement = $dbh->prepare("INSERT INTO provinces (name, cases_graph_path, deaths_graph_path)
    VALUES (:name , 'NULL', 'NULL')");
    $statement->bindvalue(':name', $data1['name'],\PDO::PARAM_STR);
    $res=$statement->execute();

    if ($res == false) {
      throw new \Exception('Saving data in DBMS failed. Check error logs for more information.');
    }
  }

  public static function adminProvinceEdit($data1){
    $dbh = \Database::getHandle();
    $statement = $dbh->prepare('UPDATE provinces
    SET name = :new, cases_graph_path = NULL, deaths_graph_path = NULL
    WHERE name = :old');
    $statement->bindvalue(':new', $data1['new'], \PDO::PARAM_STR);
    $statement->bindvalue(':old', $data1['old'], \PDO::PARAM_STR);
    $res=$statement->execute();
    if ($res == false) {
      throw new \Exception('Saving data in DBMS failed. Check error logs for more information.');
    }
  }

  public static function adminProvinceDelete($name){
  $dbh = \Database::getHandle();
  $statement = $dbh->prepare('DELETE FROM provinces where name = :name');
  $statement->bindvalue(':name', $name['name'], \PDO::PARAM_STR);
  $statement->execute();
  }

public static function adminStatsInsert($data1) {
  $dbh = \Database::getHandle();
  $statement = $dbh->prepare("INSERT INTO Statistics (date, cases, deaths, tests, delta_diff, province_name)
  VALUES (:date , :cases, :deaths, :tests, :delta_diff, :province_name)");
  $statement->bindvalue(':date', $data1['date'], \PDO::PARAM_STR);
  $statement->bindvalue(':cases', $data1['Cases'], \PDO::PARAM_STR);
  $statement->bindvalue(':deaths', $data1['Deaths'], \PDO::PARAM_STR);
  $statement->bindvalue(':tests', $data1['Tests'], \PDO::PARAM_STR);
  $statement->bindvalue(':delta_diff', $data1['Dealta_diff'], \PDO::PARAM_STR);
  $statement->bindvalue(':province_name', $data1['Province_Name'], \PDO::PARAM_STR);
  $statement->execute();
}

public static function adminStatsEdit($data1){
  $dbh = \Database::getHandle();
  $statement = $dbh->prepare('UPDATE statistics
  SET date = :newDate, cases = :newCases, deaths = :newDeaths, tests= :newTests, delta_diff= :newDelta_diff, province_name = :newProvinceName
  WHERE province_name = :oldProvinceName AND date = :oldDate');
  $statement->bindvalue(':newDate', $data1['newDate'], \PDO::PARAM_STR);
  $statement->bindvalue(':newCases', $data1['newCases'], \PDO::PARAM_STR);
  $statement->bindvalue(':newDeaths', $data1['newDeaths'], \PDO::PARAM_STR);
  $statement->bindvalue(':newTests', $data1['newTests'], \PDO::PARAM_STR);
  $statement->bindvalue(':newDelta_diff', $data1['newDelta_diff'], \PDO::PARAM_STR);
  $statement->bindvalue(':newProvinceName', $data1['newProvinceName'], \PDO::PARAM_STR);
  $statement->bindvalue(':oldProvinceName', $data1['oldProvinceName'], \PDO::PARAM_STR);
  $statement->bindvalue(':oldDate', $data1['oldDate'], \PDO::PARAM_STR);
  $statement->execute();
}

public static function adminStatsDelete($data1){
$dbh = \Database::getHandle();
$statement = $dbh->prepare('DELETE FROM statistics where province_name = :provinceDelete AND date = :dateDelete');
$statement->bindvalue(':provinceDelete', $data1['provinceDelete'], \PDO::PARAM_STR);
$statement->bindvalue(':dateDelete', $data1['dateDelete'], \PDO::PARAM_STR);
$statement->execute();

}

  public static function fetchProvince() {
  $dbh = \Database::getHandle();
  $statement = $dbh->prepare('SELECT name FROM provinces');
  $statement->execute();
  $provinces = $statement->fetchAll(\PDO::FETCH_ASSOC);
  $result = [];
  foreach ($provinces as $row) {
    $result[] = $row;
  }
  return $result;
}


public static function fetchForm() {
$dbh = \Database::getHandle();
$statement = $dbh->prepare('SELECT * FROM contactus');
$statement->execute();
$form = $statement->fetchAll(\PDO::FETCH_ASSOC);
$result = [];
foreach ($form as $row) {
  $result[] = $row;
}
return $result;
}




}
