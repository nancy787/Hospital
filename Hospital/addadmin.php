<?php
require_once("DB.php");

if(isset($_POST["Submit"])){
   
        $Uname=$_POST["Uname"];
        $Email=$_POST["email"];
        $Pass=$_POST["password"];
        $Phone=$_POST["phone"];
       
        global $ConnectingDB;//hree globsal is done with previous version you can even remove global
        $sql="INSERT INTO admin(user,email,password,phone)VALUES(:useR,:emaiL,:passworD,:phonE)";
        $stmt=$ConnectingDB->prepare($sql);//here we use conncetiongdb as an object
        $stmt->bindValue(':useR',$Uname);
        $stmt->bindValue(':emaiL',$Email);
        $stmt->bindValue(':passworD',$Pass);
        $stmt->bindValue(':phonE',$Phone);
      
        $Execute=$stmt->execute();
     if($Execute)
     {
     echo'<span class="text-success" >record has been added successfully<span>';
     //echo "executed successfuly";
     }
     else
     {
         echo "oops smething went wrong";
     }

}
   


?>
<!DOCTYPE html>
<html>
    <head><title>INSERT INTO DATABASE</title>
    <link rel="stylesheet" href="style.css">
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
    <?php
    ?>
    <div>
    <!-- <form action="addadmin.php" method="post">
       
    <fieldset>
        <span class= "FieldInfo">USER NAME :</span>
        <br>
        <input type="text" name="Uname" values="ADMIN NAME"> 
        <br>
        <span class= "FieldInfo">EMAIL</span>
        <br>
        <input type="email" name="email" values="">
        <br>
        <span class= "FieldInfo">PASSWORD :</span>
        <br>
        <input type="password" name="password" values=""> 
        <br>
        <span class= "FieldInfo">PHONE NO</span>
        <br>
        <input type="text" name="phone"  values="">
        <br>
      
        <input type="submit" name="Submit" value="Submit Your Record">
    </fieldset> -->
    <section class="container py-2 mb-4 "> 
        <div class="row">
            <div class="offset-sm-3 col-sm-6 " style="min-height:500px;">
            <br><br><br>
          
            <div class="card bg-secondary y text-light">
                <div class="card-header">
                    <h4>WELCOME !</h4>
                    </div>
                    <div class="card-body bg-dark">
                    <form class=" " action="addadmin.php" method="post">
                        <div class="form-group">
                            <label ><span class="FieldInfo">Username:</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-white bg-info "><i class="fas fa-user "></i></span>
                                </div>
                                <input type="text" class="form-control" name="Uname">
                            </div>
                            <div class="form-group">
                            <label><span class="FieldInfo">EMAIL</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-white bg-info "><i class="fas fa-user "></i></span>
                                </div>
                                <input type="email" class="form-control" name="email">
                            </div>

                        </div>
                        <div class="form-group">
                            <label ><span class="FieldInfo">Password:</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-white bg-info "><i class="fas fa-lock "></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" >
                                </div>
                        </div>
                        <div class="form-group">
                            <label ><span class="FieldInfo">Phone No</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-white bg-info "><i class="fas fa-user "></i></span>
                                </div>
                                <input type="text" class="form-control" name="phone">
                            </div>
                        <input type="submit" name="Submit" class="btn btn-block btn-info" value="submit" >
                    </form>
                </div>
            </div>

            </div>
            
                
        </div>   


         </section>

    </form>
    </div>
    </body>
</html>