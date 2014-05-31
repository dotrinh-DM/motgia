<link rel="stylesheet" href="<?php echo base_url(); ?>public/homecss/jquery-ui.css">
<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>
<h4 class="widgettitle"> Thêm thành viên </h4>

<div class="widgetcontent">
    <form class="stdform" action="<?php echo site_url('admin/usercontroller/addSubmit') ?>" method="post">
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
                                <option value="">--Chọn--</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="TP HCM">Tp HCM</option>
                                <option value="Phú Yên">Phú Yên</option>
                                <option value="Cần Thơ">Cần Thơ</option>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="An Giang">An Giang</option>
                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                <option value="Bắc Giang">Bắc Giang</option>
                                <option value="Bắc Kạn">Bắc Kạn</option>
                                <option value="Bạc Liêu">Bạc Liêu</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Bến Tre">Bến Tre</option>
                                <option value="Bình Định">Bình Định</option>
                                <option value="Bình Dương">Bình Dương</option>
                                <option value="Bình Phước">Bình Phước</option>
                                <option value="Bình Thuận">Bình Thuận</option>
                                <option value="Cà Mau">Cà Mau</option>
                                <option value="Cao Bằng">Cao Bằng</option>
                                <option value="Đắk Lắk">Đắk Lắk</option>
                                <option value="Đắk Nông">Đắk Nông</option>
                                <option value="Điện Biên">Điện Biên</option>
                                <option value="Đồng Nai">Đồng Nai</option>
                                <option value="Đồng Tháp">Đồng Tháp</option>
                                <option value="Gia Lai">Gia Lai</option>
                                <option value="Hà Giang">Hà Giang</option>
                                <option value="Hà Nam">Hà Nam</option>
                                <option value="Hà Tĩnh">Hà Tĩnh</option>
                                <option value="Hải Dương">Hải Dương</option>
                                <option value="Hậu Giang">Hậu Giang</option>
                                <option value="Hòa Bình">Hòa Bình</option>
                                <option value="Hưng Yên">Hưng Yên</option>
                                <option value="Khánh Hòa">Khánh Hòa</option>
                                <option value="Kiên Giang">Kiên Giang</option>
                                <option value="Kon Tum">Kon Tum</option>
                                <option value="Lai Châu">Lai Châu</option>
                                <option value="Lạng Sơn">Lạng Sơn</option>
                                <option value="Lào Cai">Lào Cai</option>
                                <option value="Long An">Long An</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Nghệ An">Nghệ An</option>
                                <option value="Ninh Bình">Ninh Bình</option>
                                <option value="Ninh Thuận">Ninh Thuận</option>
                                <option value="Phú Thọ">Phú Thọ</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Nam">Quảng Nam</option>
                                <option value="Quảng Ngãi">Quảng Ngãi</option>
                                <option value="Quảng Ninh">Quảng Ninh</option>
                                <option value="Quảng Trị">Quảng Trị</option>
                                <option value="Sóc Trăng">Sóc Trăng</option>
                                <option value="Sơn La">Sơn La</option>
                                <option value="Tây Ninh">Tây Ninh</option>
                                <option value="Thái Nguyên">Thái Bình</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Thanh Hóa">Thanh Hóa</option>
                                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                <option value="Tiền Giang">Tiền Giang</option>
                                <option value="Trà Vinh">Trà Vinh</option>
                                <option value="Tuyên Quang">Tuyên Quang</option>
                                <option value="Vĩnh Long">Vĩnh Long</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Yên Bái">Yên Bái</option>

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