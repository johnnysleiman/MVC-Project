<?php

namespace Models;


class ProvinceModel {


//name, cases_graph_path, deaths_graph_path for main page (graphs)
  public static function mainPageGraphs() {
    $dbh = \Database::getHandle();
    $statement = $dbh->prepare('SELECT cases_graph_path, deaths_graph_path FROM provinces WHERE name = :name');
    $statement->bindvalue('name' , 'lebanon' , \PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetchAll(\PDO::FETCH_OBJ);

    $result = [];
    foreach ($data as $row) {
      $result[] = $row;
    }
    return $result;
}

//name, cases_graph_path, deaths_graph_path for beirut (graphs)
      public static function beirutGraphs() {
        $dbh = \Database::getHandle();
        $statement = $dbh->prepare('SELECT * FROM provinces WHERE name = :name');
        $statement->bindvalue('name' , 'beirut' , \PDO::PARAM_STR);
        $statement->execute();
        $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

          $result = [];
          foreach ($data as $row) {
            $result[] = $row;
          }
          return $result;
        }


        //name, cases_graph_path, deaths_graph_path for mount-lebanon (graphs)
              public static function mountLebanonGraphs() {
                $dbh = \Database::getHandle();
                $statement = $dbh->prepare('SELECT * FROM provinces WHERE name = :name');
                $statement->bindvalue('name' , 'mount-lebanon' , \PDO::PARAM_STR);
                $statement->execute();
                $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

                  $result = [];
                  foreach ($data as $row) {
                    $result[] = $row;
                  }
                  return $result;
                }


  }






    //
    // $statement = $dbh->prepare('SELECT * FROM statistics WHERE province_name != :province_name AND date = :date');
    // $statement->bindvalue('province_name' , 'lebanon' , PDO::PARAM_STR);
    // $statement->bindvalue('date' , '2021-3-25' , PDO::PARAM_STR);
    // $statement->execute();
    // $data0 = $statement->fetchAll(PDO::FETCH_OBJ);
    //
    //
    // $statement = $dbh->prepare('SELECT * FROM statistics WHERE province_name = :province_name AND date = :date');
    // $statement->bindvalue('province_name' , 'lebanon' , PDO::PARAM_STR);
    // $statement->bindvalue('date' , '2021-3-25' , PDO::PARAM_STR);
    // $statement->execute();
    // $data = $statement->fetchAll(PDO::FETCH_OBJ);
