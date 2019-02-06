<html>
	<head>
		<title>Ma Mairie</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <LINK rel=STYLESHEET href="styleMairie.css" type="text/css">
        <LINK rel=STYLESHEET href="/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="shortcut icon" href="avion.png" type="image/x-icon"/>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mairie.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap4.min.js"></script>
        <LINK rel=STYLESHEET href="/dataTables.bootstrap4.min.css" type="text/css">
        <LINK rel=STYLESHEET href="/all.css" type="text/css">
        <script src="js/all.js"></script>

    </head>
	<body>

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
                        <img src="Images/aussonne.png" id="logo" />
                        </a>
                    </div>
                </div>
            </div>
    </div>

    </div>
