<div class="container">
  <h2>Ajouter un Employé</h2>
  <form action="index.php?action=<?= $_GET["action"]; ?>" method="post">
  <?php if(isset($_GET["action"]) && $_GET["action"] == "modify") {?>
        <input type="hidden" name="id_employee" value="<?= $employee->id_employee ?>">
    <?php } ?>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrer votre prénom"
      name="first_name" value="<?= isset($employee) ? $employee->first_name : ""; ?>">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Nom</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Entrer votre nom" name="name" value="<?= isset($employee) ? $employee->name : ""; ?>">
  </div>
  <div class="mb-3">
    <label for="sexe">Sexe</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexe" id="sexe" value="f" <?= (isset($employee) && $employee->sexe === "f") ? "checked" : ""; ?>>
      <label class="form-check-label" for="f">
        Féminin
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexe" id="sexe" value="m" <?= (isset($employee) && $employee->sexe === "m") ? "checked" : ""; ?>>
      <label class="form-check-label" for="m">
        Masculin
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Service</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Entrer votre service"
      name="service" value="<?= isset($employee) ? $employee->service : ""; ?>">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Date_embauche</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Entrer la date d'embauche"
      name="starting_date" value="<?= isset($employee) ? $employee->starting_date : ""; ?>">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Salaire</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Entrer la salaire" name="salaire" value="<?= isset($employee) ? $employee->salaire : ""; ?>">
  </div>
  <div class="mb-3">
    <?php if (isset($_GET["action"]) && $_GET["action"] == "modify") { ?>
      <button type="submit" class="btn btn-primary">Modifier</button>
    <?php } else { ?>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
    <?php } ?>
    
  </div>
  </form>
</div>