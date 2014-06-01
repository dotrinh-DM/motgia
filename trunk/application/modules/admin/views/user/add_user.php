<link rel="stylesheet" href="<?php echo base_url(); ?>public/homecss/jquery-ui.css">
<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>
<h4 class="widgettitle"> Thêm thành viên </h4>

<div class="widgetcontent">
    <form class="stdform" action="<?php echo site_url('admin/user_controller/formSubmit') ?>" method="post">
        <p>
            <label> Họ </label>
            <span class="field"><input type="text" name="ho" class="input-large" placeholder="Lastname"/></span>
        </p>

        <p>
            <label> Tên </label>
            <span class="field"><input type="text" name="ten" class="input-large" placeholder="Firstame"/></span>
        </p>

        <p>
            <label> Email </label>
            <span class="field"><input type="text" name="mail" class="input-large" placeholder="Email"/></span>
        </p>

        <p>
            <label> Mật khẩu </label>
            <span class="field"><input type="password" name="matkhau" class="input-large" placeholder="Password"/></span>
        </p>

        <p>
            <label> Ngày sinh </label>
            <span class="field"><input type="date" name="ngaysinh" class="input-large" placeholder="Birthday"/></span>
        </p>

        <p>
            <label>Giới tính</label>
                            <span class="field">
                            <select name="gioitinh" class="uniformselect">
                                <option value="">Chọn</option>
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                            </span>
        </p>

        <p>
            <label>Tỉnh</label>
                            <span class="field">
                            <select name="tinh" class="uniformselect">
                               <?php

                                $province = getProvince();
                                foreach ($province as $tinh) {
                                    ?>
                                    <option value="<?php echo $tinh; ?>" ><?php echo $tinh; ?></option>
                                <?php
                                }

                               ?>
                            </select>
                            </span>
        </p>


        <p>
            <label> Số điện thoại </label>
            <span class="field"><input type="text" name="phone" class="input-large" placeholder="Phone"/></span>
        </p>

        <p>
            <label> Địa chỉ </label>
            <span class="field"><input type="text" name="diachi" class="input-large" placeholder="Phone"/></span>
        </p>

        <p>
            <label> Phân quyền </label>
                            <span class="field">
                            <select name="phanquyen" class="uniformselect">
                                <option value="">--Chọn--</option>
                                <option value="3"> Admin</option>
                                <option value="2"> Mod</option>
                                <option value="1"> Thành viên</option>
                            </select>
                            </span>
        </p>
        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook">Submit Button</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>