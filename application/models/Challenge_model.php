<?php
//Challenge model for interacting with the challenge table in the database

class Challenge_model extends CI_Model {

	//challenge attributes
	var $attr   = Array();

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/*
	 * Get a challenge by $id
	 * 
	 * $id - int challenge id
	 * 
	 * Returns an object with all fields
	 * in the challenge table and the sequence
	 * number from the challenge_set table
	 */
	function get_challenge($id){
		$this->db->select('challenge.*,challenge_set.sequence');
		$this->db->from('challenge');
		$this->db->join('challenge_set', 'challenge.id = challenge_set.challenge_id');
		$this->db->where('challenge.id', $id);
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