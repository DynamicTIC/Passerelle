<?php
class M_operateur extends MY_Model{
    public $idOperateur;
    public $nom;	
    public $prenom;	
    public $annee_de_recrutement;
    public $adresse;
    public $email;	
    public $Tel;

    public function get_db_table()
    {
        return 'operateur';
    }

    public function get_db_table_pk()
    {
        return 'idOperateur';
    }
    
    public function double_table($email){
        $dou ='SELECT * FROM operateur WHERE operateur = "'.$email.'"';
        $doub = $this->db->query($dou);
        return $doub->row();
    }


}