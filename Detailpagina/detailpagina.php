<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eindopdracht-strijders";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM detailpagina WHERE Fiets_ID = '3'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detailpagina</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

<?php
require_once "Header.html" ;
?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <div class="list-group">
          
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
            <?php
            echo "<img class=\"card-img-top img-fluid\" src=\"{$row['Foto_Fiets']}\" >";
            ?>


          <div class="card-body">
            <h3 class="card-title">
                <?php
                    echo $row['Naam'];
                ?>
            </h3>
            <h4>
                <?php
                    echo "€" . $row['Prijs'];
                ?>
            </h4>
            <button type="submit" class="btn btn-primary mb-2">Winkelwagen</button>  
            <p class="card-text">
                <?php
                    echo $row['Beschrijving'];
                ?>
            </p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Specificaties
          </div>
          <div class="card-body">
            <p>
                <?php
                echo nl2br($row['Specificaties']);
                ?>
            </p>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <?php
   require_once "Footer.html";
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<?php



?>
