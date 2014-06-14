<?php

function curPageURL() {
    $pageURL = 'http';
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL; //lay dia chi url của trang hiện tại
}

function curPageName() {
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}
?>

<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.jqzoom-core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/modernizr.custom.17475.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/js/gallery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.elastislide.js"></script>
<script src="<?php echo base_url(); ?>template/js/jquery.hashchange.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>template/js/jquery.easytabs.min.js" type="text/javascript"></script>
<style type="text/css" >
    @import url('<?php echo base_url(); ?>public/adminstyle/css/animate.min.css')
    @import url('<?php echo base_url(); ?>public/adminstyle/css/animate.delay.css')

</style>
<script type="text/javascript" src="<?php echo base_url(); ?>template/js/validateh5.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(document).ready(function() {
            $.h5Validate.addPatterns({
                day_vn: /(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d/
            });
            $("#loginform").h5Validate({
                errorClass: "validationError",
                validClass: "validationValid"
            });
            $("#loginform").live("submit", function(evt) {
                if ($("#loginform").h5Validate("allValid") === false) {
                    evt.preventDefault();
                }
            });
        });
    });
</script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/popup.js"></script>
<script type="text/javascript">
    $(function() {
        $('#tab-container').easytabs();
        $('#paynow').live("click", "submit", function(e) {//Nếu chưa đăng nhập thì hiện cửa sổ popup để đăng nhập
            var login = '<?php echo $info['logged_in'] == TRUE ? "TRUE" : "FALSE"; ?>';
            if (login == "TRUE") {
                $('#form-action').attr('action', '<?php echo base_url() ?>thanh-toan-truc-tuyen');
            } else {
                $(this).showPopup({
                    top: 120, //khoảng cách popup cách so với phía trên
                    closeButton: ".close_popup", //khai báo nút close cho popup
                    scroll: false, //cho phép scroll khi mở popup, mặc định là không cho phép
                    onClose: function() {
                        //sự kiện cho phép gọi sau khi đóng popup, cho phép chúng ta gọi 1 số sự kiện khi đóng popup, bạn có thể để null ở đây
                    }
                });
                $('.logintitle').html('Đăng nhập');
                return false;
            }
        });

        $('#qty').live("keyup", function() {//ko dc phép nhập nhỏ hơn 1
            var qty = $('#qty').val();
            if (qty < 1)
                $('#qty').val(1);
        });
        $('#up').live("click", function() {//Nút tăng số lượng
            var qty = parseInt($('#qty').val());
            if (qty < 1)
                qty = 1;
            ++qty;
            $('#qty').val(qty);
        });
        $('#down').live("click", function() {//Nút giảm số lượng
            var qty = parseInt($('#qty').val());
            if (qty > 1) {
                --qty;
            }
            $('#qty').val(qty);
        });
    });
    jQuery(document).ready(function() {
        jQuery('#carousel').elastislide({
            autoplay: true
        });
        jQuery('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens: true,
            zoomWidth: 250,
            zoomHeight: 200,
            preloadImages: false,
            alwaysOn: false
        });

        $('#loginform').submit(function(event) { //Trigger on form submit
            $('.logintitle').html('Đăng nhập');
            var postForm = {//Fetch form data
                'email2': $('input[name=inputemail2]').val(), //Store name fields value
                'pass2': $('input[name=inputpass2]').val()
            };
            $.ajax({//Process the form using $.ajax()
                type: 'POST', //Method type
                url: '<?php echo base_url(); ?>home/cusers/login', //gọi đến controller xử lý
                data: postForm, //truyền biến dưới dạng $_POST['ten bien']
                dataType: 'json',
                success: function(data) { // load lại trang sau 3 giay
                    if (!data.success) { //nếu controller trả về kết quả lỗi
                        if (data.errors.name) //Lấy thông tin báo lỗi
                            $('.logintitle').fadeIn(1000).html('Sai tên truy nhập hoặc mật khẩu!'); //chèn mã lỗi vào thẻ có class = throw_error
                    } else
                        location.reload(true);//đăng nhập thành công thì reload lại trang
                },
            });
            event.preventDefault(); //Prevent the default subm
        });
    });

</script>
<div id="popup_content" class="popup">
    <a class="close_popup" href="javascript:void(0)"><img src="<?php echo base_url() ?>public/icons/del.png" style="width: 35px;margin: -37px 0px 0px 3px;"/></a>
    <div class="loginwrap zindex100 animate2 bounceInDown" style="margin-top: -20px;margin-right: -1px;">
        <h1 class="logintitle" style="font-weight: bold;"><span class="iconfa-lock"></span> Đăng nhập <span class="subtitle" style="margin: 5px 0px -15px 10px;">Xin chào! Bạn phải đăng nhập để sử dụng chức năng thanh toán!</span></h1>
        <div class="loginwrapperinner">
            <form id="loginform" action="" method="post">
                <div  class="position">
                    <p class="animate5 bounceIn">
                        <input type="text" id="username" name="inputemail2" required="" placeholder="Username" />
                        <span class="tooltip">Không được để trống</span>
                    </p>
                </div>
                <div  class="position">
                    <p class="animate5 bounceIn">
                        <input type="password" id="password" name="inputpass2" required="" placeholder="Password" />
                        <span class="tooltip">Không được để trống</span>
                    </p>
                </div>
                </p>
                <p class="animate6 bounceIn"><input type="submit" class="btn btn-default btn-block" name="login" value="Login"/></p>
                <p class="animate7 fadeIn"><a href="" style="color:#C8D6E2"><span class="icon-question-sign icon-white"></span> Forgot Password?</a></p>
            </form>
        </div><!--loginwrapperinner-->
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
</div>

<?php
$images1 = json_decode($data_detail['images']);
?>
<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Chi tiết sản phẩm</h6>
            <span>Thông tin chi tiết sản phẩm và nhà cung cấp</span>
        </div>
        <div class="clearfix breadcrumbs floatRight">
            <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="Trang nhất" href="/" itemprop="url">
                    <span itemprop="title">Home</span>
                </a> /
            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                <a class="highlight" href="/" title="Kiến thức SEO" itemprop="url">
                    <span itemprop="title">Product</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="content" class="wrap">

    <section id="primary">
        <section class="product_detail">
            <div id="product_view">
                <?php foreach ($images1 as $value22)
                    
                    ?>
                <a href="<?php echo base_url() . $images1[0]; ?>" class="jqzoom" rel='gal1'  title="triumph">
                    <img class="view" src="<?php echo base_url() . $images1[0]; ?>" alt=""  title="triumph"/>
                </a>
                <div class="clear"></div>
                <div id="sliderthumb">
                    <ul  id="carousel" class="elastislide-list">
                        <li>
                            <a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url() . $images1[0]; ?>',largeimage: '<?php echo base_url() . $images1[0]; ?>'}">
                                <img src="<?php echo base_url() . $images1[0]; ?>"/></a>
                        </li>
                        <li>
                            <a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url() . $images1[1]; ?>',largeimage: '<?php echo base_url() . $images1[1]; ?>'}">
                                <img src='<?php echo base_url() . $images1[1]; ?>'></a>
                        </li>
                        <li>
                            <a href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo base_url() . $images1[2]; ?>',largeimage: '<?php echo base_url() . $images1[2]; ?>'}">
                                <img src='<?php echo base_url() . $images1[2]; ?>'></a>
                        </li>
                    </ul>
                </div>
            </div>
            <section id="product_content">
                <h1><?php echo $data_detail['name'] ?></h1>
                <header class="longer_products">
                    <h6 class="icon_longer_products" style="height: 30px;font-size: 20px;font-weight: bold;color: #DD5B42;"><?php echo ($data_detail['status']==2)?'Hết hàng':'Còn hàng'?></h6>
                </header>
                <div class="subdetail">
<?php echo $data_detail['intro'] ?>
                </div>

                <div class="price_3">
                    <b>Giá:</b>
                    <span class="new_price">100k</span>
                </div>
                <?php if(isset($shopper) && $shopper['shopID'] == $data_detail['shopID']){?><!--Bạn không thể tự mua hàng của mình-->
                <br><br><span>Xin chào <?php echo $info['fullname']?>!</span><br>
                <span>Bạn là người đăng sản phẩm này</span>
                <button class="btn"  onclick="location.href='<?php echo site_url('home/cshop').'/shop_detail/'.$shopper['shopID']?>'">Quản lý sản phẩm</button>
                <?php } else{?>
                <div id="addCart">
                    <form action="" method="POST" id="form-action">
                        <label for="qty">Số lượng</label>
                        <input type="hidden" name="seller" value="<?php echo $data_detail['shopID'] ?>"/>
                        <input type="hidden" name="proname" value="<?php echo $data_detail['name'] ?>"/>
                        <input id="down" type="button" value="<"/>
                        <input id="qty" type="text" value="1" name="soluong"/>
                        <input id="up" type="button" value=">"/>
                        <input id="btnAdd" type="submit" value="Cho vào giỏ" name="order"/>
                        <input type="submit" name="paynow" href="#popup_content" rel="tantan" id="paynow" name="paynow" value="Mua ngay"/>
                        <img src="http://developer.baokim.vn/uploads/baokim_btn/thanhtoanantoan-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn qua Cổng thanh toán trực tuyến BảoKim.vn" >
                    </form>
                </div>
                <?php }?>
                <div class="social_02 marginTop_30">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-like" data-href="<?php echo curPageURL(); ?>" data-width="100" 
                         data-layout="button" 
                         data-action="like" 
                         data-show-faces="true" 
                         data-share="true">
                    </div>
                </div>
            </section>
            <div class="clear"></div>
            <div id="tab-container" class='tab-container'>
                <ul class='etabs'>
                    <li class='tab active' ><a href="#tabs1-html">Thông tin sản phẩm</a></li>
                    <li class='tab'><a href="#tabs1-js">Bình luận</a></li>
                    <li class='tab'><a href="#tabs1-css">Nhà cung cấp</a></li>
                </ul>
                <div class='panel-container'>
                    <div class="position">
                        <div id="tabs1-html">
                            <div class="detail_item">
                                <h6 class="title_detail_item">Đặc điểm nổi bật</h6>
                                <ul>
                                    <li>
<?php echo $data_detail['hightlight'] ?> 
                                    </li>
                                </ul>
                            </div>
                            <div class="detail_item">
                                <h6 class="title_detail_item">Điều kiện sử dụng</h6>
                                <ul>
                                    <li>

<?php echo $data_detail['condition'] ?>

                                    </li>
                                </ul>
                            </div><!--End .detail_item -->
                            <hr class="line_full"/>
                            <div class="detail_item_post">
                                <header class="title_post_detail">Detail information</header>
                                <p>
<?php echo $data_detail['productinfo'] ?>
                                </p>
                            </div>


                        </div>
                    </div>
                    <div id="tabs1-js">
                        <div id="fb-root"></div>
                        <div class="fb-comments" data-href="<?php echo curPageURL(); ?>" data-width="600" data-numposts="10" data-colorscheme="light"></div>

                    </div>
                    <div id="tabs1-css">
                        <div class="detail_item">
                            <h6 class="title_detail_item">Thông tin Nhà cung cấp</h6>
                            <ul>
                                <li>Địa chỉ: <?php echo $shopinfo['address'] . ', ' . $shopinfo['city'] ?></li>
                                <li>SĐT: <?php echo $shopinfo['phone'] ?></li>
                                <li>Website: <a  href="<?php echo $shopinfo['website'] ?>"><?php echo $shopinfo['website'] ?></a></li>
                            </ul>
                        </div>
                        <div class="detail_item" style="width: 320px;height: 300px;">
                            <h6 class="title_detail_item">Bản đồ</h6>
                            <div class="address_maps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3725.1876952152284!2d105.838734!3d20.985111999999994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x982365cd4337fdc8!2zVmnhu4duIMSQ4bqhaSBI4buNYyBN4bufIEjDoCBO4buZaSAtIEtob2EgQ8O0bmcgTmdo4buHIFRow7RuZyBUaW4!5e0!3m2!1svi!2s!4v1402127043107" width="320" height="500" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div><!--End .detail_item -->
                        <div class="clear"></div>
                        <div class="detail_item_post clearfix">
                            <header class="title_post_detail">Gửi góp ý</header>
                            <form class="form floatLeft">
                                <div>
                                    <label>Tên<span>*</span></label>
                                    <input id="fullname" name="fullname" type="text" placeholder="Tên liên hệ" value="" size="40" required="">
                                    <span class="tooltip">Không được để trống</span>
                                </div>
                                <div>
                                    <label>Số điện thoại<span>*</span></label>
                                    <input id="phone" name="phone" type="text" placeholder="phone" value="" size="11" required>
                                    <span class="tooltip">Không được để trống</span>
                                </div>
                                <div>
                                    <label>Email<span>*</span></label>


                                    <input id="email" name="email" type="email" placeholder="acb@gmail.com" value="" size="40" required="">
                                    <span class="tooltip">Không được để trống</span>
                                </div>
                                <div>
                                    <label>Góp ý<span>*</span></label>
                                    <textarea id="content" name="content" placeholder="comment tại đây" cols="40" rows="8" required="">

                                    </textarea>
                                    <span class="tooltip">Không được để trống</span>
                                </div>
                                <div style="text-align: right;">
                                    <input type="submit" value="send"/>
                                </div>
                            </form>
                            <div  class="floatRight note">
                                <i>IT is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- .End product_detail -->
    </section>    <!--End #primary-->

    <aside id="sidebar">
        <div class="box_item">
            <h5 style="font-weight: bold;color: #3D5F43;">Thông tin gian hàng</h5>
            <div class="line"></div>
            <a href="<?php echo base_url()?>home/cshop/shop_detail/<?php echo $shopinfo['shopID']?>" class="img_box">
                <img src="<?php echo base_url() . $shopinfo['image']; ?>" width="210px" height="190px"/>
            </a>
            <h6><a href="<?php echo base_url()?>home/cshop/shop_detail/<?php echo $shopinfo['shopID']?>"><?php echo $shopinfo['company'] ?></a></h6>
            <p>Địa chỉ: <?php echo $shopinfo['address'] . ', ' . $shopinfo['city'] ?><br>
                SĐT: <?php echo $shopinfo['phone'] ?><br>
                Website: <a  href="<?php echo $shopinfo['website'] ?>"><?php echo $shopinfo['website'] ?></a><br>
            </p>
        </div>
        <div class="box_item">              
            <h5 style="font-weight: bold;color: #3D5F43;">Gian hàng nổi bật</h5>
            <div class="line"></div>
            <ul class="rank">
                <?php
                if (isset($listshop) && count($listshop)) {
                    $i = 1;
                    foreach ($listshop as $key => $value) {
                        echo '
                               <li>
                            <span style="padding: 6px; margin-top:10px" class="number special-' . $i . '">' . $i . '</span>
                            <div class="info" style="width:168px">           
                                <a href="'.  base_url().'home/cshop/shop_detail/'.$value['shopID'].'">
                                    <img src="' . site_url($value['image']) . '" alt="000"/>
                                </a>
                                <div class="name" style="width:95px">
                                    <div style="height: 52px;overflow: hidden;"><a href="'.  base_url().'home/cshop/shop_detail/'.$value['shopID'].'" style="font-size:10px">' . $value['company'] . '</a></div>
                                    <div class="clear"></div>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </div>                              
                            </div>
                        </li>';
                        $i++;
                    }
                }
                ?>
            </ul>
            <div class="more floatRight"><a href="<?php echo site_url('home/cshop/listshop')?>">Xem thêm ></a></div>
        </div>
    </aside>    <!--End #sidebar--> 
    <div class="clear"></div>
    </section>
