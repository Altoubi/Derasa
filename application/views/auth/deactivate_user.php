<div class="container padding">
    <div class="panel panel-default">
        <div class="panel-head">

            <span class="fa fa-file-text-o"></span> <?= lang('deactivate_heading'); ?> 
            <div class="btn-group  pull-left">
                <a class="btn btn-sm btn-primary" href="<?= site_url('auth/create_group') ?>">
                 <span class="fa fa-plus-circle"></span>     <?= lang('index_create_group_link') ?></a>
                <a class="btn btn-sm btn-primary" href="<?= site_url('auth/create_user') ?>">
                 <span class="fa fa-plus-circle"></span>     <?= lang('index_create_user_link') ?></a>
                <a class="btn btn-sm btn-default" href="<?= site_url('auth/') ?>">
                   <?= lang('pages_back_to_menu') ?> <span class="fa fa-arrow-circle-left"></span>  </a>
                
            </div>
        </div>
            <div class="panel-body">
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

<?php echo form_open("auth/deactivate/".$user->id);?>

  <p>
  	<?php echo lang('deactivate_confirm_y_label', 'confirm_yes');?>
      <input type="radio" id="confirm_yes" name="confirm" value="yes" checked="checked" />
    <?php echo lang('deactivate_confirm_n_label', 'confirm_no');?>
      <input type="radio" id="confirm_no" name="confirm" value="no" />
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

<?php echo form_close();?>
            </div></div></div>