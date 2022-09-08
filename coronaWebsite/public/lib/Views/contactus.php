<?php
 namespace Views;

 class contactus {
   public static function render($data=false) {
     print <<<HTHT

     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>
         <meta charset="utf-8">
         <title>Contact us</title>
         <link rel="stylesheet" href="/css/style.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       <body class="bg-dark">

     <div>

     <nav id="nav" style="background-color: #343a40;"class="navbar navbar-expand-lg navbar-light text-white">


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
         CONTACT US FORM
       </span>
     </div>
     </div>
     </nav>


     <div class="container mx-auto" style="box-shadow: 0 10px 30px 0px rgba(0,0,0,1); height="72";>
           <div class="py-5">

     <div class="col-md-8 order-md-1 text-white">
     <h4 class="mb-3">Contact Us</h4>
     <form class="needs-validation" action="/index.php?url=/contactus/insert" method="Post" enctype="multipart/form-data" novalidate>
     <div class="row">

                   <div class="col-md-6 mb-3">
                     <label for="firstName">First name</label>
                     <input type="text" class="form-control" name="fname" id="firstName" placeholder="" value="" required>
                     <div class="invalid-feedback">
                       Valid first name is required.
                     </div>
                   </div>

                   <div class="col-md-6 mb-3">
                     <label for="lastName">Last name</label>
                     <input type="text" class="form-control" name="lname" id="lastName" placeholder="" value="" required>
                     <div class="invalid-feedback">
                       Valid last name is required.
                     </div>
                   </div>
                 </div>

                 <div class="mb-3">
                         <label for="email">Email</label>
                         <div class="input-group">
                           <div class="input-group-prepend">
                             <span class="input-group-text">@</span>
                           </div>
                           <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
                           <div class="invalid-feedback" style="width: 100%;">
                             Please enter a valid email address.
                           </div>
                         </div>
                       </div>

                       <div class="mb-3">




                         <label for="phone">Phone</label>
                         <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                         <div class="invalid-feedback">
                           Please enter a valid phone number.
                         </div>
                       </div>



                      <div class="custom-control custom-radio">
                      <input id="male" name="gender" type="radio" value="male" class="custom-control-input" checked required>
                      <label class="custom-control-label" for="male">Male</label>
                      </div>
                      <div class="custom-control custom-radio">
                      <input id="female" name="gender" type="radio" value="female" class="custom-control-input" required>
                      <label class="custom-control-label" for="female">Female</label>
                      </div>


                      <div class="col-md-4 mb-3 mt-2">
                      <label for="Country">Country</label>
                       <select class="custom-select d-block w-100" id="country" name="Country" required>
                         <option value="lb">Lebanon</option>
                         <option value="ca">Canada</option>
                         <option value="us">United States</option>
                         <option value="fr">France</option>
                         <option value="uk">United Kingdom</option>
                         <option value="ku">Kuwait</option>
                       </select>
                       <div class="invalid-feedback">
                         Please select a valid country.
                       </div>
                       </div>



                       <div class="mb-3">
                         <label for="subject">Subject</label>
                         <input type="text" name="subject" class="form-control" id="subject">
                         <div class="invalid-feedback">
                           Please enter a valid subject.
                         </div>
                       </div>


              <div class="mb-3">
              <label>Comments</label><br>
              <textarea name="comment" style="width:700px; height:250px;" placeholder=" Enter comments here"></textarea><br>
              </div>

              </div>

         <input type="submit" class="btn btn-secondary btn-lg btn-block" value="submit">
       </form>



         </div>
         </div>
          <div>
             <img src="images/home.png" alt="" usemap="#myhome-contact" style="width:42px; height:42px; margin-top:-63px; margin-left:550px;">
           <map id="myhome-contact" name="myhome-contact">
             <area shape="circle" coords="256,256,512" href="/index.php?url=/mainpage/index" alt="">
           </map>

       </div>

     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       </body>
     </html>
HTHT;
  }
}
