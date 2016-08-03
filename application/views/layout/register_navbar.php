<script type="text/javascript">
    $(document).ready(function ()
    {
        $("#RegBTN").click(function () {
            $("#ShowMsgReg").html(' ');
            var phone = $("#phone2").val();
            var pass = $("#password2").val();
            var email = $("#email2").val();
            var fname = $("#fname2").val();
            var dataString = "phone=" + phone + "&email=" + email + "&fname=" + fname + "&password=" + pass + "&ajax=1";
            if ($.trim(fname).length > 0 & $.trim(phone).length > 0  & $.trim(pass).length > 0 & $.trim(email).length > 0)
            {
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('auth/register') ?>",
                    data: dataString,
                    crossDomain: true,
                    cache: false,
                    beforeSend: function () {
                        $("#ShowMsgReg").html('جاري الاتصال...');
                    },
                    success: function (data) {
                        if (data === "true") {
                            $("#ShowMsgReg").html('<?= lang("login_successful") ?>');
                            location.reload();
                        } else {

                            $("#ShowMsgReg").html(data);
                        }
                    }
                });
            } else {
                $("#ShowMsgReg").html("<?= lang("form_empty") ?>");

            }
        });
    });


</script>

<div class="modal fade RegisterFromModel" tabindex="-1" role="dialog" aria-labelledby="RegisterFromModel">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?=lang('create_user_heading')?></h4>
      </div>
      <div class="modal-body">
          <div class="text-center" id="ShowMsgReg"></div>
        <form>
  <div class="form-group">
    <label for="fname2"><?php echo lang('create_user_fname_label');?></label>
    <input type="tel" class="form-control" id="fname2" placeholder="">
  </div>
            <div class="form-group">
    <label for="email2"><?php echo lang('create_user_email_label');?></label>
    <input type="email" class="form-control" id="email2" placeholder="example@email.com">
  </div>
            <div class="form-group">
    <label for="phone2"><?php echo lang('create_user_phone_label');?></label>
    <input type="tel" class="form-control" id="phone2" placeholder="9xxxxxxx">
  </div>
  <div class="form-group">
    <label for="password2"><?php echo lang('login_password_label');?></label>
    <input type="password" class="form-control" id="password2" placeholder="Password">
  </div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?=lang('close')?></button>
        <button type="button" id="RegBTN" class="btn btn-primary"><?=lang('create_user_submit_btn')?></button>
      </div>
    </div>
  </div>
</div>