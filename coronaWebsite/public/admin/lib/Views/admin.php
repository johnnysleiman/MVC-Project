<?php
 namespace Views;




 class admin {
   public static function render($data,$data1) {
     $provinceLenght = count($data);
     $formLenght = count($data1);


     print <<<HTHT

     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>
         <meta charset="utf-8">
         <title>Admin Page</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

         <style>
             #nav {
               background-color: #343a40;
             }

             td{
             border-bottom: 1px solid #2f353a;
             padding: 10px;
             text-align: left;
             font-size: 1.5em;

             }


             table {
             border-collapse:collapse;
             width: 1000px;
             margin-top: 10px;
             }
         </style>

       </head>
       <body class="bg-dark">



<nav id="nav" style="background-color: #343a40;"class="navbar navbar-expand-lg navbar-light text-white">
       <div class="container-fluid">
       <a class="navbar-brand text-white">ADMIN</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item h5 mt-2">
             <a class="nav-link active text-secondary" aria-current="page" href="/admin/index.php?url=/login/logout">Logout<a/>
           </li>
         </ul>
         <span class="navbar-text text-white">
           Admin Page
         </span>
       </div>
       </div>
       </nav>

<div class="container mx-auto" style="box-shadow: 0 10px 30px 0px rgba(0,0,0,1)"; height="72";>
      <div class="py-5">

      <div class="col-md-8 order-md-1 text-white">
      <h1 class="mb-3 text-left">Provinces</h1>
<br>

      <h4 class="mb-3">Add Provinces</h4>
          <form class="needs-validation" action="/admin/index.php?url=/admin/provinceInsert" method="post" enctype="multipart/form-data">
           <div class="row">
             <div class="col-md-5 mb-3">
             <label for="newProvince">Add Province</label>
             <input class="form-control" type="text" name="newProvince" maxlength="20" size="32" placeholder="Enter New Province Name"><br>
             <input class="btn btn-success btn-lg btn-block" type="submit" value="Add">
             </div>
           </div>
           </form>
           <br>

<h4 class="mb-3">Modify Provinces</h4>
       <form class="needs-validation" action="/admin/index.php?url=/admin/provinceEdit" method="post" enctype="multipart/form-data">
       <div class="row">
            <div class="col-md-6 mb-3">
            <label for="oldProvince">Edit Province</label>
            <input class="form-control" type="text" name="oldProvince" maxlength="20" size="32" placeholder="Old Province Name">
        </div>
            <div class="col-md-6 mb-3">
              <label for="updatedProvince">New Province</label>
              <input class="form-control" type="text" name="updatedProvince" maxlength="20" size="32" placeholder="New Province Name"></label><br>
            </div>
          </div>
          <input class="btn btn-warning btn-lg btn-block" type="submit" value="Modify">
       </form>
       <br>

<h4 class="mb-3">Delete Provinces</h4>
     <form class="needs-validation" action="/admin/index.php?url=/admin/provinceDelete" method="post" enctype="multipart/form-data">
     <div class="row">
       <div class="col-md-5 mb-3">
       <label for="removeProvince">Remove Province</label>
       <input class="form-control" type="text" name="removeProvince" maxlength="20" size="32" placeholder="Province Name To Delete"><br>
         <input class="btn btn-danger btn-lg btn-block" type="submit" value="Delete">
       </div>
    </div>
     </form>
     <div>
     <br>

<h4 class="mb-3 text-left">List Of Existing Provinces</h4>



     <table class="text-capitalize">

HTHT;
for($counter=0; $counter < $provinceLenght; $counter++){
            if ($row = $data[$counter]){
print <<<HTHT
<tr>
<td>
HTHT;
              echo $row['name'];
print <<<HTHT
</td>
</tr>
HTHT;
            }
          }

print <<<HTHT

      </table>

<br><br>


    <h1 class="mb-3 text-left">Provinces Statistics</h1>
             <br><br>



             <h4 class="mb-3 text-left">Add Statistics</h4>

               <form class="needs-validation" action="/admin/index.php?url=/admin/statsInsert" method="post" enctype="multipart/form-data">
                    <div class="row">

                      <div class="col-md-5 mb-3">
                      <label for="addDate">Date</label><br>
                      <input type="date" name="addDate" maxlength="20" size="32" placeholder="ADD date"><br>
                      </div>


                      <div class="col-md-5 mb-3">
                      <label for="addCases">Cases</label><br>
                       <input type="number" name="addCases" maxlength="20" size="32" placeholder="ADD cases"><br>
                       </div>


                       <div class="col-md-5 mb-3">
                       <label for="addDeaths">Deaths</label><br>
                       <input type="number" name="addDeaths" maxlength="20" size="32" placeholder="ADD deaths"><br>
                       </div>


                       <div class="col-md-5 mb-3">
                       <label for="addTests">Tests</label><br>
                       <input type="number" name="addTests" maxlength="20" size="32" placeholder="ADD tests"><br>
                       </div>


                       <div class="col-md-5 mb-3">
                       <label for="addDelta_diff">Delta Diff</label><br>
                       <input type="number" name="addDelta_diff" maxlength="20" size="32" placeholder="ADD Delta Diff"><br>
                       </div>


                       <div class="col-md-5 mb-3">
                       <label for="addProvince">Province Name</label><br>
                       <input type="text" name="addProvince" maxlength="20" size="32" placeholder="ADD Province Name"><br>
                       </div>


                       </div>
                      <input class="btn btn-success btn-lg btn-block" type="submit" value="Add">
               </form>
               <br>





               <h4 class="mb-3 text-left">Edit Statistics</h4>
               <form class="needs-validation" action="/admin/index.php?url=/admin/statsEdit" method="post" enctype="multipart/form-data">

                   <p>Please Enter Province Name And Date To Update Province Statistics:<p/>

                     <div class="row">

                     <div class="col-md-5 mb-3">
                     <label for="oldProvinceName">Province Name</label><br>
                      <input type="text" name="oldProvinceName" maxlength="20" size="32" placeholder="Enter Province Name To Update"></label><br>
                     </div>


                     <div class="col-md-5 mb-3">
                     <label for="oldDate">Date</label><br>
                      <input type="date" name="oldDate" maxlength="20" size="32" placeholder="Enter Date To Update"><br>
                     </div>

     <br>
                   <h4 class="mb-3 text-left">New Values</h4>


              <div class="col-md-5 mb-3">
               <label for="newDate">New Date</label><br>
               <input type="date" name="newDate" maxlength="20" size="32" placeholder="Enter Updated Date"><br>
               </div>


               <div class="col-md-5 mb-3">
               <label for="newCases">New Cases</label><br>
              <input type="number" name="newCases" maxlength="20" size="32" placeholder="Enter Updated Cases"><br>
               </div>


               <div class="col-md-5 mb-3">
               <label for="newDeaths">New Deaths</label><br>
               <input type="number" name="newDeaths" maxlength="20" size="32" placeholder="Enter Updated Deaths"><br>
               </div>


               <div class="col-md-5 mb-3">
               <label for="newTests">New Tests</label><br>
               <input type="number" name="newTests" maxlength="20" size="32" placeholder="Enter Updated Tests"><br>
               </div>


               <div class="col-md-5 mb-3">
               <label for="newDelta_diff">New Delta_diff</label><br>
               <input type="number" name="newDelta_diff" maxlength="20" size="32" placeholder="Enter Updated Delta_diff"><br>
               </div>


               <div class="col-md-5 mb-3">
               <label for="newProvinceName">New Province Name</label><br>
               <input type="text" name="newProvinceName" maxlength="20" size="32" placeholder="Enter Updated Province Name"><br>
               </div>
               </div>
                <input class="btn btn-warning btn-lg btn-block" type="submit" value="Modify">
               </form>

               <br>

     <h4 class="mb-3 text-left">Remove Statistics</h4>

               <form class="needs-validation" action="/admin/index.php?url=/admin/statsDelete" method="post" enctype="multipart/form-data">
                  <p>Please Enter Province Name And Date To Delete Province Statistics:<p/>
                     <div class="row">

                     <div class="col-md-5 mb-3">
                     <label for="provinceDelete">Province Name</label><br>
                      <input type="text" name="provinceDelete" maxlength="20" size="32"><br>
                     </div>



                   <div class="col-md-5 mb-3">
                   <label for="dateDelete">Date</label><br>
                   <input type="date" name="dateDelete" maxlength="20" size="32"><br>
                   </div>


                   <br>
                </div>
                <input class="btn btn-danger btn-lg btn-block" type="submit" value="Delete">
               </form>
               <br>

     <br><br>
                 <h1 class="mb-3 text-left">Forms</h1><br>

                       <table>

                         <tr class="text-capitalize">
                         <td class="text-success">first</td>
                         <td class="text-success">last</td>
                         <td class="text-warning">email</td>
                         <td class="text-warning">phone</td>
                         <td class="text-danger">gender</td>
                         <td class="text-danger">country</td>
                         <td class="text-primary">subject</td>
                         <td class="text-primary">comments</td>

                         </tr>
HTHT;
                         for($counter=0; $counter < $formLenght; $counter++){
                                     if ($row = $data1[$counter]){
print <<<HTHT
<tr>
<td>
HTHT;
echo $row['first'];
print <<<HTHT
</td>
<td>
HTHT;
echo $row['last'];
print <<<HTHT
</td>
<td>
HTHT;
echo $row['email'];
print <<<HTHT
</td>
<td>
HTHT;
echo $row['phone'];
print <<<HTHT
</td>
<td>
HTHT;
echo $row['gender'];
print <<<HTHT
</td>
<td>
HTHT;
echo $row['country'];
print <<<HTHT
</td>
<td>
HTHT;
echo $row['subject'];
print <<<HTHT
</td>
<td>
HTHT;
echo $row['comments'];
print <<<HTHT
</td>
</tr>
HTHT;




                          }
                           }

print <<<HTHT


                           </table>

       </body>
     </html>
HTHT;
  }
}
