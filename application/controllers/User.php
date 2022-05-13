<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

 class User extends CI_Controller
 {
 	public function acceuil()
 	{
 		//chargement du modèle de gestion des news
 		$this->load->model('news_model');
 		$data=array();

 		//On lance une requete
 		$data['user_info']=$this->news_model->get_info();

 		//On inclut une vue
 		$this->load->view('ma_vue',$data);
 	}

 	public function client()
 	{
 		$this->load->model('news_model');
 		$data=array();

 		//On lance une requete
 		$data['client_info']=$this->news_model->get_client();

 		//On inclut une vue
 		$this->load->view('ma_vue',$data);
 	}
 }
 ?>