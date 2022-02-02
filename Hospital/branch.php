<?php
require_once("DB.php");

if(isset($_POST["Submit"])){
   
        $branch=$_POST["branchname"];
        $amount=$_POST["amount"];
       
       
        global $ConnectingDB;//hree globsal is done with previous version you can even remove global
        $sql="INSERT INTO branch (branchname,amount)VALUES(:branchnamE,:amounT)";
        $stmt=$ConnectingDB->prepare($sql);//here we use conncetiongdb as an object
        $stmt->bindValue(':branchnamE',$branch);
        $stmt->bindValue(':amounT',$amount);      
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

    <section class="container py-2 mb-4 "> 
        <div class="row">
            <div class="offset-sm-3 col-sm-6 " style="min-height:500px;">
            <br><br><br>
          
            <div class="card bg-secondary y text-light">
                <div class="card-header">
                    <h4>ADDING NEW BRANCH</h4>
                    </div>
                    <div class="card-body bg-dark">
                    <form class=" " action="branch.php" method="post">
                        <div class="form-group">
                            <label ><span class="FieldInfo">Branch Name:</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-white bg-info "><i class="fas fa-user "></i></span>
                                </div>
                                <input type="text" class="form-control" name="branchname">
                            </div>
                            <div class="form-group">
                            <label><span class="FieldInfo">Amount Per Patient</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-white bg-info "><i class="fas fa-user "></i></span>
                                </div>
                                <input type="text" class="form-control" name="amount">
                            </div>

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
