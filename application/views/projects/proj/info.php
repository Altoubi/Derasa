<div class="container padding">

    <?php $this->load->view("projects/header"); ?>

    <div class="row">
        <div class="col-md-3"><?php $this->load->view("projects/side_menu"); ?></div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <form method="post">
                    <div class="panel-head">بيانات حول المشروع</div>
                    <div class="panel-body">
                        <?= validation_errors(); ?>
                        <div class="form-group">
                            <label>إسم المشروع</label>
                            <input value="<?= set_value("title", $project_title) ?>" name="title" type="text" required="" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>عنوان المشروع</label>
                            <input value="<?= set_value("address", $project_address) ?>" name="address" type="text" required="" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>مقدمة عن المشروع</label>
                            <textarea class="form-control" name="intro"><?= set_value("intro", $project_intro) ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>رؤية المشروع</label>
                            <textarea class="form-control" name="mission"><?= set_value("mission", $project_mission) ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>رسالة المشروع</label>
                            <textarea class="form-control" name="vision"><?= set_value("vision", $project_vision) ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>أهداف المشروع</label>
                            <textarea class="form-control" name="goals"><?= set_value("goals", $project_goals) ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>بداية الفكرة</label>
                            <textarea class="form-control" name="start_idea"><?= set_value("start_idea", $project_start_idea) ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>مميزات المشروع</label>
                            <textarea class="form-control" name="features"><?= set_value("features", $project_features) ?></textarea>
                        </div>

                    </div>
                    <div class="panel-footer"> <input type="submit" class="btn btn-primary" value="حفظ" /></div>
                </form>
            </div>

        </div>
    </div>
</div>

