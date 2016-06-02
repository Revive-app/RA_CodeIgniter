<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->model("Info");	}

	public function index()
	{
		$this->load->view("main.php");
	}

	public function addTrainer(){
		$trainer = $this->input->post();
			//  var_dump($trainer);

			$trainer_id = $this->Info->addTrainer($trainer);
      echo json_encode(array("trainer"=>$trainer_id));

		//	redirect('/');
	}

public function addTrainerDistance(){
	$distance = $this->input->post();
	$this->Info->addTrainerDistance($distance);
  echo json_encode(array("distance"=>$distance));
}

public function addTrainerAbout(){
	$about = $this->input->post();
	$this->Info->addTrainerAbout($about);
  echo json_encode(array("about"=>$about));
}

public function addTrainerImage(){
	// $config['upload_path'] = './uploads/';
	// $config['allowed_types'] = 'gif|jpg|png';
	// $config['max_size']	= '1034';
	// $config['max_width'] = '1024';
	// $config['max_height'] = '768';
	//
	// $this->load->library('upload', $config);
	//
	// // Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
	// $this->upload->initialize($config);
	//$image = $this->input->post();
	$trainerId = $this->input->post("trainerId");
	$target_dir = 'assets/images';

	$target_file = $target_dir . "/" . basename($_FILES["file"]["name"]);



	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
{
echo json_encode([
"Message" => "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.",
"Status" => "OK",
"trainerId" => $trainerId
]);

} else {

echo json_encode([
"Message" => "Sorry, there was an error uploading your file.",
"Status" => "Error",
"trainerId" => $trainerId
]);

}
	//$target_file = $target_dir . basename($_FILES['file']['name']);
// 	if(!file_exists($target_dir)){
// 		mkdir($target_dir, 0777, true);
// 	}
// ​
// move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
// 		// var_dump($_FILES);
// 		// var_dump($_POST);
// 		if (isset($_SESSION) && isset($_SESSION['itemPicture'])) {
// 			$_SESSION['itemPicture'] = '.'.$target_file;
// 		}

}


public function addTrainerGoal(){
	$goal_id = $this->input->post();
 //var_dump($goal_id);
	$this->Info->addTrainerGoal($goal_id);
	echo json_encode(array("trainer"=>$goal_id));
}

public function addTrainerInterest(){
	$interest_id = $this->input->post();
 //var_dump($goal_id);
	$this->Info->addTrainerInterest($interest_id);
	echo json_encode(array("trainer"=>$interest_id));



}
	public function addUser(){
		$user = $this->input->post();
			//  var_dump($trainer);
			 echo json_encode(array($user));
			$this->Info->addUser($user);
			redirect('/');
	}

	public function loginTrainer(){
		$trainer = $this->input->post();

		$trainerEmail = $this->Info->login($trainer["email"]);

		if($trainer["password"] == $trainerEmail["password"]){
			echo json_encode(array("status"=>"success"));
		} else {
			echo json_encode(array("status"=>"failure"));
		}
	}

	public function goals(){
		$goals = $this->Info->get_all_goals();
		$result = array('goals' =>  $goals);
		echo json_encode($result);
	}

	public function interests(){
		$interests = $this->Info->get_all_interests();
		$result = array('interests' =>  $interests);
		echo json_encode($result);
	}

	public function availability(){
		$availability = $this->Info->get_all_availability();
		$result = array('availability' =>  $availability);
		echo json_encode($result);
	}

	public function intensity(){
		$intensity = $this->Info->get_all_intensity();
		$result = array('intensity' =>  $intensity);
		echo json_encode($result);
	}

	public function training_frequency(){
		$training_frequency = $this->Info->get_all_training_frequency();
		$result = array('availability' =>  $training_frequency);
		echo json_encode($result);
	}
}

//end of main controller
