<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

    public function index() {
        // Initialisez la variable $email_verified à false (l'e-mail n'est pas vérifié)
        $data['email_verified'] = false;
        
        // Chargez la vue unique
        $this->load->view('auth/login', $data);
    }

    public function passeword() {
        // Ajoutez la logique de vérification du mot de passe ici
        $this->load->library('session');
        
        $email = $_POST['email'];
		$password = $_POST['password'];
 
		$data = $this->users_model->pwd($email, $password);

 
		if($data){

			$this->session->set_userdata('auth', $data);
			$this->load->view('template/layout', $data);
		}
		else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Identifiant invalide. Utilisateur non trouvé');
		} 
        // Si la vérification du mot de passe réussit, vous pouvez rediriger l'utilisateur vers la page d'accueil ou une autre page sécurisée
    }

    public function login() {
        // Chargez la bibliothèque de sessions
        $this->load->library('session');
    
        // Récupérez l'e-mail posté
        $email = $this->input->post('email');
    
        // Utilisez le modèle pour vérifier si l'e-mail existe dans la base de données
        $user_data = $this->users_model->login($email);
    
        if ($user_data) {
            // Si l'e-mail existe, stockez-le en session
            $this->session->set_userdata('auth_email', $email);
            $this->session->set_userdata('auth', $user_data); // Ajout du code pour stocker l'utilisateur dans la session
            $this->load->view('auth/pwd', $user_data); // Redirigez vers la page de saisie du mot de passe
        } else {
            // Si l'e-mail n'est pas trouvé, redirigez vers la page de connexion avec un message d'erreur
            $this->session->set_flashdata('error', 'Adresse e-mail non trouvée.');
            redirect('auth/index');
        }
    }
    
    
    public function show_data(){
        $this->load->library('session');

        // if (session_status() === PHP_SESSION_NONE) {
        //     echo "Les sessions PHP ne sont pas démarrées.";
        // } else {
        //     echo "Les sessions PHP sont démarrées.";
        // }
    
        if($this->session->userdata('auth')){
            //echo "La session a un utilisateur authentifié."; // Ajout du message
            $data['user_data'] = $this->session->userdata('auth');
            //echo "Le code est atteint"; // Ajout du message
            //var_dump($data['user_data']);  // Ajout de var_dump pour déboguer
            $this->load->view('template/top_bar', $data);
        } else {
            echo "Aucun utilisateur authentifié dans la session."; // Ajout du message
            redirect('/');
        }
    }
    
    
    

    // Méthode pour vérifier si l'e-mail existe dans la base de données
    private function check_email_exists($email) {
        // Chargez le modèle des utilisateurs
        $this->load->model('users_model');
    
        // Utilisez le modèle pour vérifier si l'e-mail existe dans la base de données
        $user_data = $this->users_model->login($email);
    
        // Retournez true si l'e-mail existe, sinon false
        return ($user_data !== null);
    }
    

    // public function home(){
	// 	//load session library
	// 	$this->load->library('session');
 
	// 	//restrict users to go to home if not logged in
	// 	if($this->session->userdata('user')){
	// 		$this->load->view('template/layout');
	// 	}
	// 	else{
	// 		redirect('/');
	// 	}
 
	// }
}
