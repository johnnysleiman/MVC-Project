<?php

namespace Controllers;

class logincontroller {

  function index(){



\Views\login::render($data=false);

}


function validateCredentials(){

$data1 =
      [
      'username' => $_POST['username'],
      'password' => $_POST['password']
      ];


  $model = new \Models\loginModel();
  $data = $model->fetchCredentials($data1);



  if ($data1==$data[0]){

    header('Location:/admin/index.php?url=/admin/index');


  }else{
    header('Location:/index.php?url=/mainpage/index');
  }

exit;

}


function logout(){
  header('Location:/index.php?url=/mainpage/index');
}



  }
