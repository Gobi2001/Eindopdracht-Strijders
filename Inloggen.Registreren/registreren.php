<html>
<head>
    <title>Registreren</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/registreren.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Registreren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Winkelwagen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!FORM-REGISTREN-------------------------------------------------------------------------------------------------------->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-3">

            <form class="form-container" action="registreren.php" method="post">
                <p class="txt-LogIn">REGISTREREN</p>
                <div class="form-group">
                    <label>Voornaam</label>
                    <input name="inputVoornaam" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tussenvoegsels</label>
                    <input name="inputTussenvoegsels" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Achternaam</label>
                    <input name="inputAchternaam" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>E-mailadres</label>
                    <input name="inputEmail" type="email" class="form-control" required>
                    <small id="emailHelp" class="form-text text-muted">We zullen uw e-mail nooit met iemand anders delen.</small>
                </div>
                <div class="form-group">
                    <label>Wachtwoord</label>
                    <input name="inputWachtwoord" type="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="btnInloggen">Registreren</button>
                <br>
                <div class="form-group p-Registreren">
                    <br>
                    <p class="txt-Registreren">IK HEB AL EEN ACCOUNT</p>
                    <hr>
                    <a href="login.php" class="btn btn-outline-primary btn-block" role="button" aria-pressed="true">Inloggen</a>
                </div>

            </form>

        </div>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<!--Footer------------------------------------------------------------------------------------------------------------->
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
    <!--container----------------------------------------------------------------------------------------------------->
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php

$input_Voornaam = filter_input(INPUT_POST, 'inputVoornaam');
$input_Tussenvoegsels = filter_input(INPUT_POST, 'inputTussenvoegsels');
$input_Achternaam = filter_input(INPUT_POST, 'inputAchternaam');
$input_Email = filter_input(INPUT_POST, 'inputEmail');
$input_Wachtwoord = filter_input(INPUT_POST, 'inputWachtwoord');

if (!empty($input_Voornaam))
{
    if (!empty($input_Achternaam))
    {
        if (!empty($input_Email))
        {
            if (!empty($input_Wachtwoord))
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "eindopdracht-strijders";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error)
                {
                    die("Connection failed: " . $conn->connect_error);
                }

                $query = "INSERT INTO users (User_ID, Voornaam, Tussenvoegsels, Achternaam, Emailadres, Wachtwoord)
                        VALUES ('', '$input_Voornaam', '$input_Tussenvoegsels', '$input_Achternaam', '$input_Email', '$input_Wachtwoord')";

                if ($conn->query($query) === TRUE)
                {
                    echo "<script>alert(\"Registratie Succesfull\");</script>";
                }
                else
                {
                    echo "<script>alert(\"Registratie Failed\");</script>";
                }

                $conn->close();
            }
        }
    }
}

?>




