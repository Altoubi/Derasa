<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Projects_model extends CI_Model {

    public function getUID() {
        $user_info = $this->ion_auth->user()->row();
        if(@$user_info->id>0)
            return $user_info->id;
        else
            return 0;
    }

    public function getProjPerson($proj_id) {
        return $this->db->get_where('persons', array("person_project_id" => $proj_id))->row_array();
    }
    public function getProjInfo($proj_id) {
        return $this->db->get_where('projects_info', array("project_id" => $proj_id))->row_array();
    }
    public function get($projID = false) {

        if ($projID === FALSE) {
            $query = $this->db->get_where('projects', array("status" => 0, "user_id" => $this->getUID()));
            if ($query->num_rows() > 0) {
                return $query->result_array();
            } else {
                return FALSE;
            }
        } else {
            $query = $this->db->get_where('projects', array("status" => 0, "id" => $projID, "user_id" => $this->getUID()));
            return $query->row_array();
        }
    }
    public function getProjSkills($projID ) {
            $query = $this->db->get_where('projects_skills', array("project_id" => $projID));
            if ($query->num_rows() > 0) {
                return $query->result_array();
            } else {
                return FALSE;
            }
    }

    
    /// updates --------------------------
    
    public function update_person($id){
        $data = array(
            "person_name"=>  $this->input->post("name"),
            "person_dob"=>  $this->input->post("dob"),
            "person_mpc_id"=>  $this->input->post("mc"),
            "person_nc_id"=>  $this->input->post("nc"),
            "person_phone"=>  $this->input->post("phone"),
            "person_email"=>  $this->input->post("email"),
            "person_study"=>  $this->input->post("study"),
            "person_address_work"=>  $this->input->post("address_work"),
            "person_address"=>  $this->input->post("address"),
        );
        $this->db->where('person_project_id', $id);
        return $this->db->update("persons",$data);
    }
    public function update_proj_info($id){
        $data = array(
            "project_title"=>  $this->input->post("title"),
            "project_address"=>  $this->input->post("address"),
            "project_intro"=>  $this->input->post("intro"),
            "project_mission"=>  $this->input->post("mission"),
            "project_vision"=>  $this->input->post("vision"),
            "project_goals"=>  $this->input->post("goals"),
            "project_start_idea"=>  $this->input->post("start_idea"),
            "project_features"=>  $this->input->post("features"),
        );
        $this->db->where('project_id', $id);
        return $this->db->update("projects_info",$data);
    }
    public function update_proj_skill($id){
        $data = array(
            "skill_key"=>  $this->input->post("key"),
            "skill_have"=>  $this->input->post("have"),
            "skill_not_have"=>  $this->input->post("nothave")
        );
        $this->db->where('project_id', $id);
        $this->db->where('project_skills_id', $this->input->post("update_sid"));
        return $this->db->update("projects_skills",$data);
    }
    public function insert_proj_skill($id){
        $data = array(
            "project_id"=>  $id,
            "skill_key"=>  $this->input->post("key"),
            "skill_have"=>  $this->input->post("have"),
            "skill_not_have"=>  $this->input->post("nothave")
        );
        return $this->db->insert("projects_skills",$data);
    }
    public function update_project($id){
        $data = array(
            "title"=>  $this->input->post("projname"),
            "description"=>  $this->input->post("projdesc")
        );
         $this->db->where('id', $id);
        return $this->db->update("projects",$data);
    }
    public function delete_project($id){
        $data = array(
            "status"=>  8,
        );
         $this->db->where('id', $id);
        return $this->db->update("projects",$data);
    }
    
    // updates end ---------------- end ---------------
    function check_nod() {
        $name = $this->input->post('proj_name');
        $query = $this->db->get_where('projects', array("status" => 0, "user_id" => $this->getUID(), "title" => $name));
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('not_dup', 'اسم المشروع  اللذي تحاول ادخاله موجود مسبقا ');
            return false;
        } else {
            return true;
        }
    }

    function check_proj_exsits($id) {
        $query = $this->db->get_where('projects', array("status" => 0, "user_id" => $this->getUID(), "id" => $id));
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function set() {
        $title = $this->input->post('proj_name');
        $data = array(
            'description' => $this->input->post('proj_desc'),
            'title' => $title,
            'user_id' => $this->getUID(),
            'added' => time()
        );
        // insert new project 
        $this->db->insert('projects', $data);
        
        // get this project id
        $query = $this->db->get_where('projects', array("title" => $title, "user_id" => $this->getUID()))->row_array();
        $project_id = array("project_id"=>$query['id']);
        
        // insert project information
        $this->db->insert('projects_info', $project_id);
        
        // get user information
        $user_info = $this->ion_auth->user()->row();
        $user_data = array(
            'person_name' => $user_info->first_name,
            'person_phone' => $user_info->phone,
            'person_email' => $user_info->email,
            'person_project_id' => $query['id']
        );
        // insert person row in persons table
        return $this->db->insert('persons', $user_data);
        //return $this->db->insert('projects', $data);
    }

}
