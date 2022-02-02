<?php require_once("DB.php"); ?>
<?php
function Login_Attempt($UserName,$Password){
    global $ConnectingDB;
    $sql = "SELECT * FROM admin WHERE user=:aname AND password=:apass LIMIT 1";
    $stmt = $ConnectingDB->prepare($sql);
    $stmt->bindValue(':aname',$UserName);
    $stmt->bindValue(':apass',$Password);
    $stmt->execute();
    $Result = $stmt->rowcount();
    if ($Result==1) {
      return $Found_Account=$stmt->fetch();
    }else {
      return null;
    }
  }
?>
<?php



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content ="width-device-width ,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title></title>
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
                
                <div class="collapse navbar-collapse" id="navbarcollapseCMS">  
                
               
                
                </div>
           
        </div>

         </nav>
         <div style="height: 10px ; background-color: turquoise;"></div>
         <!-- navbar end -->
         <!-- header -->
         <header class="bg-dark text-white py-3">
         <div class="container">
             <div class="row">
                 <div class="offset-sm-5 col-md-12">
                     <h1><i class="fas fa-user  "style="color: turquoise; "></i>SIGN UP</h1>
                 </div>
             </div> 
             
         </div>
        </header>
         <!-- header end -->
         <!-- MAIN AREA -->
          
         <section class="container py-2 mb-4 "> 
        <div class="row">
            <div class="offset-sm-3 col-sm-6 " style="min-height:500px;">
            <br><br><br>
            <?php
            // echo ErrorMessage();
            // echo SuccessMessage();
            ?>
            <div class="card bg-secondary y text-light">
                <div class="card-header">
                    <h4>WELCOME !</h4>
                    </div>
                    <div class="card-body bg-dark">
                    <form class=" " action="admin.php" method="post">
                        <div class="form-group">
                            <label form="username"><span class="FieldInfo">Username:</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-white bg-info "><i class="fas fa-user "></i></span>
                                </div>
                                <input type="text" class="form-control" name="Username" id="username" value="" maxlength="20">
                            </div>

                        </div>
                        <div class="form-group">
                            <label form="password"><span class="FieldInfo">Password:</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-white bg-info "><i class="fas fa-lock "></i></span>
                                </div>
                                <input type="password" class="form-control" name="Password" id="password" >
                                </div>
                        </div>
                        <input type="submit" name="Submit" class="btn btn-block btn-info" value="Login" >
                    </form>
                </div>
            </div>

            </div>
            
                
        </div>   


         </section>
         <!-- MAIN AREA CLOSE -->
         <br>
         <!-- footer  -->
         <footer class="bg-dark text-white">
             <div class="row">
             <div class="col">
                <p class="lead text-center">THEME BY |NANCY BHAGAT|&copy;---------ALL RIGHT RESERVED.</p>
                <p class="text-center small"><a style="color: white; text-decoration: none; cursor:pointer ; "href="www.udemy.com"></style>
                </a>This site is only for learning purose of php.</p>
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