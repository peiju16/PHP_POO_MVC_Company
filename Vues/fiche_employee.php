<div class="container">
<h2>Contact</h2>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h6 class="card-text">Employée: <?= $employee->first_name . " " . $employee->name; ?></h6>
    <p class="card-text">Date embauche: <?= $employee->starting_date; ?></p>
    <p class="card-text">Service: <?= $employee->service; ?></p>
    <p class="card-text">Salaire: <?= $employee->salaire; ?></p>
    <a href="index.php" class="btn btn-primary">Retourner à la liste de contact</a>
  </div>
</div>
</div>