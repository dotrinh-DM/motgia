
<!---hàm validate--->
<script type="text/javascript">
    jQuery(document).ready(function() {
        $(".form").h5Validate({
            errorClass: "validationError",
            validClass: "validationValid"
        });
        $(".form").submit(function(evt) {
            if ($(".form_info").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
            if ($(".form_pass").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
            var x = document.forms["Form"]["passw"].value;
            var y = document.forms["Form"]["re-pass"].value;
            if ($(".form").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
            if (x !== y) {
                evt.preventDefault();
                document.getElementById("passw").focus();
                alert('nhap lai mat khau!');
            }
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $('#datePicker').datepick({
            defaultDate: '26/08/1992',
            yearRange: '1940:2014',
            maxDate: '2014',
            showTrigger: '<button type="button" class="trigger">' + '<img src="<?php echo base_url(); ?>template/images/calendar-green.gif" alt="Popup"></button>',
            renderer: $.extend({}, $.datepick.defaultRenderer,
                    {picker: $.datepick.defaultRenderer.picker.
                                replace(/\{link:clear\}/, '{button:clear}').
                                replace(/\{link:close\}/, '{button:close}')}),
        });
    });
</script>

<section id="content" class="wrap">
    <div id="primary">
        <div id="tab-container" class='tab-container marginBottom_15'>
            <ul class='etabs'>
                <li class='tab active' ><a href="#tabs1-html">Thông tin người dùng</a></li>
                <li class='tab'><a href="#tabs1-js">Quản lý sản phẩm</a></li>
                <li class='tab'><a href="#tabs1-css">Thư</a></li>
                <li class='tab'><a href="#tabs1-monney">Nạp tiền</a></li>
            </ul>
            <div class='panel-container'>
                <div id="tabs1-html">
                    <div class="change">
                        <h6 class="title_detail_item">profile <span class="onclick">[ Sửa ]</span> </h6>
                        <table class="detail_profile"> 
                            <tr>
                                <td>Họ và tên</td>
                                <td><?php echo $profile['firstname'] . ' ' . $profile['lastname']; ?></td> 
                            </tr>
                            <tr>
                                <td>Ngày sinh</td>
                                <td><?php echo $profile['birthday']; ?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><?php echo $profile['province']; ?>,  Viet Nam</td>
                            </tr>
                            <tr>
                                <td>TelePhone</td>
                                <td><?php echo $profile['phone']; ?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>Hà Nội</td>
                            </tr>

                        </table><!--End detail_profile -->

                        <form class="form change_open" id="form_info" method="post" name="form_info" action="">
                            <div class="position">
                                <label>Họ<span>*</span></label>
                                <input type="text" required="" name="first_name" value="<?php echo $profile['firstname']; ?>"/>
                                <span class="tooltip">Không được để trống</span>
                            </div>
                            <div>
                                <label>Tên<span>*</span></label>
                                <input type="text" required="" name="last_name" value="<?php echo $profile['lastname']; ?>"/>
                                <span class="tooltip">Không được để trống</span>
                            </div>
                            <div>
                                <label>Ngày sinh<span>*</span></label>
                                <p><input type="text" id="datePicker"/></p>
                            </div>
                            <div class="marginBottom_10">
                                <label>Giới tính<span>*</span></label>
                                <div class="select">
                                    <select name="gender" required="">
                                        <option <?php if ($profile['gender'] == 0) echo 'selected="selected"'; ?> value="0">Nam</option>
                                        <option <?php if ($profile['gender'] != 0) echo 'selected="selected"'; ?> value="1">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label>Điện thoại<span>*</span></label>
                                <input type="text" class="h5-phone" name="phone" required="" value="<?php echo $profile['phone']; ?>"/>
                                <span class="tooltip">Phải điền số</span>
                            </div>
                            <div>
                                <label>Địa chỉ<span>*</span></label>
                                <input type="text" required="" name="address" value="<?php echo $profile['address']; ?>"/>
                                <span class="tooltip">Không được để trống</span>
                            </div>
                            <div>
                                <label>Tỉnh<span>*</span></label>
                                <div class="select">
                                    <select required="" name="province">
                                        <option value="Thái Bình">Thái Bình</option>
                                        <option value="Quảng Ninh">Quảng Ninh</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" id="save_info" name="save_info" value="SAVE"/>
                        </form>
                    </div>

                    <div class="change">
                        <h6 class="title_detail_item">Account<span class="onclick">[ Sửa ]</span> </h6>
                        <table class="detail_profile"> 
                            <tr>
                                <td>Email</td>
                                <td><?php echo $info['email']; ?></td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td>......</td>
                            </tr>
                        </table><!--End detail_profile -->

                        <form class="form change_open" action="" method="post" name="form_pass" id="form_pass">
                            <div>
                                <label>Mật khẩu cũ<span>*</span></label>
                                <input type="password" required="" name="old_pass" id="old_pass"/>
                                <span class="tooltip">không được để trống</span>
                            </div>
                            <div>
                                <label>Mật khẩu mới<span>*</span></label>
                                <input type="password" required="" name="new_pass"/>
                                <span class="tooltip">không được để trống</span>
                            </div>
                            <div>
                                <label>Nhập lại mật khẩu mới<span>*</span></label>
                                <input type="password" required="" name="re_new_pass"/>
                                <span class="tooltip">không được để trống</span>
                            </div>

                            <div>
                                <input type="submit" id="save_pass" name="save_pass" value="SAVE"/>
                            </div>
                        </form>
                    </div><!--end change-->


                </div> <!--End #tabs 1-->

                <div id="tabs1-js">
                    <h6 class="title_detail_item">order</h6>
                    <table class="oder_table">
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Order #</th>
                            <th>Status</th>
                            <th>Products</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>12/12/2013</td>
                            <td>1123</td>
                            <td><span class="bg_blue">Sold</span></td>
                            <td>It is a long established fact </td>
                            <td>$20 </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>12/12/2013</td>
                            <td>1123</td>
                            <td><span class="bg_blue">Sold</span></td>
                            <td>It is a long established fact </td>
                            <td>$20 </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>12/12/2013</td>
                            <td>1123</td>
                            <td><span class="bg_yellow">Pending</span></td>
                            <td>It is a long established fact </td>
                            <td>$20 </td>

                        </tr>
                        <tr>
                            <td>4</td>
                            <td>12/12/2013</td>
                            <td>1123</td>
                            <td><span class="bg_blue">Sold</span></td>
                            <td>It is a long established fact </td>
                            <td>$20 </td>
                        </tr>
                    </table>
                    <section class="pagination">
                        <div class="paginationControl clearfix">
                            <a href="#"></a>
                            <span class="active">1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"></a>
                        </div>
                    </section><!-- #End pagination-->
                </div><!--End #tabs-2-->
                <div id="tabs1-css">
                    <h6 class="title_detail_item">Newsletters</h6>
                    <div class="content_3 clearfix">
                        <div class="col_2 detail_content_3">
                            <form id="formSearch_mss" class="clearfix">
                                <input type="text" class="txt-search" placeholder="search">
                                <input type="button" class="btnsearch" >
                            </form>
                            <ul class="scroll border_left">
                                <li class="active">
                                    <div class="listitem clearfix">
                                        <span class="del_2">xóa</span>
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <span class="del_2">xóa</span>
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col_2 detail_content_3">
                            <ul class="scroll scroll_2">
                                <li>
                                    <div class="listitem clearfix">
                                        <span class="del_3">xóa</span>
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                            </ul>
                            <div class="post_content">
                                <div>
                                    <textarea></textarea>       
                                </div>
                                <div>
                                    <button class="btn">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End #tabs-3-->
                <div id="tabs1-monney">
                    <p>
                        sdfsdf nạp tiền
                    </p>
                </div>
            </div>
        </div> <!--End #tabs-->
    </div><!-- End Primary -->
    <?php $this->load->view('layout/sidebar'); ?>