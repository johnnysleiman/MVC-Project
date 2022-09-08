<?php
 namespace Views;



 class login {
   public static function render($data=false) {
     print <<<HTHT

     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>
         <meta charset="utf-8">
         <title>Contact us</title>
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

         <style>
          html, body {
              height: 100%;
            }

            body {
              display: -ms-flexbox;
              display: flex;
              -ms-flex-align: center;
              align-items: center;
              padding-top: 40px;
              padding-bottom: 40px;
              background-color: #f5f5f5;
            }

            .form-signin {
              width: 100%;
              max-width: 330px;
              padding: 15px;
              margin: auto;
            }
            .form-signin .checkbox {
              font-weight: 400;
            }
            .form-signin .form-control {
              position: relative;
              box-sizing: border-box;
              height: auto;
              padding: 10px;
              font-size: 16px;
            }
            .form-signin .form-control:focus {
              z-index: 2;
            }
            .form-signin input[type="email"] {

              border-bottom-right-radius: 0;
              border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
              margin-top: 5px;
              margin-bottom: 10px;
              border-top-left-radius: 0;
              border-top-right-radius: 0;
            }


         </style>


       </head>
       <body class="text-white text-center bg-dark">

        <form class="form-signin" action="/admin/index.php?url=/login/validateCredentials" method="Post" enctype="multipart/form-data">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="username" class="sr-only">Email address</label>
        <input type="username" name="username" id="username" class="form-control" placeholder="Email address" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-secondary btn-block" type="submit">Sign in</button>
          <a href="/../index.php?url=/mainpage/index" class="btn btn-lg btn-danger btn-block" role="button">Cancel</a></button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
      </form>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
     </html>
HTHT;
  }
}
