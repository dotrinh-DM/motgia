<h4 class="widgettitle"> Sao lưu cơ sở dữ liệu </h4>

<div class="widgetcontent" style="margin-left: 150px;">
    <form class="stdform" action="<?php echo site_url('admin/database_controller/backup_db') ?>" method="post">
        <p style="margin-left: 270px;">
            <?php if ($this->session->flashdata('succ')) {
                echo $this->session->flashdata('succ');
            }
            if ($this->session->flashdata('error')) {
                echo $this->session->flashdata('error');
            }
            ?>
        </p>

        <p>
            <label> Tên đăng nhập </label>
            <span class="field"><input type="text" name="username" class="input-large" placeholder="Username"/></span>
        </p>

        <p>
            <label> Mật khẩu </label>
            <span class="field"><input type="password" name="matkhau" class="input-large"
                                       placeholder="Password"/></span>
        </p>

        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook">Submit Button</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>