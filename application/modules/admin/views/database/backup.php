<h4 class="widgettitle"> Sao lưu cơ sở dữ liệu </h4>

<div class="widgetcontent">
    <form class="stdform" action="<?php echo site_url('admin/user_controller/formSubmit') ?>" method="post">
        <p>
            <label> Tên đăng nhập </label>
            <span class="field"><input type="text" name="ho" class="input-large" placeholder="Username"/></span>
        </p>

        <p>
            <label> Mật khẩu </label>
            <span class="field"><input type="password" name="matkhau" class="input-large" placeholder="Password"/></span>
        </p>
        
        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook">Submit Button</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>