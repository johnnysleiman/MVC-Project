<?php

namespace Controllers;

class beirutController {

  function index(){


  $model = new \Models\StatisticsModel();
  $data0 = $model->beirutTable();//stats for table below

  $model1 = new \Models\StatisticsModel();
  $data1 = $model1->beirutStats();//stats for main page up

  $provinceModel = new \Models\ProvinceModel();
  $data = $provinceModel->beirutGraphs();


    \Views\Beirut::render($data,$data1,$data0);
  }

}
