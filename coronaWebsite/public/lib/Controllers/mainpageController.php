<?php

namespace Controllers;

class mainpagecontroller {

  function index(){


  $model = new \Models\StatisticsModel();
  $data0 = $model->mainTable();//stats for table below

  $model1 = new \Models\StatisticsModel();
  $data1 = $model1->mainStats();//stats for main page up

  $provinceModel = new \Models\ProvinceModel();
  $data = $provinceModel->mainPageGraphs();


    \Views\main::render($data,$data1,$data0);
  }

}
