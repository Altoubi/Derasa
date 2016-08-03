<!doctype html>
<html>
    <head>
        <?php $this->load->view("layout/head"); ?>
    </head>
    <body>
        <?php $this->load->view("layout/navbar"); ?>
        <?php
        if ($this->ion_auth->logged_in()) {
            $this->load->view("layout/logged_nav");
        }
        ?>
     
