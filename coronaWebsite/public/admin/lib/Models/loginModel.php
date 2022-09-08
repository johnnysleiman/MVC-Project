<?php

namespace Models;


class loginModel {


//name, cases_graph_path, deaths_graph_path for main page (graphs)
  public static function fetchCredentials($data1) {

    $dbh = \Database::getHandle();
    $statement = $dbh->prepare('SELECT username, password FROM login');
    $statement->execute();
    $data = $statement->fetchAll(\PDO::FETCH_ASSOC);

    return $data;

    }



    }
