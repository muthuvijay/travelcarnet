<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listings extends CI_Controller {

	private $data;
	public function __construct(){
		parent::__construct();
		
		$this->load->model('listModel');
	}
	
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		
		$data['data'] = $this->listModel->get_listings();
		
		$this->load->view('listings',$data);
	}
	
	
	public function saveListings(){
		
		if($_POST){
			$inserted = $this->listModel->save_listings();
		
			if($inserted){
				
				$out['status'] = 1;
			}else{
				$out['status'] = 0;
			}
			
			echo json_encode($out);
		}else{
			die('Cant access directly');
		}
	}
}
