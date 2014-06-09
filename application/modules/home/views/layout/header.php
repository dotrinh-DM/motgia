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
                    echo '
                    <li class="price_user">
                        <span><a href="">100000 VND</a></span>
                    </li>
                    
                    <li>
                        <a href="#" class="headerTinymanPhoto">
                            <img src="' . base_url() . 'template/uploads/1076505_100003738868761_2002716988_q.jpg" alt="user"/>
                            <span class="headerTinymanName">' . $info['fullname'] . '</span>
                        </a>
                        <div class="detail_user">
                            <ul>
                                <li><h6 class="welcome">Xin chào ' . $info['fullname'] . ' !</h6></li>
                                <li><a href="' . base_url() . 'up-product">Đăng tin</a></li>
                                <li><a href="' . base_url() . 'profile">Trang cá nhân</a></li>
                                <li><a href="' . base_url() . 'profile#bill">Đơn đặt hàng
                                ';
                    //hien thi so hoa don chua xu ly
                    echo (isset($num_order) && $num_order > 0) ? '<span
                                style="
                                background: #E32958;
                                position: absolute;
                                top: 10px;
                                right: 5px;
                                display: block;
                                width: 20px;
                                height: 18px;
                                font-size: 10px;
                                color: white;
                                font-weight: 700;
                                border-radius: 50%;
                                text-align: center;
                                line-height: 16px;
                                z-index: 10000;
                                "    
                                >' . $num_order . '</span>' : '';
                    echo '
                                </a></li>    
                                <li><a href="' . base_url() . 'profile#messages">Tin nhắn';
                    //hien thi so tin nhan moi nhan chua doc
                    echo (isset($num_message) && $num_message > 0) ? '<span
                                style="
                                background: #E32958;
                                position: absolute;
                                top: 10px;
                                right: 5px;
                                display: block;
                                width: 20px;
                                height: 18px;
                                font-size: 10px;
                                color: white;
                                font-weight: 700;
                                border-radius: 50%;
                                text-align: center;
                                line-height: 16px;
                                z-index: 10000;
                                "    
                                >' . $num_message . '</span>' : '';
                    echo '</a></li>
                                <li><a href="' . base_url() . 'home/chome/logout">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </li>
                        ';
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
        <a href="#" id="logo" class="floatLeft"><img src="<?php echo base_url(); ?>/template/uploads/logo.png" alt=""/></a>

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
            <li><a href="<?php echo site_url('home/chome/');?>">Home</a></li>
        </ul>
        <?php generateMenu($kq, $procate, $category); ?>
    </div>
    <!--End navigation-->
</nav><!--End Nav-->