<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
{
	public function get_info()
	{
		//On simule l'envoi d'une requete
		return array('auteur'=>'Chuck Norris','date'=>'24/07/05','email'=>'email]@ndd.fr');
	}

	public	function get_client()
	{
		$query= $this->db->query('SELECT first_name,last_name,email FROM customer');
		return $query->result_array();
	}
}
?>