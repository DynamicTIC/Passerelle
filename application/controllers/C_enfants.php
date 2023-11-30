<?php
class C_enfants extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('enfants/M_enfants', 'enfant');
    }

    public function index() {
        $data['all_data'] = $this->enfant->get_data();
        $this->load->view('enfants/V_enfants', $data);
    }

    public function add() {
        // Récupérer les données du formulaire
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom                        = $this->input->post('nom');
            $prenom                     = $this->input->post('prenom');
            $date_de_naissance          = $this->input->post('date_de_naissance');
            $annee_de_naissance         = $this->input->post('annee_de_naissance');
            $lieu_de_naissance          = $this->input->post('lieu_de_naissance');
            $localisation               = $this->input->post('localisation');
            $type_enfant                = $this->input->post('type_enfant');
            $raison_hors_systeme        = $this->input->post('raison_hors_systeme');
            $derniere_classe_frequentee = $this->input->post('derniere_classe_frequentee');
            $dispo_extrait_de_naissance = $this->input->post('dispo_extrait_de_naissance');
            $handicape                  = $this->input->post('handicape');
            $type_handicape             = $this->input->post('type_handicape');
            $existence_maladie          = $this->input->post('existence_maladie');
            $type_maladie               = $this->input->post('type_maladie');
            $vit_avec_ses_parents       = $this->input->post('vit_avec_ses_parents');
            $prenom_parent_ou_tuteur    = $this->input->post('prenom_parent_ou_tuteur');
            $nom_parent_ou_tuteur       = $this->input->post('nom_parent_ou_tuteur');
            $lien_parente               = $this->input->post('lien_parente');
            $telephone_parent_ou_tuteur = $this->input->post('telephone_parent_ou_tuteur');
            $annee_enrolee              = $this->input->post('annee_enrolee');
            $sexe                       = $this->input->post('sexe');
            $code_IEF                   = $this->input->post('code_IEF');
            $data = array(
            'nom'                       =>$this->input->post('nom'),
            'prenom'                    =>$this->input->post('prenom'),
            'date_de_naissance'         =>$this->input->post('date_de_naissance'),
            'annee_de_naissance'        =>$this->input->post('annee_de_naissance'),
            'lieu_de_naissance'         =>$this->input->post('lieu_de_naissance'),
            'localisation'              =>$this->input->post('localisation'),
            'type_enfant'               =>$this->input->post('type_enfant'),
            'raison_hors_systeme'       =>$this->input->post('raison_hors_systeme'),
            'derniere_classe_frequentee'=>$this->input->post('derniere_classe_frequentee'),
            'dispo_extrait_de_naissance'=>$this->input->post('dispo_extrait_de_naissance'),
            'handicape'                 =>$this->input->post('handicape'),
            'type_handicape'            =>$this->input->post('type_handicape'),
            'existence_maladie'         =>$this->input->post('existence_maladie'),
            'type_maladie'              =>$this->input->post('type_maladie'),
            'vit_avec_ses_parents'      =>$this->input->post('vit_avec_ses_parents'),
            'prenom_parent_ou_tuteur'   =>$this->input->post('prenom_parent_ou_tuteur'),
            'nom_parent_ou_tuteur'      =>$this->input->post('nom_parent_ou_tuteur'),
            'lien_parente'              =>$this->input->post('lien_parente'),
            'telephone_parent_ou_tuteur'=>$this->input->post('telephone_parent_ou_tuteur'),
            'annee_enrolee'             =>$this->input->post('annee_enrolee'),
            'sexe'                      =>$this->input->post('sexe'),
            'code_IEF'                  =>$this->input->post('code_IEF')
        );
        $status =  $this->enfant->add_enfant($data);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Added');
                redirect(base_url('sys/C_enfants/add'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('enfants/V_ajout_enfant');
            }
        } else {
            $this->load->view('enfants/V_ajout_enfant');
        }
    }

    public function edit($id) {
        // Récupérer les données de l'enfant avec l'ID $id
        // Charger la vue d'édition
        $this->load->view('enfants/V_edit_enfant');
    }

    public function update($id) {
        // Récupérer les données du formulaire
        // Mettre à jour l'enfant avec l'ID $id
        redirect('C_enfants');
    }

    public function delete($id) {
        $this->enfant->delete_enfant($id);
        redirect('C_enfants');
    }
}



    // class C_enfants extends MY_Controller{
    //     public function __construct()
    //     {
    //         parent::__construct();
    //         $this->load->model('enfants/M_enfants', 'enfant');
    //     }

    //     public function index(){
    //         $data['all_data'] = $this->enfant->get_data();
    //         $this->load->view('enfants/V_enfants',$data);
    //     }

    //     public function get_record(){
    //         $args = func_get_args();

    //         $this->enfant->idEnfants_Cibles=$args[0];
    //         $this->enfant->get_record();
    //         echo json_encode($this->enfant, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    //     }

    //     public function delete(){
    //         $args = func_get_args();

    //         $this->enfant->idEnfants_Cibles=$args[0];
    //         echo json_encode($this->enfant->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    //     }

    //     public function save(){

    //         if ($this->input->post('idEnfants_Cibles') != ''){

    //             $this->direction->id_direction = $this->input->post('idEnfants_Cibles');
    //         }
    //         $doublon = $this->direction->double_table($this->input->post('enfant'));
    //         if ($doublon == null)
    //         {
    //             $this->enfant->nom = $this->input->post('nom');
    //             $this->enfant->prenom = $this->input->post('prenom');
    //             $this->enfant->date_de_naissance = $this->input->post('date_de_naissance');
    //             $this->enfant->nom = $this->input->post('nom');
    //             $this->enfant->nom = $this->input->post('nom');
    //             $this->enfant->nom = $this->input->post('nom');
    //             $this->enfant->nom = $this->input->post('nom');
    //             $this->enfant->nom = $this->input->post('nom');
    //             $this->enfant->nom = $this->input->post('nom');
    //             $this->enfant->nom = $this->input->post('nom');

    //             echo json_encode($this->direction->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    //         }
    //         else{
    //             $d =array("statue"=>"ERREUR","message"=>"Cette direction existe deja!");
    //             echo json_encode($d, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    //             die();
    //         }

    //     }



    //     //public function nboublon(){
    //         //if ($this->input->post('id_direction') != $this->direction->id_direction ){

    //             //echo 'pas de doublon';
    //         //}
    // }