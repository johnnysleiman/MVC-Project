<?php

namespace Controllers;

class admincontroller {

  function index(){
    
    $model = new \Models\adminModel();
    $data = $model->fetchProvince();//stats for table below

    $model1 = new \Models\adminModel();
    $data1 = $model1->fetchForm();

\Views\admin::render($data, $data1);

}


function provinceInsert(){

$data1 =
      [
      'name' =>  $_POST['newProvince'],
      ];
  $model = new \Models\adminModel();
  $data = $model->adminProvinceInsert($data1);
  header('Location:/admin/index.php?url=/admin/index');

}

function provinceEdit(){
$data1 = [
  'old' => $_POST['oldProvince'],
  'new' => $_POST['updatedProvince']
];
$model = new \Models\adminModel();
$data = $model->adminProvinceEdit($data1);
header('Location:/admin/index.php?url=/admin/index');
}

function provinceDelete(){
  $name =
  [
    'name' => $_POST['removeProvince'],
  ];
  $model = new \Models\adminModel();
  $data = $model->adminProvinceDelete($name);
  header('Location:/admin/index.php?url=/admin/index');
}

function statsInsert(){
$data1 =
['date' =>  $_POST['addDate'],
'Cases' =>  $_POST['addCases'],
'Deaths' =>  $_POST['addDeaths'],
'Tests' =>  $_POST['addTests'],
'Dealta_diff' => $_POST['addDelta_diff'],
'Province_Name' =>  $_POST['addProvince']
];
$model = new \Models\adminModel();
$data = $model->adminStatsInsert($data1);
header('Location:/admin/index.php?url=/admin/index');
}

function statsEdit(){
$data1 = [
'oldDate' => $_POST['oldDate'],
'newDate' => $_POST['newDate'],
'newCases' => $_POST['newCases'],
'newDeaths' => $_POST['newDeaths'],
'newTests' => $_POST['newTests'],
'newDelta_diff' => $_POST['newDelta_diff'],
'oldProvinceName' => $_POST['oldProvinceName'],
'newProvinceName' => $_POST['newProvinceName']
];
$model = new \Models\adminModel();
$data = $model->adminStatsEdit($data1);
header('Location:/admin/index.php?url=/admin/index');
}

function statsDelete(){
$data1 = [
'provinceDelete' => $_POST['provinceDelete'],
'dateDelete' => $_POST['dateDelete']
];
$model = new \Models\adminModel();
$data = $model->adminStatsDelete($data1);
header('Location:/admin/index.php?url=/admin/index');
}




  }
