<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Projects extends CI_Controller {

    public $data = null;

    public function index() {
        if ($this->ion_auth->logged_in()) {
            if ($this->ion_auth->in_group("members")) {

                // load member dashboard
                $this->form_validation->set_rules('proj_name', lang('name'), 'required|callback_not_dup');
                $this->form_validation->set_rules('proj_desc', lang('title'), 'required');
                if ($this->form_validation->run() === FALSE) {
                    $this->_render_page("projects/index");
                } else {
                    $this->projects->set();
                    $this->_render_page("projects/index");
                }
            } else {

                $this->_render_page("welcome/index");
            }
        } else {
            $this->_render_page("welcome/index");
        }
    }

    public function project($id = 0) {
        if ($this->projects->check_proj_exsits($id)) {
            $this->_render_page("projects/project");
        } else {
            
        }
    }

    public function proj_person($id) {
        if ($this->projects->check_proj_exsits($id)) {
            // load member dashboard
                $this->form_validation->set_rules('phone', "رقم الهاتف", 'required|exact_length[8]');
                $this->form_validation->set_rules('email', lang('email'), 'required|valid_email');
                if ($this->form_validation->run() === FALSE) {
                   $data = $this->projects->getProjPerson($id);
                   $this->_render_page("projects/proj/person",$data);
                } else {
                    $this->projects->update_person($id);
                    redirect(site_url("project/".$id."/person"));
                }
            
        } else {
            
        }
    }
    
    public function proj_info($id) {
        if ($this->projects->check_proj_exsits($id)) {
            // load member dashboard
                $this->form_validation->set_rules('title', "اسم المشروع", 'required');
                $this->form_validation->set_rules('address', "عنوان المشروع", 'required');
                if ($this->form_validation->run() === FALSE) {
                   $data = $this->projects->getProjInfo($id);
                   $this->_render_page("projects/proj/info",$data);
                } else {
                    $this->projects->update_proj_info($id);
                    redirect(site_url("project/".$id."/info"));
                }
            
        } else {
            
        }
    }
    public function proj_delete($id) {
        $this->projects->delete_project($id);
        redirect(site_url());
    }
    public function proj_update($id) {
        if ($this->projects->check_proj_exsits($id)) {
            // load member dashboard
                $this->form_validation->set_rules('projname', "اسم المشروع", 'required');
                $this->form_validation->set_rules('projdesc', "وصف", 'required');
                if ($this->form_validation->run() === FALSE) {
                   
                   redirect(site_url($this->input->post("url")));
                } else {
                    $data = $this->projects->update_project($id);
                    redirect(site_url($this->input->post("url")));
                }
            
        } else {
            
        }
    }
    
    public function proj_skills($id){
        if ($this->projects->check_proj_exsits($id)) {
            // load member dashboard
                $this->form_validation->set_rules('key', "key", 'required');
                $this->form_validation->set_rules('have', "key", 'required');
                $this->form_validation->set_rules('nothave', "key", 'required');
                if ($this->form_validation->run() === FALSE) {
                   $data = $this->projects->getProjSkills($id);
                   $this->_render_page("projects/proj/skills",$data);
                } else {
                    if(isset($_POST['update_sid'])){
                    $this->projects->update_proj_skill($id);
                    }else{
                        $this->projects->insert_proj_skill($id);
                    }
                    redirect(site_url("project/".$id."/skills"));
                }   
        } else {    }
    }
    function not_dup() {
        return $this->projects->check_nod();
    }

    function _render_page($view, $data = null, $returnhtml = false) {//I think this makes more sense
        $this->viewdata = (empty($data)) ? $this->data : $data;
        $this->load->view("layout/header");
        $view_html = $this->load->view($view, $this->viewdata, $returnhtml);
        $this->load->view("layout/footer");
        if ($returnhtml)
            return $view_html; //This will return html on 3rd argument being true
    }

}
