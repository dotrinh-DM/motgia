<section class="bg_back">
    <header class="top_Nav wrap clearfix">
        <ul class="Top_menu floatLeft">
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>
        <!--End .Top_menu-->
        <ul class="user clearfix floatRight">
            <?php
            if (isset($info) && count($info)) {
                if ($info['logged_in'] == 1) {
                    ?>
                    <li class="price_user">
                        <span><a href="">100000 VND</a></span>
                    </li>

                    <li>
                        <a href="#" class="headerTinymanPhoto">
                            <img src="<?php echo base_url() ?>public/icons/hidden_user.png" alt="user"/>
                            <span class="headerTinymanName"><?php echo $info['fullname'] ?></span>
                        </a>
                        <div class="detail_user">
                            <ul class="thongtin">
                                <li>
                                    <div>
                                        <div style="margin-left:-15px;float:left">
                                            <img src="<?php echo base_url() ?>public/icons/hidden_user.png" style="border-radius: 5px;" width="100px" height="100px" alt="user"/>
                                        </div>
                                        <div style="margin-left:15px;float:left">
                                            <p style="color:black; font-family:arial">ID: #<?php echo $info['userID'] ?></p>
                                            <p><a href="<?php echo base_url() ?>profile">Trang cá nhân</a></p>
                                            <p><a href="<?php echo base_url() ?>profile#history">Đơn hàng đã đặt
                                                    <?php
                                                    echo (isset($num_history) && $num_history > 0) ? '<spanc class="number_count" style="top: 59px;right: 25px">' . $num_history . '</span>' : '';
                                                    ?>
                                                </a></p>
                                            <p><a href="<?php echo base_url() ?>profile#message">Tin nhắn
                                                    <?php
                                                    echo (isset($num_message) && $num_message > 0) ? '<spanc class="number_count" style="top: 82px;right: 70px">' . $num_message . '</span>' : '';
                                                    ?>
                                                </a></p>
                                        </div>
                                        <div class="clear" style="margin-left:-15px; color: black; font-family:arial; width:300px;height:100px">
                                            <span class="floatLeft" style="height: 20px">Số dư tài khoản: </span><span class="floatLeft" style="font-weight:bold; color: red;height: 20px"> 15.000 VNĐ</span>
                                            <a class="floatLeft" style="margin: 0px 37px;height: 20px" href="<?php echo base_url() ?>profile#money">Nạp tiền</a>
                                            <div  class="clearfix"></div>
                                            <span>(Cập nhật ngày : 15/06/2014 00:00 AM )</span>
                                            <?php
                                            if (isset($shopper) && $shopper!=FALSE)
                                                echo '<p style="margin: -5px 2px;color: black;font-weight: bold;line-height: 23px;width: 250px;">Gian hàng: ' . $shopper['company'] . '</p>';
                                            else {
                                                echo '<a href="' . site_url('profile#upgrade') . '" style="margin: -7px -10px;width: 131px;">Đăng ký gian hàng</a>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div style="margin: 10px 0px -10px -26px;width: 113%;background-color: #DCF5F5;border-top: 2px solid #DCDCE2;">
                                        <form method="post" action="<?php echo site_url('home/chome/logout') ?>">
                                            <input type="submit" class="btn" style="box-shadow: 0px 0px 0px white;background-color: #69B1F0;margin: 9px 85px;" value="Đăng xuất"/>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <?php if (isset($shopper) && $shopper!=FALSE) { ?>
                                <ul  class="showshop">
                                    <div style="float: right;width: 185px;">
                                        <p style="margin: -10px 2px;color: black;height: 20px">Địa chỉ:</p>
                                        <div style="height: 60px; overflow:hidden;padding-top: 20px;line-height: 20px">
                                            <span style="color: black;height: 20px;margin-left: 2px;"><?php echo $shopper['address'] . ', ' . $shopper['city'] . ', Việt Nam' ?></span>
                                        </div>
                                    </div>
                                    <div style="float: left"><img src="<?php echo site_url('public/icons/shop_icon.png') ?>" width="60px"/></div>
                                    <div class="clear"></div>
                                    <li style="font-family:arial; margin-top: 10px">

                                        <p><a href="<?php echo site_url('home/cshop')?>" style="margin: 0px -26px;">Thông tin gian hàng</a></p>
                                        <p><a href="<?php echo site_url('home/cshop?allorder=1#bill')?>" style="margin: 20px -26px;">Đơn hàng mới
                                                <?php
                                                echo (isset($num_order) && $num_order > 0) ? '<spanc class="number_count" style="top: 45px;right: 145px">' . $num_order . '</span>' : '';
                                                ?>
                                            </a></p>
                                        <p><a href="<?php echo site_url('home/cshop?allpro=4#products')?>" style="margin: 20px -26px;">Sản phẩm quá hạn
                                                <?php
                                                echo (isset($num_proExpiration) && $num_proExpiration > 0) ? '<spanc class="number_count" style="top: 81px;right: 122px">' . $num_proExpiration . '</span>' : '';
                                                ?>
                                            </a></p>
                                        <p><a href="<?php echo site_url('home/cshop?allpro=3#products')?>" style="margin: 20px -26px;">Sản phẩm chờ duyệt
                                                <?php
                                                echo (isset($num_proUnactive) && $num_proUnactive > 0) ? '<spanc class="number_count" style="top: 115px;right: 115px">' . $num_proUnactive . '</span>' : '';
                                                ?>
                                            </a></p>
                                        <form action="<?php echo site_url('home/cshop') ?>" method="post">
                                            <input type="submit" class="btn shopmanager" style="box-shadow: 0px 0px 0px white;font-family: arial;background-color: #76CAC0;margin: 12px -12px;padding: 6px;width: 110px;" href="http://google.com" value="Quản lý gian hàng"/>
                                            <input type="submit" class="btn" style="box-shadow: 0px 0px 0px white;font-family: arial;background-color: #76CAC0;margin: 13px 25px;padding: 6px;width: 100px;" value="Vào gian hàng"/>
                                        </form>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
                    </li>
                    <?php
                } else {
                    echo '
                        <li><a href="' . base_url() . 'dang-ky">Đăng ký</a></li>
                        <li><a href="#">Đăng nhập</a>';
                    $this->load->view('vusers/login');
                    echo '</li>';
                }
            }
            ?>
        </ul>
    </header>
    <!--End .top_Nav-->
</section>
<section class="logo_formSearch">
    <div class="wrap clearfix">
        <a href="<?php echo base_url('trang-chu') ?>" id="logo" class="floatLeft"><img src="<?php echo base_url(); ?>/template/uploads/logo.png" alt=""/></a>

        <form id="search">
            <input type="text" placeholder="search" class="txt-search"/>
            <input type="button" id="btnSearch" class="btnsearch"/>
        </form>
        <section class="cart">
            <a class="icon_cart" href="<?php echo base_url() . "cart"; ?>"><span id="choxemgiohang">
                    <?php
                    $dem = 0;
                    if (isset($_SESSION['cart']) && count($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $dem += count($value);
                            $dem--;
                        }
                    }
                    echo $dem;
                    ?>
                </span></a>
        </section>
    </div>
</section><!--End .logo_formSearch-->
<nav id="nav">
    <div class="center" id="droppdown">
        <ul>
            <li><a href="<?php echo site_url('home/chome/'); ?>">Home</a></li>
        </ul>
        <?php generateMenu($kq, $procate, $category); ?>
    </div>
    <!--End navigation-->
</nav><!--End Nav-->