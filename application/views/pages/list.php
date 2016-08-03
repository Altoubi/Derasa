<div class="container padding">
    <div class="panel panel-default">
        <div class="panel-head">
           <span class="fa fa-file-text-o"></span>  <?= lang('pages_index_heading'); ?> 
            <a class="btn pull-left btn-sm btn-primary" href="<?= site_url('pages/add') ?>"><?= lang('pages_create_new') ?></a>
        </div>
        <table class="table table-bordered table-hover">
            <tr>
                <th>#</th>
                <th><?= lang('pages_name_th') ?></th>
                <th><?= lang('pages_title_th') ?></th>
                <th><?= lang('pages_views_th') ?></th>
                <th><?= lang('pages_added_th') ?></th>
                <th><?= lang('pages_options_th') ?></th>
            </tr>

            <?php
            if ($items):
                $i = 0;
                foreach ($items as $item) :
                    $i++;
                    ?>

                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['title'] ?></td>
                        <td><?= $item['views'] ?></td>
                        <td><?= $item['added'] ?></td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".id<?= $item['id'] ?>"><span class="fa fa-remove" title="<?php echo lang('pages_delete'); ?>"></span></button>
                            <a class="btn btn-sm btn-default" href="<?php echo site_url('pages/update/' . $item['id']) ?>"><span class="fa fa-edit" title="<?php echo lang('pages_edit'); ?>"></span></a>
                        </td>
                    <div class="modal fade id<?= $item['id'] ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-body"><?= lang("delete") . " " . lang("name") ?> : <?php echo $item['name'] ?></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= lang("cancellation") ?></button>
                                    <a class="btn btn-sm btn-danger" href="<?php echo site_url('pages/delete/' . $item['id']); ?>"><span class="fa fa-delete" title="<?php echo lang('pages_delete'); ?>">  </span> <?php echo lang('delete'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </tr>
                    <?php
                endforeach;
            endif;
            ?>
        </table>

    </div>
</div>