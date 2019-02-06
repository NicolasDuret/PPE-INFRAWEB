<html>
	<head>
		<title>Ma Mairie</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="shortcut icon" href="avion.png" type="image/x-icon"/>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <LINK rel=STYLESHEET href="styleMairie.css" type="text/css">
        <LINK rel=STYLESHEET href="/all.css" type="text/css">
        <LINK rel=STYLESHEET href="/bootstrap.min.css" type="text/css">
        <LINK rel=STYLESHEET href="/dataTables.bootstrap4.min.css" type="text/css">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
	<body>
    <script src="js/mairie.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <LINK rel=STYLESHEEThref="css/dataTables.bootstrap4.min.css"type="text/css">
    <LINK rel=STYLESHEEThref="css/all.css"type="text/css"><script src="js/all.js">
    </script>

    <div class="Logo_banniere">

    <div class="fondMilieu">
        <?php
        if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))

        {
            echo '
                <img id="imgLogin" class="img-responsive" src="Images/login.png"></img>';
        }
        else{
            echo '
                <img id="imgLogout" class="img-responsive" src="Images/logout.png"></img>';
        }

        ?>
            <div class="cadreHautMilieu">
                <div class="logo container">
                    <div class="Logo">
                        <a href="index.php">
                        <img src="Images/aussonne.png" /></a>
                    </div>
                </div>
            </div>
    </div>

    </div>
