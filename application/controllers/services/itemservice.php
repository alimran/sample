<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itemservice extends CI_Controller {

	public function itemList()
	{
		$this->db->join('shops', 'shops.shop_id=items.shop_id');
		$result = $this->db->get('items');

		echo json_encode($result->result());
	}

}