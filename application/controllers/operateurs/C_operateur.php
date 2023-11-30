<?php
    class C_operateur extends MY_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('operateurs/M_operateur','operateur');
        }

        public function index(){
            $data['all_data'] = $this->operateur->get_data();
            $this->load->view('operateurs/V_operateur',$data);
        }

        public function get_record(){
            $args = func_get_args();

            $this->operateur->idOperateur=$args[0];
            $this->operateur->get_record();
            echo json_encode($this->operateur, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
        }

        public function delete(){
            $args = func_get_args();

            $this->operateur->idOperateur=$args[0];
            echo json_encode($this->operateur->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
        }

        public function save(){

            if ($this->input->post('idOperateur') != ''){

                $this->operateur->idOperateur = $this->input->post('idOperateur');
            }
            $doublon = $this->operateur->double_table($this->input->post('operateur'));
            if ($doublon == null)
            {
                $this->operateur->operateur = $this->input->post('operateur');

                echo json_encode($this->operateur->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
            }
            else{
                $d =array("statue"=>"ERREUR","message"=>"Cet operateur existe deja!");
                echo json_encode($d, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
                die();
            }

        }



        //public function nboublon(){
            //if ($this->input->post('id_filiere') != $this->filiere->id_filiere ){

                //echo 'pas de doublon';
            //}
    }