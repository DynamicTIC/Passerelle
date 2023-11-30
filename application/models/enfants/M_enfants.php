<?php
class M_enfants extends MY_Model {


    public $idEnfants_Cibles;
    public $nom;	
    public $prenom;	
    public $date_de_naissance;	
    public $annee_de_naissance;	
    public $lieu_de_naissance;	
    public $localisation;	
    public $type_enfant;	
    public $raison_hors_systeme;	
    public $derniere_classe_frequentee;	
    public $dispo_extrait_de_naissance;	
    public $handicape;	
    public $type_handicape;	
    public $existence_maladie;	
    public $type_maladie;	
    public $vit_avec_ses_parents;	
    public $prenom_parent_ou_tuteur;	
    public $nom_parent_ou_tuteur;	
    public $lien_parente;
    public $telephone_parent_ou_tuteur;
    public $annee_enrolee;	
    public $sexe;	
    public $code_IEF;	

    public function get_db_table()
    {
        return 'enfants_cibles';
    }

    public function get_db_table_pk()
    {
        return 'idEnfants_Cibles';
    }
    /*
    public function double_table($nom){
        $dou ='SELECT * FROM nom WHERE nom = "'.$nom.'"';
        $doub = $this->db->query($dou);
        return $doub->row();
    }*/
    // public function get_enfants() {
    //     return $this->db->get('enfants_cibles')->result();
    // }

    // public function add_enfant($data) {
    //     $this->db->insert('enfants_cibles', $data);
    //     return $this->db->insert_id();
    // }

    // public function update_enfant($id, $data) {
    //     $this->db->where('id', $id);
    //     return $this->db->update('enfants_cibles', $data);
    // }

    // public function delete_enfant($id) {
    //     return $this->db->delete('enfants_cibles', array('id' => $id));
    // }
}
