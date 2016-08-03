
<div class="container padding">
    <div class="panel panel-default">
        <div class="panel-head">
            <span class="fa fa-file-text-o"></span> <?= lang('pages_index_heading'); ?> 
            <a class="btn pull-left btn-sm btn-primary" href="<?= site_url('pages/lists') ?>">
                <?= lang('pages_back_to_menu') ?></a>
        </div>
        <div class="panel-body">
<?php echo validation_errors(); ?>

<form method="post">
    
    <div class="form-group">
        <label for="name"><?=lang('pages_name');?></label>
        <input type="text" required=""  value="<?php echo set_value('name'); ?>" class="form-control" id="name" name="name" />
    </div>
    
    <div class="form-group">
        <label for="title"><?=lang('pages_title');?>  :</label>
        <input type="text" required=""  value="<?php echo set_value('title'); ?>" class="form-control" id="title" name="title">
    </div>
    
    
    
    <div class="form-group">
        <label for="content"><?=lang('pages_content');?>  :</label>
        <textarea class="form-control" name="content" id="description"><?php echo set_value('content'); ?></textarea>
    </div>

         
    <div class="form-group">
        <a href="<?=site_url('pages/lists')?>" class="btn btn-default" ><span class="fa fa-arrow-circle-right" aria-hidden="true"></span> <?=lang('pages_back_to_menu');?> </a>
        <button class="btn btn-success" type="submit" id="add_bus_submit"><span class="fa fa-floppy-o" aria-hidden="true"></span> <?=lang('pages_save');?> </button>
    </div>
</form>
            </div>
        </div></div>
<script src="<?= base_url("style/ckeditor/ckeditor.js"); ?>"></script>

<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'description' );
            </script>