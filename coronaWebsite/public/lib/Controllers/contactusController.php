<?php

namespace Controllers;

class contactuscontroller {

  function index(){

\Views\contactus::render($data);

}


function insert(){

$data =

      [
      'first_name' =>  $_POST['fname'],
      'last_name' => $_POST['lname'],
      'email' => $_POST['email'],
      'phone' => $_POST['phone'],
      'gender' => $_POST['gender'],
      'country' => $_POST['Country'],
      'subject' => $_POST['subject'],
      'comments' => $_POST['comment']
];
  $model = new \Models\contactusModel();
  $data = $model->contactusInsert($data);
  header('Location:index.php?url=/mainpage/index');
  exit;
}


  }
