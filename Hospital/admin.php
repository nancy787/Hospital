<?php require_once("DB.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content ="width-device-width ,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Posts</title>
    </head>
    
   
    <body>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
          <!-- navbar -->
        <div style="height: 10px ; background-color: turquoise;"></div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container" >
                <a href="#" class="navbar-brand text-warning"><i class="far fa-hand-spock"></i>BIGOLLI.COM</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarcollapseCMS">  
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="MyProfile.php" class="nav-link text-success"><i class="fas fa-user text-success"></i>MY PROFILE</a>
                    </li>
                  
                    <li class="nav-item">
                        <a href="login.php" class="nav-link "><i class="fas fa-mail-bulk"></i>Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a href="slogin" class="nav-link "><i class="fas fa-bars"></i>staff</a>
                    </li>
                    <li class="nav-item">
                        <a href="alogin.php" class="nav-link "><i class="fas fa-user-shield"></i>ADMIN</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link "><i class="fas fa-comment"></i>patient</a>
                    </li>
                    <li class="nav-item">
                        <a href="LiveBlog.php?page=1" class="nav-link "><i class="far fa-plus-square"></i></i>LIVE BLOG</a>
                    </li>
                </ul>
               
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item "><a href="Logout.php" class="nav-link text-danger"><i class="fas fa-user-times text-danger"></i>LOGOUT</a></li>
                </ul>
                </div>
           
        </div>

         </nav>
         <div style="height: 10px ; background-color: turquoise;"></div>
         <!-- navbar end -->
         <!-- header -->
         <header class="bg-dark text-white py-3">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 mb-2">
                     <h1><i class="fas fa-blog"style="color: turquoise;;"></i>HOSPITAL</h1>
                 </div>
                 <div class="col-lg-3 mb-2">
                     <a href="addstaff.php" class="btn btn-primary btn-block">
                         <i class="fas fa-edit"></i> Add New staff</a>

                 </div>
                 <div class="col-lg-3 mb-2">
                     <a href="adddr.php" class="btn btn-info btn-block">
                         <i class="fas fa-folder-plus"></i> Add Doctor</a>

                 </div>
                 <div class="col-lg-3 mb-2">
                     <a href="branch.php" class="btn btn-warning btn-block">
                         <i class="fas fa-user-plus"></i> Create New Branch</a>

                 </div>
               

             </div>
             
         </div>
        </header>
         <!-- header end -->
         <!-- main area -->

          

         <!-- declosing main area -->
         <!-- footer  -->
         <footer class="bg-dark text-white">
             <div class="row">
             <div class="col">
                <p class="lead text-center">THEME BY |NANCY BHAGAT|&copy;---------ALL RIGHT RESERVED.</p>
                <p class="text-center small"><a style="color: white; text-decoration: none; cursor:pointer ; "href="www.udemy.com"></style>
             </div>
            </div>
         </footer>
         <div style="height: 10px ; background-color: turquoise;"></div>
         <!-- footer end -->
         <script>
            $('#year').text(new Date().getFullYear());
        </script>
    </body>
</html>