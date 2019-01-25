<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Club
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?vue=club&action=ajouter">Ajouter un club</a>
                        <a class="dropdown-item" href="index.php?vue=club&action=visualiser">Voir les club</a>
                        <a class="dropdown-item" href="construction.php">Modifier un club</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ressource
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?vue=ressource&action=ajouter">Ajouter une ressource</a>
                        <a class="dropdown-item" href="index.php?vue=ressource&action=visualiser">Voir les ressources</a>
                        <a class="dropdown-item" href="construction.php">Modifier une ressource</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Equipe
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="construction.php">Ajouter une equipe</a>
                        <a class="dropdown-item" href="construction.php">Voir une equipe</a>
                        <a class="dropdown-item" href="construction.php">Midifier une equipe</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jour/Semaine
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="construction.php">Ajouter un jour</a>
                        <a class="dropdown-item" href="construction.php">Voir un jour</a>
                        <a class="dropdown-item" href="construction.php">Modifier un jour</a>
                        <a class="dropdown-item" href="construction.php">Voir les equipes de la journée</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Entraineur
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="construction.php">Ajouter un entraineur</a>
                        <a class="dropdown-item" href="construction.php">Voir un entraineur</a>
                        <a class="dropdown-item" href="construction.php">Mofier un entraineur</a>
                        <a class="dropdown-item" href="construction.php">Voir les equipes de l'entraineur</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Adherents
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="construction.php">Ajouter un adherent</a>
                        <a class="dropdown-item" href="construction.php">Voir un adherent</a>
                        <a class="dropdown-item" href="construction.php">Modifier un adherent</a>
                        <a class="dropdown-item" href="construction.php">Voir les adherents d'une equipe</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Planning
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="construction.php">Affecter une equipe</a>
                        <a class="dropdown-item" href="construction.php">Voir le planning complet</a>
                        <a class="dropdown-item" href="construction.php">Modifier une affectation</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<?php
include_once 'diapo.php';
?>
