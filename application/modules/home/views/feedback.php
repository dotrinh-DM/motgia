<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Góp ý</h6>
            <span>Hãy gửi phản hồi và góp ý tới chúng tôi</span>
        </div>
        <div class="clearfix breadcrumbs floatRight">
            <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="Trang nhất" href="/" itemprop="url">
                    <span itemprop="title">Home</span>
                </a> /
            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                <a class="highlight" href="/" title="Kiến thức SEO" itemprop="url">
                    <span itemprop="title">Contact</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="content" class="wrap">
    <section id="primary">
        <div class="maps_page">
            <header class="title_form"><span>Bản đồ</span></header>
            <div class="img_maps">
                <img src="<?php echo site_url('template/uploads/maps.png') ?>" alt=""/>
            </div>
        </div>
        <div class="Contact-us">
            <header class="title_form"><span>Phản hồi</span></header>
            <form class="form_contact floatLeft form error">
                <div  class="position">
                    <label>Họ và tên <span>*</span></label>
                    <input type="text" required=""/>
                    <span class="tooltip">Không được để trống</span>
                </div>
                <div class="position">
                    <label>Email<span>*</span></label>
                    <input type="Email" required=""/>
                    <span class="tooltip">Không được để trống</span>
                </div>
                <div  class="position">
                    <label>Địa chỉ</label>
                    <input type="text"/>
                </div>
                <div  class="position">
                    <label>Điện thoại</label>
                    <input type="text"/>
                </div>
                <div class="position">
                    <label>Nội dung<span>*</span></label>
                    <textarea required=""></textarea>
                    <span class="tooltip">Không được để trống</span>
                </div>
                <div>
                    <input type="submit" style="margin: 0px 110px" class="floatRight" value="Send"/>
                </div>
            </form>
            <ul class="floatRight Content_contact">
                <li style="width: 270px">Tập đoàn thông tin truyền thông FITHOU một giá</li>
                <li class="maps">96, Định Công, Hoàng Mai, Hà Nội, Việt Nam</li>
                <li class="phone">1800-555-3838</li>
                <li class="mail">tantan@motgia.tk</li>
            </ul>
            <div class="clear"></div>
        </div>
    </section><!--End #primary-->
    <aside>
        <div class="box_item" style="width: 230px;top: 65px;float: right;">              
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
                                <a href="#">
                                    <img src="' . site_url($value['image']) . '" alt="000"/>
                                </a>
                                <div class="name" style="width:95px">
                                    <div style="height: 52px;overflow: hidden;"><a href="#" style="font-size:10px">' . $value['company'] . '</a></div>
                                    <div class="clear"></div>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </div>                              
                            </div>
                        </li><div class="clear"></div>';
                        $i++;
                    }
                }
                ?>
            </ul>
            <div class="more floatRight" ><a href="<?php echo site_url('home/cshop/listshop') ?>">Xem thêm ></a></div>
        </div>
    </aside><!--End #sidebar--> 

</section><!--End #content-->