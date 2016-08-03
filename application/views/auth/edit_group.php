<div class="container padding">
    <div class="panel panel-default">
        <div class="panel-head">

            <span class="fa fa-file-text-o"></span> <?= lang('edit_group_heading'); ?> 
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
<p><?php echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

      <p>
            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description);?>
      </p>

      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>

<?php echo form_close();?>
            </div></div></div>