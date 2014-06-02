<h4 class="widgettitle"> Sửa thành viên </h4>
<?php foreach ($data as $item) ?>
<div class="widgetcontent">
    <form class="stdform" action="<?php echo site_url('admin/user_controller/formSubmit') ?>" method="post">
        <input type="hidden" value="<?php echo $item->userID ?>" name="id"/>
        <p>
            <label> Họ </label>
            <span class="field"><input type="text" name="ho" class="input-large"
                                       value="<?php echo $item->firstname; ?>"/></span>
        </p>

        <p>
            <label> Tên </label>
            <span class="field"><input type="text" name="ten" class="input-large"
                                       value="<?php echo $item->lastname; ?>"/></span>
        </p>

        <p>
            <label> Email </label>
            <span class="field"><input type="text" name="mail" class="input-large" value="<?php echo $item->email; ?>"/></span>
        </p>

        <p>
            <label> Mật khẩu </label>
            <span class="field"><input type="password" name="matkhau" class="input-large"
                                       value="<?php echo $item->password; ?>"/></span>
        </p>

        <p>
            <label> Ngày sinh </label>
            <span class="field"><input type="date" name="ngaysinh" class="input-large"
                                       value="<?php echo $item->birthday; ?>"/></span>
        </p>

        <p>
            <label>Giới tính</label>
                            <span class="field">
                            <select name="gioitinh" class="uniformselect">
                                <option value="">Chọn</option>
                                <option <?php if ($item->firstname == 1) {
                                    echo 'selected';
                                } ?> value="1">Nam
                                </option>
                                <option <?php if ($item->firstname == 0) {
                                    echo 'selected';
                                } ?> value="0">Nữ
                                </option>
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
                                    <option value="<?php echo $tinh; ?>"
                                        <?php if ($item->province == $tinh) {echo 'selected';} ?> ><?php echo $tinh; ?></option>
                                <?php
                                }
                                ?>

                            </select>
                            </span>
        </p>


        <p>
            <label> Số điện thoại </label>
            <span class="field"><input type="text" name="phone" class="input-large" value="<?php echo $item->phone; ?>" /></span>
        </p>

        <p>
            <label> Địa chỉ </label>
            <span class="field"><input type="text" name="diachi" class="input-large" value="<?php echo $item->address; ?>" /></span>
        </p>

        <p>
            <label> Phân quyền </label>
                            <span class="field">
                            <select name="phanquyen" class="uniformselect">
                                <?php
                                $per = getPermission();
                                foreach ($per as $key => $quyen) {
                                    ?>
                                    <option value="<?php echo $key; ?>"
                                        <?php if ($item->levelID == $key) {echo 'selected';} ?> ><?php echo $quyen; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            </span>
        </p>
        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook" >Submit Button</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>