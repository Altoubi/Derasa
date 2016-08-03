<div class="container padding">
    <div class="panel panel-default">
        <div class="panel-head">

            <span class="fa fa-file-text-o"></span> <?= lang('create_user_heading'); ?> 
            <div class="btn-group  pull-left">
                <a class="btn btn-sm btn-primary" href="<?= site_url('auth/create_group') ?>">
                 <span class="fa fa-plus-circle"></span>     <?= lang('index_create_group_link') ?></a>
                <a class="btn btn-sm btn-default" href="<?= site_url('auth/') ?>">
                   <?= lang('pages_back_to_menu') ?> <span class="fa fa-arrow-circle-left"></span>  </a>
                
            </div>
        </div>
            <div class="panel-body">
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

      <p>
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

      <p>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($password_confirm);?>
      </p>


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

<?php echo form_close();?>
            </div></div></div>