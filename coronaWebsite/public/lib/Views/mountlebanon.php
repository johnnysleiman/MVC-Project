<?php
namespace Views;

class mountLebanon {

  public static function render($data,$data1,$data0) {

print <<<HTHT
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COVID Mount-Lebanon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #nav {
          background-color: #343a40;
        }

        td{
        border-bottom: 1px solid #2f353a;
        padding: 10px;
        text-align: left;
        font-size: 2em;

        }


        table {
        border-collapse:collapse;
        width: 1000px;
        margin-top: 10px;
        }
    </style>
  </head>
  <body class="bg-dark">

  <nav id="nav" class="navbar navbar-expand-lg navbar-light text-white">


<div class="container-fluid">

  <a class="navbar-brand text-white" href="#">COVID-19 Lebanon</a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item h5 mt-2">
        <a class="nav-link active text-warning" aria-current="page" href="index.php?url=/mainpage/index">Home</a>
      </li>
      <li class="nav-item h5 mt-2">
        <a class="nav-link text-danger" href="index.php?url=/beirut/index">Beirut</a>
      </li>
      <li class="nav-item h5 mt-2">
        <a class="nav-link text-info" href="index.php?url=/mountlebanon/index">Mount-Lebanon</a>
      </li>
      <li class="nav-item h5 mt-2">
        <a class="nav-link text-success" href="/index.php?url=/contactus/index">Contact Us</a>
      </li>
      <li class="nav-item h5 mt-2">
        <a class="nav-link text-secondary" href="admin/index.php?url=/login/index">ADMIN</a>
      </li>
    </ul>

    <span class="navbar-text text-white">
      Mount-Lebanon COVID-19 Statistics
    </span>
  </div>
</div>
</nav>



<div class="text-center text-white p-5 mt-5" style="font-size:2em; font-weight: lighter;">
            <p style="margin-bottom:-55px;"> CASES </p>
             <p class="text-warning mt-0" style="font-size: 5em;">
HTHT;
        foreach ($data1 as $row) {
          echo $row['cases'];
        }
print <<<HTHT
              </p>



              <p style="margin-bottom:-55px;"> DEATHS </p>
              <p class="text-danger" style="font-size: 5em;">
HTHT;
      foreach ($data1 as $row) {
        echo $row['deaths'];
      }
print <<<HTHT
              </p>



              <p style="margin-bottom:-55px;"> TESTS MADE </p>
              <p class="text-info pt-3" style="font-size: 5em;">
HTHT;
      foreach ($data1 as $row) {
        echo $row['tests'];
      }
print <<<HTHT
              </p>


      </div>


      <div class="text-center text-white mt-5" style="font-size:3em; font-weight: lighter;">

            <p style="margin-bottom:-40px;">Cases Over Time</p><br>
            <img src="
HTHT;
        foreach ($data as $row) {
          echo $row['cases_graph_path'];
        }
print <<<HTHT
            "alt="">


  </div>



  <div class="text-center text-white mt-5" style="font-size:3em; font-weight: lighter;">

    <p style="margin-bottom:-40px;">Deaths Over Time</p><br>
    <img src="
HTHT;
      foreach ($data as $row) {
        echo $row['deaths_graph_path'];
      }
print <<<HTHT
              " alt="">

          </div>


          <div class="text-center text-white mt-5" style="font-size:3em; font-weight: lighter;">
                    COVID-19 Statistics In Mount-Lebanon
          </div>


          <div class="text-center text-white mt-5" style="font-weight: lighter;">

              <table style="margin-left:auto;margin-right:auto;margin-bottom:25px;">
                <tr>
                  <td class="text-white">Province</td>
                  <td class="text-warning">Cases</td>
                  <td class="text-danger">Deaths</td>
                  <td class="text-info">Tests</td>
                  <td class="text-success">Delta difference</td>
                </tr>







            <tr>


HTHT;         if ($row=$data0[1]){
print <<<HTHT
              <td class="text-white">
HTHT;
echo $row['date'];
print <<<HTHT
        </td>
              <td class="text-warning">
HTHT;
echo $row['cases'];
print <<<HTHT
        </td>
              <td class="text-danger">
HTHT;
echo $row['deaths'];
print <<<HTHT
              </td>
              <td class="text-info">
HTHT;
echo $row['tests'];
print <<<HTHT
                      </td>
              <td class="text-success">
HTHT;
echo $row['delta_diff'];
print <<<HTHT
                      </td>
HTHT;
              }
print <<<HTHT
            </tr>

            HTHT;         if ($row=$data0[2]){
            print <<<HTHT
                          <td class="text-white">
            HTHT;
            echo $row['date'];
            print <<<HTHT
                    </td>
                          <td class="text-warning">
            HTHT;
            echo $row['cases'];
            print <<<HTHT
                    </td>
                          <td class="text-danger">
            HTHT;
            echo $row['deaths'];
            print <<<HTHT
                          </td>
                          <td class="text-info">
            HTHT;
            echo $row['tests'];
            print <<<HTHT
                                  </td>
                          <td class="text-success">
            HTHT;
            echo $row['delta_diff'];
            print <<<HTHT
                                  </td>
            HTHT;
                          }
            print <<<HTHT
                        </tr>



                        HTHT;         if ($row=$data0[3]){
                        print <<<HTHT
                                      <td class="text-white">
                        HTHT;
                        echo $row['date'];
                        print <<<HTHT
                                </td>
                                      <td class="text-warning">
                        HTHT;
                        echo $row['cases'];
                        print <<<HTHT
                                </td>
                                      <td class="text-danger">
                        HTHT;
                        echo $row['deaths'];
                        print <<<HTHT
                                      </td>
                                      <td class="text-info">
                        HTHT;
                        echo $row['tests'];
                        print <<<HTHT
                                              </td>
                                      <td class="text-success">
                        HTHT;
                        echo $row['delta_diff'];
                        print <<<HTHT
                                              </td>
                        HTHT;
                                      }
                        print <<<HTHT
                                    </tr>



                                    HTHT;         if ($row=$data0[4]){
                                    print <<<HTHT
                                                  <td class="text-white">
                                    HTHT;
                                    echo $row['date'];
                                    print <<<HTHT
                                            </td>
                                                  <td class="text-warning">
                                    HTHT;
                                    echo $row['cases'];
                                    print <<<HTHT
                                            </td>
                                                  <td class="text-danger">
                                    HTHT;
                                    echo $row['deaths'];
                                    print <<<HTHT
                                                  </td>
                                                  <td class="text-info">
                                    HTHT;
                                    echo $row['tests'];
                                    print <<<HTHT
                                                          </td>
                                                  <td class="text-success">
                                    HTHT;
                                    echo $row['delta_diff'];
                                    print <<<HTHT
                                                          </td>
                                    HTHT;
                                                  }
                                    print <<<HTHT
                                                </tr>


                                                HTHT;         if ($row=$data0[5]){
                                                print <<<HTHT
                                                              <td class="text-white">
                                                HTHT;
                                                echo $row['date'];
                                                print <<<HTHT
                                                        </td>
                                                              <td class="text-warning">
                                                HTHT;
                                                echo $row['cases'];
                                                print <<<HTHT
                                                        </td>
                                                              <td class="text-danger">
                                                HTHT;
                                                echo $row['deaths'];
                                                print <<<HTHT
                                                              </td>
                                                              <td class="text-info">
                                                HTHT;
                                                echo $row['tests'];
                                                print <<<HTHT
                                                                      </td>
                                                              <td class="text-success">
                                                HTHT;
                                                echo $row['delta_diff'];
                                                print <<<HTHT
                                                                      </td>
                                                HTHT;
                                                              }
                                                print <<<HTHT
                                                            </tr>

                                                            </table>

                                                            <img src="images/home.png" alt="" usemap="#myhome-mount-lebanon" style="width:42px; height:42px;">
                                                            <map id="myhome-mount-lebanon" name="myhome-mount-lebanon">
                                                              <area shape="circle" coords="256,256,512" href="index.php?url=/mainpage/index" alt="">
                                                            </map>
                                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                                                      </body>
                                                    </html>
HTHT;

  }
}
