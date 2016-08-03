<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages_model
 *
 * @author altou
 */
class Pages_model extends CI_Model {
    
    public function get($ID = FALSE ,$field = 'id')
    {
	if ($ID === FALSE)
	{
		$query = $this->db->get('pages');
		return $query->result_array();
	}

	$query = $this->db->get_where('pages', array($field => $ID));
	return $query->row_array();
    }
    
    public function set()
    {

	$data = array(
                'name' => $this->input->post('name'),
		'title' => $this->input->post('title'),
		'content' => $this->input->post('content'),
		'added' => time()
	);

	return $this->db->insert('pages', $data);
    }
    
    public function update($id)
    {

	$data = array(
                'name' => $this->input->post('name'),
		'title' => $this->input->post('title'),
		'content' => $this->input->post('content'),
		'added' => time()
	);
        
        $this->db->where('id', $id);
	return $this->db->update('pages', $data);
    }
}
