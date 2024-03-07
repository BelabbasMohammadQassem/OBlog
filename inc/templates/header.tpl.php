<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O'Blog</title>

    <!-- On va chercher bootstrap via leur CDN -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
</head>

<body>
    <!-- On utilise le composant navbar de la doc Bootstrap -->
    <!-- https://getbootstrap.com/docs/5.0/components/navbar/ -->
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">À la dérive</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Ici on ajoute la classe justify-content-end pour aligner les éléments de menu sur la droite -->
            <!-- On pense aussi à retirer l'élément de l'exemple "disabled" -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="category.php">Teamback <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Teamfront</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Collaboration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Ma vie de dev</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Utilisation d'un container fluid pour occuper tout l'espace horizontal -->
    <!-- Ajout de la class text-center pour centrer le texte -->
    <div class="container-fluid text-center p-4">
        <h1>A la dérive</h1>
    </div>
    <div class="container-fluid text-center pb-4">
        Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace
    </div>