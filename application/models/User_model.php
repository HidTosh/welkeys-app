<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class User_model extends CI_Model {

		public $nom;
        public $prenom;
        public $email;
        public $id;

  function __construct() {
    parent::__construct();
  } 

    //function insert data
    public function insert_users()
    {
        if(!empty($_POST)){ 
            $this->nom     = $_POST['cd_name'];
            $this->prenom  = $_POST['cd_prenom'];
            $this->email   = $_POST['cd_email'];
            $this->db->insert('users', $this);
        }
    }

    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function delete_users()
    {
        if(!empty($_POST)){ 
            $id_user = $this->id = $_POST['id_user'];
            $this->db->where('id', $id_user);
            $this->db->delete('users');
        }
    }

}