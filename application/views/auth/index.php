<div class="container padding">
    <div class="panel panel-default">
        <div class="panel-head">

            <span class="fa fa-file-text-o"></span> <?= lang('index_heading'); ?> 
            <div class="btn-group  pull-left">
                <a class="btn btn-sm btn-primary" href="<?= site_url('auth/create_group') ?>">
                 <span class="fa fa-plus-circle"></span>     <?= lang('index_create_group_link') ?></a>
                <a class="btn btn-sm btn-primary" href="<?= site_url('auth/create_user') ?>">
                 <span class="fa fa-plus-circle"></span>     <?= lang('index_create_user_link') ?></a>
                
            </div>
        </div>
            <div class="panel-by">



                <div id="infoMessage"><?php echo $message; ?></div>

                <table class="table table-bordered table-responsive">
                    <tr>
                        <th><?php echo lang('index_fname_th'); ?></th>
                        <th><?php echo lang('index_phone_th'); ?></th>
                        <th><?php echo lang('index_email_th'); ?></th>
                        <th><?php echo lang('index_groups_th'); ?></th>
                        <th><?php echo lang('index_status_th'); ?></th>
                        <th><?php echo lang('index_action_th'); ?></th>
                    </tr>
                    <?php foreach ($users as $user): 
                        
                        if(!$user->active)
                        {
                            echo '<tr class="danger">';
                        }else{
                            echo "<tr>";
                        }
?>
                    
                        
                            <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($user->phone, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td>
                                <?php foreach ($user->groups as $group): ?>
                                    <?php echo anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
                                <?php endforeach ?>
                            </td>
                            <td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?></td>
                            <td><?php echo anchor("auth/edit_user/" . $user->id, 'Edit'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
       </div></div>