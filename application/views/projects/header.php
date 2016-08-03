<div class="panel panel-default">
    <form method="post" action="<?=  site_url("project/".$this->uri->segment(2)."/update")?>">
        <?php
        $proj_info = $this->projects->get($this->uri->segment(2));
        echo validation_errors();
        ?>
        <div class="panel-head row">
            <input value="<?= $proj_info['title'] ?>" name="projname" class="form-control col-md-10 form-no-border" />
            <input class="btn btn-primary pull-left col-md-2 " type="submit" value="تحديث"/>
            <input type="hidden" name="url" value="<?=$this->uri->uri_string()?>"/>
        </div>
        <div class="panel-body">
            <textarea name="projdesc" class="form-control form-no-border" ><?= $proj_info['description'] ?></textarea></div>
        
    </form>
</div>