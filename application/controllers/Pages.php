<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 *
 * @author altou
 */
class Pages extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->data = "";
    }

    public function index($name = '') {
        if(empty($name)){
            $this->_only_for("admin");
        }

        $data = $this->pages->get($name, 'name');
        $this->_render_page('pages/index', $data);
    }

    public function lists() {
        $this->_only_for();
        $data['items'] = $this->pages->get();
        $this->_render_page('pages/list', $data);
    }

    public function add() {


        $this->form_validation->set_rules('name', lang('name'), 'required');
        $this->form_validation->set_rules('title', lang('title'), 'required');
        $this->form_validation->set_rules('content', lang('content'), 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->_render_page('pages/add');
        } else {
            $this->pages->set();
            redirect(site_url('pages/lists'));
        }
    }

    public function update($id = '') {

        if (empty($id)) {
            redirect(site_url());
        }


        $this->form_validation->set_rules('name', lang('name'), 'required');
        $this->form_validation->set_rules('title', lang('title'), 'required');
        $this->form_validation->set_rules('content', lang('content'), 'required');

        if ($this->form_validation->run() === FALSE) {
            $data = $this->pages->get($id);
            $this->_render_page('pages/update', $data);
        } else {
            $this->pages->update($id);
            redirect(site_url('pages/lists'));
        }
    }

    public function delete($id) {

        $this->db->delete('pages', array('id' => $id));
        redirect($_SERVER['HTTP_REFERER']);
    }

    function _render_page($view, $data = null, $returnhtml = false) {//I think this makes more sense
        $this->viewdata = (empty($data)) ? $this->data : $data;
        $this->load->view("layout/header");
        $view_html = $this->load->view($view, $this->viewdata, $returnhtml);
        $this->load->view("layout/footer");
        if ($returnhtml)
            return $view_html; //This will return html on 3rd argument being true
    }

    protected function _only_for($group = "admin") {
        if (!$this->ion_auth->in_group($group)) {
            $this->load->view("layout/header");
            $this->load->view('not_allowed');
            $this->load->view("layout/footer");

            $this->output->_display();
            exit();
        }
    }

}
