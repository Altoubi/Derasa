<nav class="navbar navbar-inverse" style="border-radius:0 !important">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            $user_info = $this->ion_auth->user()->row();
            ?>
            <span class="navbar-brand" ><?= lang('welcome_user') . ' ' . $user_info->first_name ?>!</span>
        </div>
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav pull-left loggged_links">
                <?php
                if ($this->ion_auth->in_group("admin")) {
                    ?>
                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <li><a href="<?= site_url("auth/index") ?>"><span class="fa fa-users"></span> <?= lang('index_heading') ?></a></li>
                    <li><a href="<?= site_url("pages/lists") ?>"><span class="fa fa-file"></span> <?= lang('pages_index_heading') ?></a></li>
                    <?php
                } 
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

