<div class="container padding">

  <?php $this->load->view("projects/header"); ?>

    <div class="row">
        <div class="col-md-3"><?php $this->load->view("projects/side_menu"); ?></div>
        <div class="col-md-9">
            <div class="panel panel-default">

                <div class="panel-head">مهارات خاصة يتطلبها المشروع وأسلوب توفيرها</div>
                <div class="div">
                    <?= validation_errors(); ?>

                    <table class="table">
                        <tr>
                            <th>المهارة</th>
                            <th>المتوفرة لديك</th>
                            <th> أسلوب توفيرها</th>
                            <th>حفظ</th>
                        </tr>
                        <?php
                        $result = $this->projects->getProjSkills($this->uri->segment(2));
                        if($result){
                        foreach ($result as $value) {
                            echo "<tr><form method='post'>";
                            echo "<td><input class=\"form-control form-no-border\" type=\"text\" value='".$value['skill_key']."' required name=\"key\" /></td>";
                            echo "<td><textarea class=\"form-control form-no-border\" name=\"have\">".$value['skill_have']."</textarea></td>";
                            echo "<td><textarea class=\"form-control form-no-border\" name=\"nothave\">".$value['skill_not_have']."</textarea></td>";
                            echo "<td><input type=\"submit\" class=\"btn btn-primary\" value=\"حفظ\" /><input type=\"hidden\" value='".$value['project_skills_id']."'  name=\"update_sid\" /></td> ";
                            echo "</form></tr>";
                        }
                        }
                        ?>
                    </table>
                    <form method="post">
                        <table class="table">
                            <tr> 
                                <td><input class="form-control" type="text" placeholder="المهارة" required="" name="key" /></td>
                                <td><textarea placeholder="المتوفرة لديك" class="form-control" name="have"></textarea></td>
                                <td><textarea placeholder="اسلوب توفيرها" class="form-control" name="nothave"></textarea></td>
                                <td><input type="submit" class="btn btn-primary" value="حفظ" /></td> 
                            </tr>
                        </table>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

