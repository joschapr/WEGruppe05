<?= $this->extend("layouts/main")?>
<?= $this->section('Title')?>
<title>Spalte Erstellen</title>
<?= $this->endSection() ?>
<?= $this->section('content')?>



<div class = "container shadow p-3 mb-5 bg-white rounded">
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
        <a href="Spalten" class="btn btn-secondary" role="button" aria-pressed="true">Abbrechen</a>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?= $this->endSection() ?>