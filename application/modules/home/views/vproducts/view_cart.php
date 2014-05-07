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
                        <form action="" method="post">
                          <div class="seller">
                            <h3>Gian hàng <a href="#">' . $value['shopname'] . '</a></h3>
                            <a title="Xóa sản phẩm của gian hàng" href="' . site_url("home/cproducts/delCart/$userid") . '" style="float: right;margin-top: -55px;" onclick="return confirm(' . "'" . 'Bạn có muốn xóa toàn bộ sản phẩm này từ gian hàng này?' . "'" . ');">Xóa</a>
                          </div>
                          <table>
                            <thead>
                                <tr style="height: 50px">
                                    <th style="text-align: center">#</th>
                                    <th style="width: 65px; padding:10px">Hình</th>
                                    <th style="text-align: left;padding:10px">Tên Sản phẩm</th>
                                    <th style="width:80px; text-align: left; padding:10px">Số lượng</th>
                                    <th style="text-align: right;padding:10px">Đơn giá</th>
                                    <th style="text-align: right;padding:10px">Tổng tiền</th>
                                    <th style="width: 56px"></th>
                                </tr>
                            </thead>
                        ';
                $stt = 0;
//                    foreach ($cart as $value3) {$images1 = json_decode($value3->images);
                foreach ($value as $productid => $value2) {

                    if ($productid != 'shopname') {//key2= productid
                        $stt++;
                        echo '  <input type = "hidden" name = "payinfo[' . $userid . '][' . $productid . ']" value = "' . $_SESSION['cart'][$userid][$productid]['soluong'] . '"/>
                                <tbody>
                                    <tr id="cart_iwz9zi66" rel="">
                                        <td style="text-align: center">' . $stt . '</td>
                                        <td><img src="';
                        $this->load->model('Mproducts');
                        $image1 = $this->Mproducts->getImage($productid);
                        $image = json_decode($image1['images']);
                        echo base_url() . $image[0];
                        echo '" alt="" height="60" width="60"></td>
                                        <td style="text-align: left;padding:10px">
                                            <a href="#">' . $value2['productname'] . '</a>
                                            <br>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="number" style="height: 30px;width: 60px;margin: 10px;padding: 5px;" name="soluong[' . $userid . '][' . $productid . ']" value="' . $value2['soluong'] . '"/>
                                            </div>
                                        </td>
                                        <td style="text-align: right;padding:10px">' . number_format(100000, 0, ',', '. ') . ' VNĐ</td>
                                        <td style="text-align: right;padding:10px"><span class="subprice">' . number_format(100000 * $value2['soluong'], 0, ',', '. ') . '</span> VNĐ</td>
                                        <td>
                                            <a title="Xóa khỏi giỏ hàng" href="' . site_url("home/cproducts/delCart/$userid/$productid") . '" onclick="return confirm(' . "'" . 'Bạn có muốn xóa sản phẩm này từ giỏ hàng?' . "'" . ');">Xóa</a>
                                        </td>
                                    </tr>
                                </tbody>';
                        $tong += 100000 * $value2['soluong'];
                    }
                }
                echo '
                            <tfoot>
                                <tr><td colspan="7">                                        
                                    <p id="productTotal" class="product-total"
                                    style="text-align: right;font-size: 16px;">Tổng tiền sản phẩm: ' . number_format($tong, 3, ' ,', '. ') . '</span> VNĐ</p>
                                </td></tr>
                            </tfoot>
                        </table>
                        
                                <div class="col">
                                    <div class="payment">
                                        
                                        <div class="pay">
                                            <input type="submit" name="updatecart" value="Cập nhật giỏ hàng" Style="margin-top: 10px"/>
                                            <input type="submit" name="paymenthome" value="Thanh toán" />
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
