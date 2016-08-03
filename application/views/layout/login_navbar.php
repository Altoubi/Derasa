<script type="text/javascript">
    $(document).ready(function ()
    {
        $("#loginBTN").click(function () {
            $("#ShowMsg").html(' ');
            var identity = $("#identity").val();
            var pass = $("#password").val();
            var remm = $("#remember").val();
            var dataString = "identity=" + identity + "&remember=" + remm + "&password=" + pass + "&ajax=1";
            if ($.trim(identity).length > 0 & $.trim(pass).length > 0)
            {
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('auth/login') ?>",
                    data: dataString,
                    crossDomain: true,
                    cache: false,
                    beforeSend: function () {
                        $("#ShowMsg").html('جاري الاتصال...');
                    },
                    success: function (data) {
                        if (data === "true") {
                            $("#ShowMsg").html('<?= lang("login_successful") ?>');
                            location.reload();
                        } else {

                            $("#ShowMsg").html(data);
                        }
                    }
                });
            } else {
                $("#ShowMsg").html("<?= lang("login_unsuccessful") ?>");

            }
        });
    });


</script>

<div class="modal fade LoginFromModel" tabindex="-1" role="dialog" aria-labelledby="LoginFromModel">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?= lang('login_heading') ?></h4>
            </div>
            <div class="modal-body">
                <div class="text-center" id="ShowMsg"></div>
                <form>
                    <div class="form-group">
                        <label for="identity"><?php echo lang('login_identity_label', 'identity'); ?></label>
                        <input type="tel" class="form-control" id="identity" placeholder="9xxxxxxx">
                    </div>
                    <div class="form-group">
                        <label for="password"><?php echo lang('login_password_label', 'Password1'); ?></label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-7">
                                <?php echo lang('login_remember_label', 'remember'); ?>
                                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember" '); ?>
                            </div>
                            <div class="col-xs-5">
<a href="<?=site_url('auth/forgot_password');?>"><?php echo lang('login_forgot_password');?></a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?= lang('close') ?></button>
                <button type="button" id="loginBTN" class="btn btn-primary"><?= lang('login_submit_btn') ?></button>
            </div>
        </div>
    </div>
</div>