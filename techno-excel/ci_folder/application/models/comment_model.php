<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {

	public function get_comment($id)
	{
		$query = $this->db->get_where('webcomment', array('id' => $id));
		//$query = $this->db->query('SELECT * FROM webcomment WHERE id=1');
		$row = $query->row(); 
		return $row->comment;
	}
	
	public function get_sidebar()
	{
		$query_sidebar = $this->db->get_where('webcomment', array('id' => 16));
		$row = $query_sidebar->row(); 
		return $row->comment;
	}

	
}