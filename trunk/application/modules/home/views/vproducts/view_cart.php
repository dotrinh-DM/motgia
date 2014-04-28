<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Giỏ hàng </h6>
            <span>Giỏ hàng</span>
        </div>
        <div class="clearfix breadcrumbs floatRight">
            <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="Trang nhất" href="/" itemprop="url">
                    <span itemprop="title">Trang chủ</span>
                </a> /
            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                <a class="highlight" href="/" title="Kiến thức SEO" itemprop="url">
                    <span itemprop="title">Giỏ hàng</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="content" class="wrap">
    <div class="form boxcart box-drop">
        <form action="<?php echo site_url('home/cproducts/updatecart'); ?>" method="post">
            <div class="seller">
                <h3>Gian hàng <a href="#">Lê Hải</a></h3>
            </div>
            <table>

                <thead>
                    <tr style="height: 50px">
                        <th style="width: 65px;"></th>
                        <th style="text-align: left;padding-left: 5px">Tên Sản phẩm</th>
                        <th style="width: 80px">Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                        <th style="width: 56px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tong = '';
                    if (isset($cart) && count($cart) > 0)
                        foreach ($cart as $key => $value) {
                            ?>
                            <tr id="cart_iwz9zi66" rel="">
                                <td><img src="uploads/29672_250008_64788.jpg" alt=""></td>
                                <td style="text-align: left;padding-left: 5px">
                                    <a href="#"><?php echo $value->name; ?></a>
                                    <br>
                                </td>
                                <td>
                                    <div>
                                        <input name="soluong[<?php echo $value->productsID . '][' . $value->userID; ?>]" value="<?php echo $_SESSION['cart'][$value->productsID][$value->userID]; ?>"/>
                                    </div>
                                </td>
                                <td><?php echo $value->price; ?></td>
                                <td><span class="subprice"><?php echo $value->price * $_SESSION['cart'][$value->productsID][$value->userID]; ?></span> VNĐ</td>
                                <td>
                                    <a href="<?php echo site_url("home/cproducts/delCart/$value->productsID"); ?>">Xóa</a>
                                </td>
                            </tr>
                            <?php
                            $tong += $value->price * $_SESSION['cart'][$value->productsID][$value->userID];
                        }
                    else
                        echo 'Không có sản phẩm nào trong giỏ hàng của bạn!';
                    ?>
<!--                    <tr id="emptyCart" style="display: none;">
                <td colspan="6">
                    <br>
                    Chưa có sản phẩm nào trong giỏ hàng.
                    <br><br>
                </td>
            </tr>-->
                </tbody>
            </table>

            <!--thu nghiem-->
            <?php
            
            foreach ($cart as $key => $value) {
                
            }
            ?>
            <!--het thu nghiem-->

            <div class="col">
                <div class="payment">
                    <p id="productTotal" class="product-total">Tổng tiền sản phẩm: <span><?php echo $tong; ?></span> VNĐ</p>
                    <input type="submit" name="updatecart" value="Cập nhật giỏ hàng" Style="margin: 0px"/>

                    <div class="pay">
                        <a href="#" class="btn">Trả tiền khi nhận hàng</a>
                        <a id="btnGotoCheckout" href="#" class="btn">Trả tiền trực tuyến</a>
                    </div>
                </div>
            </div><!-- End .boxcart-info-->            
        </form>
    </div>
