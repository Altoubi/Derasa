<div class="container padding">
   

    <div class="panel panel-default">
        <div class="panel-head">قائمة مشاريعي</div>

            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>عنوان المشروع</th>
                    <th>الوصف</th>
                    <th>تاريخ الإضافة</th>
                    <th>خيارات</th>
                </tr>

                <?php
                $get_projects = $this->projects->get();
                if ($get_projects) {
                    foreach ($get_projects as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td><a href='".  site_url("project/".$row['id'])."'>" . $row['title'] . "</a></td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td>" . date("d/m/Y",$row['added']). "</td>";
                        echo "<td><a href='".  site_url("project/".$row['id']."/delete")."' >إزالة</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>
                <th colspan=5>لاتوجد مشاريع لعرضها</th>
            </tr>";
                }
                ?>
            </table>
    </div>
    
     <div class="panel panel-default">
          <form method="post">
        <div class="panel-head">البدء بمشروع جديد </div>
        <div class="panel-body">
           <?php echo validation_errors("<div class='alert alert-info'>","</div>"); ?>
                <div class="form-group">
                    <label >إسم المشروع</label>
                    <input required="" class="form-control" name="proj_name" />
                </div>
                <div class="form-group">
                    <label>الوصف</label>
                    <textarea required="" class="form-control" name="proj_desc"></textarea>
                </div>
        </div>
        <div class="panel-footer">
            <input class="btn btn-primary" value="حفظ" type="submit" />
               
        </div>
        </form>
    </div>
</div>