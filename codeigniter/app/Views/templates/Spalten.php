<?= $this->extend("layouts/main")?>
<?= $this->section('Title')?>
<title>Spalten</title>
<?= $this->endSection() ?>
<?= $this->section('content')?>


<div class = "container shadow p-3 mb-5 bg-white rounded">
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
            <td><i class="fas fa-pen-square"></i>      <i class="fa-solid fa-trash"></i></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Allgemeine Todos</td>
            <td>200</td>
            <td>In Bearbeitung</td>
            <td>Todos die aktuell bearbeitet werden</td>
            <td><i class="fas fa-pen-square"></i>      <i class="fa-solid fa-trash"></i></td>
        </tr>

        </tbody>
    </table>
    <div class="container mt-4">
        <div class="btn-group" role="group" aria-label="Button Container">
            <a href="Formular"
            <button type="button" class="btn btn-success"><img src="IconAdd.svg" style="width: 15px; height: 15px"> Neue Spalte</button>
             </a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?= $this->endSection() ?>