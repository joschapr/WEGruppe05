<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-Qqz4lBBa4tD/yCXB1fiu/vAnO+FCo/QElL1d8E1oFI0SvVYxRU7YzXCc+8Sx1/8gVUsVnT6r3a3T0zDl3QIN1A==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">

    <title>Bootstrap Formular</title>
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
                <a class="nav-link active" href="Spalten" style="color: white;">Spalten</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <form>
        <!-- Eingabefeld vom Typ Text für die Spaltenbezeichnung -->
        <div class="form-group">
            <label for="spaltenbezeichnung">Spaltenbezeichnung:</label>
            <input type="text" class="form-control" id="spaltenbezeichnung" placeholder="Spaltenbezeichnung eingeben">
        </div>

        <!-- Mehrzeiliges Eingabefeld (Textarea) für die Spaltenbeschreibung -->
        <div class="form-group">
            <label for="spaltenbeschreibung">Spaltenbeschreibung:</label>
            <textarea class="form-control" id="spaltenbeschreibung" rows="3" placeholder="Spaltenbeschreibung eingeben"></textarea>
        </div>

        <!-- Eingabefeld vom Typ Text für die Sortid -->
        <div class="form-group">
            <label for="sortid">Sortid:</label>
            <input type="text" class="form-control" id="sortid" placeholder="Sortid eingeben">
        </div>

        <!-- Dropdown-Liste mit definierten Optionen -->
        <div class="form-group">
            <label for="options">Board auswählen</label>
            <select class="form-control" id="options">
                <option>Allgemeine Todos</option>
                <option>Board2</option>
                <option>Board3</option>
                <option>BoardN</option>
            </select>
        </div>

        <!-- Buttons zum Speichern und Abbrechen des Formulars -->
        <button type="submit" class="btn btn-success">Speichern</button>
        <button type="button" class="btn btn-secondary">Abbrechen</button>
    </form>
</div>
<footer class ="footer">
    <p>©Web-Entwicklung Team 2023 Impressum Datenschutz Kontakt</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>