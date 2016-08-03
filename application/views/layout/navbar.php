
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url() ?>"><?= $this->config->item('website_brand_name'); ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?=  site_url("p/about")?>"><span class="fa fa-info-circle"></span> دليل الاستخدام</a></li>
                <li><a href="<?=  site_url("projects")?>"><span class="fa fa-search"></span> مشاريعي</a></li>
   
            </ul>
<?php

if($this->ion_auth->logged_in()){
    $user_info = $this->ion_auth->user()->row();
    echo '<div class="btn-group navbar-form  navbar-left" role="group" aria-label="...">
        <a class="btn btn-default" href="'.site_url("auth/profile").'"><span class="fa fa-file"></span> '.lang("my_account") .'</a>
        <a class="btn btn-default" href="'.site_url("auth/logout").'"><span class="fa fa-sign-out"></span> '.lang("logout") .'</a>
                </div>';
}else{

    echo '<div class="btn-group navbar-form  navbar-left" role="group" aria-label="...">
                <button data-toggle="modal" data-target=".LoginFromModel" type="button" class="btn btn-default"><span class="fa fa-sign-in"></span>  '.lang("login_heading").'</button>
                <button  data-toggle="modal" data-target=".RegisterFromModel" type="button" class="btn btn-default"><span class="fa fa-user"></span> '.lang("register_heading").'</button> </div>';
}
?>

           
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php

if($this->ion_auth->logged_in()){
    
}else{
    $this->load->view("layout/login_navbar");
    $this->load->view("layout/register_navbar");
}

