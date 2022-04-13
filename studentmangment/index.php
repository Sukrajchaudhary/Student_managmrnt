
<?php
session_start();
 if(!isset($_SESSION['UserName']) || !$_SESSION['UserName']==1){
   header('location:home.php');
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .btn{
            margin-top:20px;
            margin-left:1050px;
        }
        th{
            color:#E33E5A;
        }
        .table{
            color:#BAE8E8;
            background-color:black;
            border:4px solid red;
        }
        tr{
            border:4px green;
        }

    </style>
  </head>
  <body>
    
  <?php
  include('component/nav.php');
  ?>
<div class="container">
    <div class="row">
    <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    View Notice
  </a>
</p>
  <div class="container">
                <div class="row justify-content-md-center collapse" id="collapseExample">
                    <div class="col-8">
                        <?php
                        include('include/connect.php');
                        $query = "SELECT * FROM noticetable"; 
                        $result = mysqli_query($conn,$query);
                        ?>
                        <table class="table">
                            <thead>
                                <th>S.N</th>
                                <th>Tilte</th>
                                <th>Notice</th>
                                <th>Update Date</th>
                            </thead>
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>

                            <tr>
                            <td><?php echo $row['Id'];  ?></td>
                                <td><?php echo $row['Notice_Title'];  ?></td>
                                <td><?php echo $row['Notice']; ?></td>
                                <td><?php echo $row['Notice_Post_Date']; ?></td>
                            </tr>
                            
                        <?php } ?>
                        </table>
                    </div>
                </div>
            </div>  
   
</div>


    </div>
</div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>