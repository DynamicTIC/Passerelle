<?php $this->load->view('template/header');?>
<?php echo validation_errors(); ?>
<div class="content container-fluid"  id="id_div_container_add">
<div class="row mx-auto">
<div class="col-sm-12">
<div class="card comman-shadow">
<div class="card-body">
<?php echo form_open('C_enfants/add'); ?>
<div class="row">
<div class="col-12">
<h5 class="form-title student-info">Ajout d'enfants cibles <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Prénom <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Entrer le prénom">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nom <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Entrer le nom">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Genre <span class="login-danger">*</span></label>
<select class="form-control select">
<option>Selectionner Genre</option>
<option>Feminin</option>
<option>Masculin</option>
<option>Autres</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Date de naissance<span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Année de naissance<span class="login-danger">*</span></label>
<input class="form-control datetime" type="text" placeholder="Année de naissance">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Lieu de naissance <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Entrer lieu de naissance">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="type_enfant" class="form-label">Type d'enfant<span class="login-danger">*</span></label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionnez le type d'enfant</option>
      <option value="1">Descolarisé</option>
      <option value="2">non-scolarisé</option>
    </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="localisation" class="form-label">Localisation<span class="login-danger">*</span></label>
    <input type="text" class="form-control" id="localisation" placeholder="Localisation de l'enfant" name="localisation" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="derniere_classe_frequentee" class="form-label">derniere_classe_frequentee<span class="login-danger">*</span></label>
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
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="derniere_classe_frequentee" class="form-label">Extrait de naissance disponible<span class="login-danger">*</span></label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionnez OUI ou NON</option>
      <option value="1">OUI</option>
      <option value="2">NON</option>
    </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="raison_hors_systeme" class="form-label">Raison hors système<span class="login-danger">*</span></label>
    <input type="textarea" class="form-control" id="raison_hors_systeme" name="raison_hors_systeme" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="derniere_classe_frequentee" class="form-label">Avez-vous un handicape ?</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionnez OUI ou NON</option>
      <option value="1">OUI</option>
      <option value="2">NON</option>
    </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="derniere_classe_frequentee" class="form-label">Quel type de handicape ?</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionnez le type de handicape</option>
      <option value="1">Aucun</option>
      <option value="2">Type1</option>
      <option value="1">Type2</option>
      <option value="2">Type3</option>
      <option value="1">Type4</option>
      <option value="2">Type5</option>
    </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="derniere_classe_frequentee" class="form-label">Souffrez-vous d'un maladie ?</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionnez OUI ou NON</option>
      <option value="1">OUI</option>
      <option value="2">NON</option>
    </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="derniere_classe_frequentee" class="form-label">Quel type de maladie ?</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionnez le type de maladie</option>
      <option value="1">Aucun</option>
      <option value="2">Type1</option>
      <option value="1">Type2</option>
      <option value="2">Type3</option>
      <option value="1">Type4</option>
      <option value="2">Type5</option>
    </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="derniere_classe_frequentee" class="form-label">Vit-il avec ses parents ?</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionnez OUI ou NON</option>
      <option value="1">OUI</option>
      <option value="2">NON</option>
    </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Prénom Parent/Tuteur<span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Entrer le prénom">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Nom Parent/Tuteur<span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Entrer le nom">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="derniere_classe_frequentee" class="form-label">Lien de parenté ?</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Quel est votre lien de parenté ?</option>
      <option value="1">Oncle</option>
      <option value="2">grand père</option>
      <option value="3">grand mère</option>
      <option value="4">frère</option>
      <option value="5">soeur</option>
      <option value="6">Tante</option>
      <option value="2">parent lointain</option>
    </select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Téléphone Parent/Tuteur<span class="login-danger">*</span></label>
<input class="form-control" type="number" placeholder="Numéro de téléphone">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Année enrolée<span class="login-danger">*</span></label>
<input class="form-control" type="date" placeholder="Entrer le nom">
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label for="derniere_classe_frequentee" class="form-label">IEF ?</label>
    <select class="form-select" aria-label="Default select example">
      <option selected>Selectionner l'IEF de rattachement ?</option>
      <option value="1">IEF 1</option>
      <option value="2">IEF 2</option>
      <option value="3">IEF 3</option>
      <option value="4">IEF 4</option>
      <option value="5">IEF 5</option>
      <option value="6">IEF 6</option>
      <option value="2">IEF 7</option>
    </select>
</div>
</div>
<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Ajouter</button>
</div>
</div>
</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $this->load->view('template/footer');?>