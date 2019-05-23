<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eindopdracht-strijders";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['btnInloggen']))
{
    $input_Email = $_POST['inputEmail'];
    $input_Wachtwoord = $_POST['inputWachtwoord'];

    $query = "SELECT * FROM users WHERE Emailadres='{$input_Email}' and Wachtwoord='{$input_Wachtwoord}'";
    $result = mysqli_query($conn, $query);

    if($res=mysqli_fetch_array($result))
    {
        echo "<script>alert(\"Login Succesful\");</script>";
    }
    else{
        echo "<script>alert(\"Login Failed\");</script>";
    }
}
?>

<html>
<head>
    <title>Inloggen</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Fietsenwinkel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
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

<!--FORM-INLOGGEN-------------------------------------------------------------------------------------------------------->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-3">

            <form class="form-container" action="login.php" method="post">
                <p class="txt-LogIn">LOG IN</p>
                <div class="form-group">
                    <label>E-mailadres</label>
                    <input name="inputEmail" type="email" class="form-control" required>
                    <small id="emailHelp" class="form-text text-muted">We zullen uw e-mail nooit met iemand anders delen.</small>
                </div>
                <div class="form-group">
                    <label>Wachtwoord</label>
                    <input name="inputWachtwoord" type="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="btnInloggen">Inloggen</button>
                <div class="form-group a">
                    <a href="#" class="txt-wwVergeten">Wachtwoord vergeten?</a>
                </div>
                <div class="form-group p-Registreren">
                    <br>
                    <p class="txt-Registreren">IK BEN NIEUW HIER</p>
                    <hr>
                    <a href="registreren.php" class="btn btn-outline-primary btn-block" role="button" aria-pressed="true">Registreren</a>
                </div>

            </form>

        </div>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!--Footer------------------------------------------------------------------------------------------------------------>
<footer class="py-5 bg-dark">
    <div class="container" style="text-align: center">
        <br>
        <h5 class="text-white"> Nieuwsbrief</h5>
        <h5 class="text-white">Blijf op de hoogte</h5>
        <p class="text-white">Bevestig uw e-mail om op de hoogte te blijven<br>
            van de niewste fietsen en meer!</p>
        <form class="footer__subscription-form" target="blank" action="#" method="get">
            <div class="input-field ">
                <input type='text' id='emailInput' name='email' placeholder='Email Address' required/>
            </div>
            <br>
            <input type="hidden" name="iehack" value="☠">
            <button type="submit" class="btn btn-primary">Verstuur</button>
        </form>
        <br>
        <p class="m-0 text-center text-white">Copyright &copy; Eindopdracht Strijders 2019</p>
    </div>
    <!--container------------------------------------------------------------------------------------------------------>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
