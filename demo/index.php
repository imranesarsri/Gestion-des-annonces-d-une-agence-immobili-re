
<?php

include("connect.php");
include("createTableData.php");
include("insert.php");
include("update.php");
include("delete.php");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Php Procedural - Modal Bootstrap</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="images/logo2.png" alt="image" width="70" height="70"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#popular">Most Popular</a>
            </li>

        </div>
    </nav>
    <slide>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="images/banner.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                <h1>Est notare quam littera gothica, quam nunc.</h1>
				<h2>At wisi enim ad minim veniam, quis nostrud.</h2>
                </div>
            </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="images/banner1.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                <h1>Est notare quam littera gothica, quam nunc.</h1>
				<h2>At wisi enim ad minim veniam, quis nostrud.</h2>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="images/banner2.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                <h1>Est notare quam littera gothica, quam nunc.</h1>
				<h2>At wisi enim ad minim veniam, quis nostrud.</h2>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </slide>


    <div class="bg-secondary d-flex p-5">
        <div class="w-25 ">
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal">Add annonce</button>
        </div>
        <div class="w-50">
            <form action="" method="POST">
                <select class="w-25 p-2" name="typeSerch" id="">
                    <option value="Location">Location</option>
                    <option value="vente">vente</option>
                </select>
                <input class="p-2" type="number" name="min" placeholder="Min montant" min="1">
                <input class="p-2" type="number" name="max" placeholder="Max montant" min="1">
                <input class="btn btn-danger p-2" name="btnSerch" value="Serch" type="submit">
            </form>
        </div>
        <div class="w-25">
            <form action="" method="POST">
                <button type="submit" class="btn btn-danger" name="btnSortAsc" value="ASC">sort ASC</button>
                <select class="w-25 p-2" name="typeSort" id="">
                    <option value="title">Title</option>
                    <option value="superficie">superficie</option>
                    <option value="montant">Montant</option>
                    <option value="date">Date</option>
                </select>
                <button type="submit" class="btn btn-danger" name="btnSortDesc" value="DESC">sort DESC</button>
            </form>
        </div>
    </div>

<!-- script modal add  -->
<?php include("add.php"); ?>

<h2 class="text-center m-5">imrane cards</h2>

<?php
if(isset($_POST['btnSortAsc'])){
    echo $_POST['btnSortAsc'];
}elseif(isset($_POST['btnSortDesc'])){
    echo $_POST['btnSortDesc'];
}
// select database

try {

    if(isset($_POST["btnSerch"])){
    
        $select = "SELECT * FROM annonce WHERE `montant`>= $_POST[min] AND `montant`<= $_POST[max] AND `type` = '$_POST[typeSerch]' ";
    }else{
        $select = "SELECT * FROM annonce";
    }



    $result = $db->query($select);
    ?>
    <div class="d-flex flex-wrap gap-5 mt-5 ms-5">
    <?php
    if($result->rowCount() > 0){




        while($row = $result->fetch()){
        ?>

            <div class="card " style="width:20rem ;" >
                <img src="images/<?php echo $row['image']?>" style="height: 40%!important ;" class="card-img-top h-50" alt="image(<?php echo $row['title'] ?>)">
                <div class="card-body text-center">
                    <h3 class="card-title "><?php echo $row['title'] ?></h3>
                    <h5 class="card-text ">superficie :<?php echo $row['superficie'] ?> M</h5>
                    <h5 class="card-text ">montant :<?php echo $row['montant'] ?> DH</h5>
                    <h5 class="card-text ">type :<?php echo $row['type'] ?></h5>
                    <p class="card-text "><?php echo substr($row['descreption'] , 0 , 60) ;if(strlen($row['descreption'])>59)echo "..."?></p>
                    <form action="" method="post">
                        <button type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#update<?php echo $row["id"]?>">update</button>
                        <div class="modal fade" id="update<?php echo $row["id"]?>" tabindex="-1" aria-labelledby="updateLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateLabel">Update announcement</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- script modal update -->
                                    <?php include("updateModal.php") ?>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-warning" type="submit" name="updata" value="<?php echo $row["id"]?>">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-danger text-center" data-bs-toggle="modal" data-bs-target="#delet">Delete</button>
                        <!-- script modal delete -->
                        <?php include("deleteModal.php") ?>
                        <button type="button" class="btn btn-danger text-center" data-bs-toggle="modal" data-bs-target="#data<?php echo $row["id"]?>">Data</button>
                        <!-- script modal delete -->
                        <?php include("dataModal.php") ?>
                    </form>
                </div>
            </div>
        <?php

        }
    }else{
    ?>
        <img src="images/No-data-found-banner.webp"alt="image_no_data">
    <?php
    }
    ?>
    </div>
    <?php
}

catch(PDOException $e) {
    die('error :'.$e->getMessage());
};






?>
</body>
<!-- <script src="validation.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
