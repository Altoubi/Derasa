<div class="container padding">

  <?php $this->load->view("projects/header"); ?>

    <div class="row">
        <div class="col-md-3"><?php $this->load->view("projects/side_menu"); ?></div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <form method="post">
                    <div class="panel-head">بيانات عامه عن صاحب المشروع</div>
                    <div class="panel-body">
                        <?= validation_errors(); ?>
                        <div class="form-group">
                            <label for="name">الإسم الثلاثي</label>
                            <input value="<?= set_value("name", $person_name) ?>" id="name" name="name" type="text" required="" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="nc"> رقم البطاقة الشخصية</label>
                            <input  value="<?= set_value("nc", $person_nc_id) ?>" id="nc" name="nc" type="text" required="" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="mc">رقم بطاقة القوى العاملة</label>
                            <input  value="<?= set_value("mc", $person_mpc_id) ?>" id="mc" name="mc" type="text" required="" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="dob"> تاريخ الميلاد</label>
                            <input  value="<?= set_value("dob", $person_dob) ?>" id="dob" name="dob" type="date" required="" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="phone">رقم الهاتف (8أرقام)</label>
                            <input value="<?= set_value("phone", $person_phone) ?>" id="phone" name="phone" type="tel" required="" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input value="<?= set_value("email", $person_email) ?>" id="email" name="email" type="email" required="" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="study">المؤهلات الدراسية</label>
                            <input value="<?= set_value("study", $person_study) ?>" id="study" name="study" type="text" required="" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="address">عنوان الاقامة</label>
                            <input value="<?= set_value("address", $person_address) ?>" id="address" name="address" type="text" required="" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="address_work"> عنوان العمل</label>
                            <input value="<?= set_value("address_work", $person_address_work) ?>" id="address_work" name="address_work" type="text" required="" class="form-control"/>
                        </div>

                    </div>
                    <div class="panel-footer"> <input type="submit" class="btn btn-primary" value="حفظ" /></div>
                </form>
            </div>

        </div>
    </div>
</div>

