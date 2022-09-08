<?php

namespace Controllers;

class mountlebanonController {

  function index(){


  $model = new \Models\StatisticsModel();
  $data0 = $model->mountLebanonTable();//stats for table below

  $model1 = new \Models\StatisticsModel();
  $data1 = $model1->mountLebanonStats();//stats for main page up

  $provinceModel = new \Models\ProvinceModel();
  $data = $provinceModel->mountLebanonGraphs();


    \Views\mountLebanon::render($data,$data1,$data0);
  }

}
