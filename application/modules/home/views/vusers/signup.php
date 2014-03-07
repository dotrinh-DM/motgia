<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Đăng ký </h6>
            <span>Tạo tài khoản mới</span>
        </div>
        <div class="clearfix breadcrumbs floatRight">
            <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="Trang nhất" href="/" itemprop="url">
                    <span itemprop="title">Trang chủ</span>
                </a> /
            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                <a class="highlight" href="/" title="Kiến thức SEO" itemprop="url">
                    <span itemprop="title">Đăng ký</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="content" class="wrap">
    <section id="primary">
        <header class="title_form">
            <span>Thông tin cá nhân</span>
        </header>
        <form class="form error" id="Form" method="post" action="" name="Form">
            <div> 
                <div ></div>
                <?php
                if (isset($success)) {
                    echo "
                        <label></label>
                        <span style='color:green; line-height:4; 
                        border: 2px solid;
                        border-radius: 5px 5px 5px 5px;
                        padding: 10px;' 
                        class='success'> $success </span>
                         ";
                } elseif (isset($error1) || isset($error2)) {
                    echo "<div style='color:red; line-height:2; 
                        border: 2px solid;
                        border-radius: 5px 5px 5px 5px;
                        padding: 10px;
                        margin-bottom: 20px;' 
                        class='error'><b>Lỗi đăng ký:</b>";
                    if (isset($error1)) {
                        echo '</br><span style="margin-left:88px">- '.$error1.'</span>';
                    }
                    if (isset($error2)) {
                        echo '</br><span style="margin-left:88px">- '.$error2.'</span>';
                    }
                    echo "</br><span style='margin-left:95px'>Xin vui lòng thử lại!</span></div>";
                }
                ?> 
            </div> 
            <div  class="position">
                <label>Tên <span>*</span></label>
                <input type="text" required="" name="l_name"/>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div class="position">
                <label>Họ<span>*</span></label>
                <input type="text" required="" name="f_name"/>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div class="marginBottom_15">
                <label>Ngày sinh<span>*</span></label>
                <div class="select">
                    <select name="month">
                        <?php
                        for ($month = 1; $month <= 12; $month++) {
                            echo '<option value="' . $month . '">Tháng ' . $month . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="select">
                    <select name="day">
                        <?php
                        for ($day = 1; $day <= 31; $day++) {
                            echo '<option value="' . $day . '">' . $day . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="select">
                    <select name="year">
                        <?php
                        $year1 = getdate();
                        $year2 = $year1['year'];
                        for ($year = 1950; $year <= ($year2 - 15); $year++) {
                            echo '<option value="' . $year . '" ';
                            if ($year == 1992) {
                                echo 'selected="selected"';
                            }
                            echo '>' . $year . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="marginBottom_15">
                <label>Giới tính<span>*</span></label>
                <div class="select">
                    <select name="gender">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
            </div>
            <div class="position">
                <label>Điện thoại<span>*</span></label>
                <input type="text" class="h5-phone" name="phone" required=""/>
                <span class="tooltip">Ex: 0123456789,...</span>
            </div>
            <div class="position">
                <label>Địa chỉ<span>*</span></label>
                <input type="text" name="adr" required=""/>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div>
                <label>Tỉnh<span>*</span></label>
                <div class="select country">
                    <select name="province">
                        <option value="Thái Bình">Thái Bình</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                        <option value="Hà Nội">Hà Nội</option>
                    </select>
                </div>
            </div>

            <div class="title_form">
                <span>Thông tin tài khoản</span>
            </div>
            <div class="position">
                <label>Email<span>*</span></label>
                <input type="email" class="h5-email" name="email" required=""/>
                <span class="tooltip">Ex: Billgate@microsoft.com,..</span>
            </div>
            <div class="position">
                <label >Mật khẩu<span>*</span></label>
                <input type="password" name="passw" required=""/>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div class="position">
                <label id="lbpass">Gõ lại Mật khẩu<span>*</span></label>
                <input type="password" name="re-pass" value="" required=""/>
                <span class="tooltip">Không được để trống</span>
            </div>



            <div class="position">
                <label>Mã xác nhận<span>*</span></label>
                <input type="text" name="captcha" required="" placeholder="Không phân biệt chữ viết Hoa"/>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div>
                <label></label>
                <span><?php echo $Data; ?></span>
            </div>
            <div class="type_checkbox">
                <input type="checkbox" name="check" id="checkbox" value="ok"/>
                <label for="checkbox" style="color:#848282;">Tôi đã đọc và đồng ý <span style="color: #3498db;">Quy đinh</span> của website</label>
            </div>
            <div>
                <input type="submit" value="Đăng ký" name="Add"/>
            </div>
        </form>
    </section><!--End #primary-->
<?php $this->load->view('layout/sidebar'); ?>