<?php

class listModel extends CI_Model{
	
	public function __construct(){
		parent::__construct();
// 		$this->load->database();
	}
	
	public function get_listings(){
		
// 		$this->db->select('magId,magName,magDescription');
// 		$this->db->from('magazines');

		$sql = "select magId,magName,magDescription,item_id from magazines m 
					left join user_listings u on u.item_id = m.magId";
		
		$query = $this->db->query($sql);
		return $result = $query->result();
	}

	public function save_listings(){
		
		$query = "Insert into user_listings
					Set user_id = '".$_POST['user_id']."',
						item_id = '".$_POST['item_id']."',
						type = '".$_POST['type']."'
				on duplicate key update				
						user_id = '".$_POST['user_id']."',
						item_id = '".$_POST['item_id']."',
						type = '".$_POST['type']."'";
		$this->db->query($query);
		
		return $this->db->affected_rows();
	}
	
}