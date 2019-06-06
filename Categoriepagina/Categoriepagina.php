<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "eindopdrachtstrijders";

//create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
//check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM klantproduct";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Categoriepagina</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Fietsenwinkel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registreren</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Winkelwagen</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
    
  <!-- Bar -->
    
    <div class="align-items-center row">
  <div class="col-md-4 mb-3">
      <h4 class="text-center" for="validationCustom03">Categorie</h4>
      <select class="form-control form-control-lg" name="category" id="validationCustom03" onchange="ChangecatList()" required>
        <option value="mannen">Mannen</option>
        <option value="vrouwen">Vrouwen</option>
        <option value="kinderen">Kinderen</option>
      </select>
	<div class="invalid-feedback">
		Please provide a category.
	</div>
  </div>
</div>

  <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Fietsen
        <small>Fietsen</small>
      </h1>


        <!-- Project Five -->

        <?php

        if ($result->num_rows > 0)
        {
            //output data of each row
            while($row = $result->fetch_assoc())
            {
                echo "<html>";
                echo "<div class='row'>";
                echo "<div class='col-md-7'>";
                echo "<a href='#'>";
                echo "<img class='img-fluid rounded mb-3 mb-md-0' src='{$row['foto']}'>";
                echo "</a>";
                echo "</div>";
                echo "<div class='col-md-5'>";
                echo "<h3>" . $row["naam"] . "</h3>";
                echo "<p>" . $row["beschrijving"] . "</p>";
                echo "<a class='btn btn-primary' href='#'>Bekijk Fiets</a>";
                echo "</div>";
                echo "</div>";
                echo "<hr>";
            }
            echo "</html>";
        }

        ?>

    </div>
  <!-- /.container -->

  <!-- Footer -->
   <footer class="py-5 bg-dark">
    <div class="container">
        <form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="E-mail">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>
      <p class="m-0 text-center text-white">Copyright &copy; Eindopdracht Strijders 2019</p>
    </div>
    </footer>
    <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


