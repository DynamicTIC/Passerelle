<?php $this->load->view('template/header');?>
<?php echo validation_errors(); ?>

<div class="container col-8 mt-5" id="id_div_container">
  <?php echo form_open('C_enfants/add'); ?>
  <div class="row">
    <div class="mb-3 col-6">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="mb-3 col-6">
      <label for="prenom" class="form-label">Prénom</label>
      <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>
  </div>

  <div class="row">
    <div class="mb-3 col-4">
      <label for="date_de_naissance" class="form-label">Date de naissance</label>
      <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" required>
    </div>
    <div class="mb-3 col-4">
      <label for="annee_de_naissance" class="form-label">Année de naissance</label>
      <input type="number" class="form-control" id="annee_de_naissance" name="annee_de_naissance" required>
    </div>
    <div class="mb-3 col-4">
      <label for="lieu_de_naissance" class="form-label">Lieu de naissance</label>
      <input type="text" class="form-control" id="lieu_de_naissance" name="lieu_de_naissance" required>
    </div>
  </div>

  <div class="row">
  <div class="mb-3 col-6">
    <label for="localisation" class="form-label">Localisation</label>
    <input type="text" class="form-control" id="localisation" name="localisation" required>
  </div>

  <!--  début raison hors systeme -->
  <div class="mb-3 col-6">
    <label for="type_enfant" class="form-label">Type d'enfant</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionnez le type d'enfant</option>
      <option value="1">Descolarisé</option>
      <option value="2">non-scolarisé</option>
    </select>
  </div>
  <!--  fin type d'enfant -->
  </div>

  <!--  début raison hors systeme -->
  <div class="mb-3">
    <label for="raison_hors_systeme" class="form-label">Raison hors système</label>
    <input type="textarea" class="form-control" id="raison_hors_systeme" name="raison_hors_systeme" required>
  </div>
  <!--  fin raison hors systeme -->

  <!--  début derniere_classe_frequentee -->
  <div class="mb-3">
    <label for="derniere_classe_frequentee" class="form-label">derniere_classe_frequentee</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionnez la derniere classe fréquentée</option>
      <option value="1">CI</option>
      <option value="2">CP</option>
      <option value="3">CE1</option>
      <option value="3">CE2</option>
      <option value="3">CM1</option>
      <option value="3">CM2</option>
    </select>
  </div>
  <!--  fin derniere_classe_frequentee -->

  <!--  début dispo_extrait_de_naissance -->
  <div class="mb-3 row">
    <h6>Extrait de naissance disponible</h6>
    <div class="form-check col-2">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        Oui
      </label>
    </div>
    <div class="form-check col-2">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
      <label class="form-check-label" for="flexRadioDefault2">
        Non
      </label>
    </div>
  </div>
  <!--  fin dispo_extrait_de_naissance -->
  <div class="form-group">
    <label for="disabledSelect" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
      </select>
    </div>
  </div>
  <!-- ... Ajoutez les autres champs de la même manière ... -->


  <button type="submit" class="btn btn-primary">Ajouter</button>
  <?php echo form_close(); ?>
</div>
<?php $this->load->view('template/footer');?>