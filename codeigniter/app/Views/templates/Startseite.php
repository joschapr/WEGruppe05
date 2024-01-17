<?= $this->extend("layouts/main")?>
<?= $this->section('Title')?>
<title>Startseite</title>
<?= $this->endSection() ?>
<?= $this->section('content')?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Task</h5>
        This is some text within a card body.
    </div>
</div>
<?= $this->endSection() ?>