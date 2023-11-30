<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {

    function __construct(){
		parent::__construct();
        $this->load->library('form_validation')
		$this->load->library('encrypt');
		$this->load->model('register_model');
	}

    public function index(){

        $this->load->view(register);

    }

    public function validation(){
        $this->form_validation->set_rules('user_fname','Prenom','required|trim');
        $this->form_validation->set_rules('user_lname','Nom','required|trim');
        $this->form_validation->set_rules('user_email','Adresse email','required|trim|valid_email|is_unique[codeigniter_register.email]');
        $this->form_validation->set_rules('user_password','Mot de passe','required');
        if($this->form_validation->run()){
            $verification_key = md5(rand());
            $encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
            $data = array(
                'fname' => $this->input->post('user_fname'),
                'lname' => $this->input->post('user_lname'),
                'email' => $this->input->post('user_email'),
                'password' => $encrypted_password,
                'verification_key' => $verification_key
            );
            $id = $this->register_model->insert($data);
            if($id>0){
                $subject = "Svp verifie ton email pour se connecter";
                $message = " <p>Salu!".$this->input->post('user_fname')."</p>
                             <p>Ce mail est un mail de verification de creation de votre compte. Pour la validation 
                             de lenregistrement de votre compte, 
                             cliquez sur le lien<a href='".base_url()."register/verify_email/".$verification_key."'>verifier</a></p>";
                $config = array(
                    'protocol'      => 'smtp',
                    'smtp_host'     => 'smtpout.secureserver.net',
                    'smtp_port'     => 80,
                    'smtp_user'     => 'xxxxxx',
                    'smtp_pass'     => 'xxxxxx',
                    'mailtype'      => 'html',
                    'charset'       => 'iso-8859-1',
                    'wordwrap'      => TRUE,
                );
                $this->load->library('email', $config); 
                $this->email->set_newline("\r\n");
                $this->email->from('abou.sall@unchk.edu.sn');
                $this->email->to($this->input->post('user_email'));

                $this->email->subject($subject);
                $this->email->message($message);
                if($this->email->send()){
                    $this->session->set_flashdata('message', 'vérifiez votre boite e-mail pour le courrier de vérification de l\'e-mail');
                    redirect('register');
                }
            }

        }else{
            $this->index();
        }
    }


}