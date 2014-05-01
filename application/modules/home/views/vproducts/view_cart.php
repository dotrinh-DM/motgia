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
        
            <?php
            $tong = 0;
            if (isset($_SESSION['cart']) && $_SESSION['cart']) {
                foreach ($_SESSION['cart'] as $userid => $value) {
                    $tong = 0;
                    echo '
                        <form action="'.site_url('home/cproducts/updatecart').'" method="post">
                          <div class="seller">
                            <h3>Gian hàng <a href="#">' . $value['shopname'] . '</a></h3>
                            <a href="'.site_url("home/cproducts/delCart/$userid").'" style="float: right;margin-top: -55px;">Xóa</a>
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
                        ';
                    foreach ($value as $productid => $value2) {
                        if ($productid != 'shopname') {//key2= productid
                            echo '
                                <tbody>
                                    <tr id="cart_iwz9zi66" rel="">
                                        <td><img src="uploads/29672_250008_64788.jpg" alt=""></td>
                                        <td style="text-align: left;padding-left: 5px">
                                            <a href="#">' . $value2['productname'] . '</a>
                                            <br>
                                        </td>
                                        <td>
                                            <div>
                                                <input name="soluong[' . $userid . '][' . $productid . ']" value="' . $_SESSION['cart'][$userid][$productid]['soluong'] . '"/>
                                            </div>
                                        </td>
                                        <td>100.000</td>
                                        <td><span class="subprice">' . 100000 * $_SESSION['cart'][$userid][$productid]['soluong'] . '</span> VNĐ</td>
                                        <td>
                                            <a href="' . site_url("home/cproducts/delCart/$userid/$productid") . '">Xóa</a>
                                        </td>
                                    </tr>
                                </tbody>';
                            $tong += 100000 * $_SESSION['cart'][$userid][$productid]['soluong'];
                        }
                    }
                        echo '
                        </table>
                        
                                <div class="col">
                                    <div class="payment">
                                        <p id="productTotal" class="product-total">Tổng tiền sản phẩm: '.$tong.'</span> VNĐ</p>
                                        <input type="submit" name="updatecart" value="Cập nhật giỏ hàng" Style="margin: 0px"/>

                                        <div class="pay">
                                            <a href="#" class="btn">Trả tiền khi nhận hàng</a>
                                            <a id="btnGotoCheckout" href="#" class="btn">Trả tiền trực tuyến</a>
                                        </div>
                                    </div>
                                </div><!-- End .boxcart-info--> 
                        </form>
                        ';
                }
            }
            else
                echo 'Không có sản phẩm nào trong giỏ hàng của bạn!';
            ?>


        
    </div>
</section>
