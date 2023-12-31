<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <script src="https://kit.fontawesome.com/dfaa8d9c47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-Qqz4lBBa4tD/yCXB1fiu/vAnO+FCo/QElL1d8E1oFI0SvVYxRU7YzXCc+8Sx1/8gVUsVnT6r3a3T0zDl3QIN1A==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="Startseite">
            <img src="trick17.svg" alt="Logo" width="100px" class="align-text-top img-fluid" href="index.html">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#"style="color: white;">Tasks</a>
                <a class="nav-link" href="#"style="color: white;">Boards</a>
                <a class="nav-link" href="Spalten"style="color: white;">Spalten</a>
            </div>
        </div>
    </div>
</nav>

<a class="btn btn-primary" href="Formular" role="button">Spalte Erstellen</a>

<table class="table">
    <thead>
    <tr> <!--das sind die Spalten-->
        <th scope="col">ID</th>
        <th scope="col">Board</th>
        <th scope="col">Sortid</th>
        <th scope="col">Spalte</th>
        <th scope="col">Spaltenbeschreibung</th>
        <th scope="col">Bearbeiten</th>
    </tr>
    </thead>
    <tbody>
    <tr> <!--das sind die Zeilen-->
        <th scope="row">1</th>
        <td>Allgemeine Todos</td>
        <td>100</td>
        <td>Zu besprechen</td>
        <td>noch zu besprechde Todos</td>
        <td><i class="fas fa-pen-square"></i><i class="fa-solid fa-trash"></i></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Allgemeine Todos</td>
        <td>200</td>
        <td>In Bearbeitung</td>
        <td>Todos die aktuell bearbeitet werden</td>
        <td><i class="fas fa-pen-square"></i><i class="fa-solid fa-trash"></i></td>
    </tr>

    </tbody>
</table>


<footer class ="footer">
    <p>©Web-Entwicklung Team 2023 Impressum Datenschutz Kontakt</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>