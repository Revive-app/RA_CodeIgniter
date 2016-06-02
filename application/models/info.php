<?php

class Info extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}


////////geting from DB////////////
	public function get_all_goals(){
		$query = "SELECT * FROM reviveapp.goals";
		return $this->db->query($query)->result_array();
	}

	public function get_all_interests(){
		$query = "SELECT * FROM reviveapp.interests";
		return $this->db->query($query)->result_array();
	}

	public function get_all_availability(){
		$query = "SELECT * FROM reviveapp.availability";
		return $this->db->query($query)->result_array();
	}

	public function get_all_intensity(){
		$query = "SELECT * FROM reviveapp.intensity";
		return $this->db->query($query)->result_array();
	}

	public function get_all_training_frequency(){
		$query = "SELECT * FROM reviveapp.training_frequency";
		return $this->db->query($query)->result_array();
	}



////////adding to DB///////////////
	public function addTrainer($trainer){
		$query = "INSERT INTO reviveapp.trainers (fullname, companyname, email, password, created_at ) VALUES (?,?,?,?,NOW())";
		//var_dump($trainer);
		$values = $trainer;
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}

	// public function addUser($user){
	// 	$query = "INSERT INTO reviveapp.trainers (fullname, email, password, created_at ) VALUES (?,?,?,NOW())";
	// 	//var_dump($trainer);
	// 	$values = $user;
	// 	$this->db->query($query, $values);
	// }


	public function login($trainer){
	$query = "SELECT email, password FROM trainers WHERE email = ?";
	$values = $trainer;
	return $this->db->query($query, $values)->row_array();
}

public function addTrainerGoal($goal){
	$query = "INSERT INTO reviveapp.trainers_goals (goal_id, trainer_id) VALUES (?,?)";
	$value = $goal;
 $this->db->query($query, $value);

}

public function addTrainerInterest($interest){
	$query = "INSERT INTO reviveapp.trainers_interests (interest_id, trainer_id) VALUES (?,?)";
	$value = $interest;
 $this->db->query($query, $value);

}

public function addTrainerDistance($distance){
	$query = "INSERT INTO reviveapp.Trainer_location (distance, trainer_id, trainer_address, primaryTrainingAddress, secondaryTrainingAddress) VALUES (?,?,?,?,?)";
	$value = $distance;
 $this->db->query($query, $value);
}

public function addTrainerAbout($about){
	$query = "UPDATE reviveapp.trainers SET gender = ? , aboutme = ? WHERE trainer_id=?";
	$value = array($about['gender'],$about['aboutme'],$about['trainer_id']);
 $this->db->query($query, $value);
}

}

//end of Information model
