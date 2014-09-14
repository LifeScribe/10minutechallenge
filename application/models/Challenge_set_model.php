<?php
//Challenge set model for interacting with the challenge set table in the database

class Challenge_set_model extends CI_Model {

	//challenge set attributes
	var $attr   = Array();

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/*
	 * Get a challenge set by $id, $challenge_id
	 * 
	 * $id - id number
	 * $table - table name (challenge_set, challenge)
	 * 
	 * Returns an object with all fields
	 * in the challenge set table and
	 * 
	 */
	function get_challenge_set($id, $table = "challenge_set"){		
		$this->db->select('challenge_set.*, challenge.id, challenge.description AS "challenge_description"');
		$this->db->from('challenge_set');
		$this->db->join('challenge', 'challenge.id = challenge_set.challenge_id');
		
		
		$this->db->where($table.'.id', $id);
		
		$query = $this->db->get();

		$attr = $query->result();
		
		return $attr;
	}
	
	/*
	 * Updates a challenge by $id with $data
	 * 
	 * $data - associative array with optional 'description', optional 'media'
	 * and optional 'hashtag'
	 */
	function update_challenge($id, $data){
		$this->db->update("challenge", $data, "id = ".$id);
	}
	
	/*
	 * Adds a new challenge to the database
	 * 
	 * $data - associative array with 'description', optional 'media'
	 * and optional 'hashtag'
	 */
	function insert_challege($data){
		$this->db->set($data);
		$this->db->insert("challenge");
	}

}
?>