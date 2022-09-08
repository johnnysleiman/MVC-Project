<?php

namespace Models;


class contactusModel {


//name, cases_graph_path, deaths_graph_path for main page (graphs)
  public static function contactusInsert($data) {


    $dbh = \Database::getHandle();


    $statement = $dbh->prepare("INSERT INTO contactus (first,last,email,phone,gender,country,subject,comments)
    VALUES (:first , :last, :email, :phone, :gender, :country, :subject, :comments)");
    $statement->bindvalue(':first', $data['first_name'], \PDO::PARAM_STR);
    $statement->bindvalue(':last',$data['last_name'],\PDO::PARAM_STR);
    $statement->bindvalue(':email',$data['email'],\PDO::PARAM_STR);
    $statement->bindvalue(':phone',$data['phone'],\PDO::PARAM_STR);
    $statement->bindvalue(':gender',$data['gender'],\PDO::PARAM_STR);
    $statement->bindvalue(':country',$data['country'],\PDO::PARAM_STR);
    $statement->bindvalue(':subject',$data['subject'],\PDO::PARAM_STR);
    $statement->bindvalue(':comments',$data['comments'],\PDO::PARAM_STR);
    $res = $statement->execute();

    if ($res == false) {
      throw new \Exception('Saving data in DBMS failed. Check error logs for more information.');
    }




  }
}
