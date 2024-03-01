<div class="container text-center">
    <?php if (isset($msg)) { ?> 
    <div class="alert alert-primary" role="alert">
    <?= $msg; ?>
    </div>
    <?php } ?>
    <h2>Tous les contacts employés</h2>
    <a href="?action=add" class="btn btn-primary" role="button">Ajouter employé</a>

    <div class="row pt-3">
        <?php for ($i = 0; $i < $stmt->columnCount(); $i++) { ?>
            <div class="col fw-bold">
                <?= $stmt->getColumnMeta($i)["name"]; ?>
            </div>
        <?php } ?>
        <div class="col fw-bold">Voir</div>
        <div class="col fw-bold">Modifier</div>
        <div class="col fw-bold">Supprimer</div>
    </div>

    <div class="w-100 d-none d-md-block"></div>
   
    <?php foreach ($employees as $employee) { ?>
        <div class="row row-cols-10 border border-info border-start-0 border-end-0">
            <div class="col">
                <?= $employee->id_employee; ?>
            </div>
            <div class="col">
                <?= $employee->first_name; ?>
            </div>
            <div class="col">
                <?= $employee->name; ?>
            </div>
            <div class="col">
                <?= $employee->sexe; ?>
            </div>
            <div class="col">
                <?= $employee->service; ?>
            </div>
            <div class="col">
                <?= $employee->starting_date; ?>
            </div>
            <div class="col">
                <?= $employee->salaire; ?>
            </div>
            <div class="col">
                <a href="?action=show&id=<?= $employee->id_employee; ?>">Voir</a>
            </div>
            <div class="col">
                <a href="?action=modify&id=<?= $employee->id_employee; ?>">Modifier</a>
            </div>
            <div class="col">
                <a href="?action=delete&id=<?= $employee->id_employee; ?>">Supprimer</a>
            </div>
        </div>
    <?php } ?>


</div>

