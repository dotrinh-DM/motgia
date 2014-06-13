<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Danh sách gian hàng </h6>
            <span>Danh sách gian hàng</span>
        </div>
        <div class="clearfix breadcrumbs floatRight">
            <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="Trang nhất" href="<?php echo site_url('trang-chu');?>" itemprop="url">
                    <span itemprop="title">Trang chủ</span>
                </a> /
            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                    <span itemprop="title">danh sách gian hàng</span>
            </div>
        </div>
    </div>
</section>
<section id="content" class="wrap">
    <div id="list_pavilion">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Logo</th>
                    <th>Thông tin gian hàng</th>
                    <th>Liên hệ</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($listshop) && count($listshop)) { $i=1;
                    foreach ($listshop as $key => $value) {
                        echo'
            <tr>
                <td>'.$i.'</td>
                <td><a href="'.  site_url('home/cshop/shop_detail').'/'.$value['shopID'].'"><img src="'.site_url('public/icons/shop_icon.png').'"/></a></td>
                <td>
                    <h5><a href="'.  site_url('home/cshop/shop_detail').'/'.$value['shopID'].'">'.$value['company'].'</a></h5>
                    <p class="adress">'.$value['address'].', '.$value['city'].'</p>
                    <p>Có <span class="quantity">'.$value['num_pro'].' </span>sản phẩm trong Thời trang nam</p>
                    <p>Đánh giá:<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></p>


                </td>
                <td><br>
                    <p>Điện thoại : '.$value['phone'].'</p>
                    <p>Fax : 04-36473147</p>
                    <a href="'.$value['website'].'">'.$value['website'].'</a>
                </td>
                <td>
                    <img src="'.site_url('template/images/ok.png').'"/>
                </td>
            </tr>'; $i++;
                    }
                }
                ?>
            </tbody>
        </table>

        <div class="clear"></div>
    </div>
    <div class="text_center" id="more10" >
        <button class="btn_showmore" id="10">Xem thêm</button>
    </div>