<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Chi tiết hóa đơn mã số: <?php echo $_GET['orderid'] ?></h6>
        </div>
    </div>
</section>
<section id="content" class="wrap">
    <div class="form boxcart box-drop">
        <div>
            <?php
            if (isset($buyer) && count($buyer)) {
                if ($buyer['status'] == 0)//don hang da bi huy
                    echo '
            <center><button type="button" class="btn btn-primary btn-lg btn-block" disabled="disabled" style="
                            width: 300px;
                            font-size: 12pt;
                            padding: 18px;
                            border-radius: 10px;
                            background-color: #CEB711;
                            ">Đơn hàng đã bị hủy</button>
            </center>
            <div style="margin: 10px 0px 10px 0px;
                 border: 1px solid #ABC3D8;
                 border-radius: 5px;
                 padding: 10px;">
                <p>Đơn hàng mang mã số <b>' . $_GET['orderid'] . '</b> đã bị hủy bởi <b>'.$buyer['buyerfname'] . ' ' . $buyer['buyerlname'].'</b> vào ngày '.$buyer['date_cr'].'</p>
                <p><b>Lý do : </b></p>
            </div>';

                else if ($buyer['status'] == 1)//don hang dang cho xac nhan
                    echo '
            
            <div style="margin: 10px 0px 10px 0px;
                 border: 1px solid #ABC3D8;
                 border-radius: 5px;
                 padding: 10px;">
                <p>Đơn hàng mang mã số <b>' . $_GET['orderid'] . '</b> đang chờ xác nhận của gian hàng</p>
                <p>Đã được mua bởi <b>'.$buyer['buyerfname'] . ' ' . $buyer['buyerlname'].'</b> vào ngày '.$buyer['date_cr'].'</p>
                <p><i><u>Ghi chú bởi khách hàng :</u> '.$buyer['note'].'</i></p>
            </div>
            ';
                else if ($buyer['status'] == 2)//don hang da xac nhan
                    echo '
            <center><button type="button" class="btn btn-primary btn-lg btn-block" disabled="disabled" style="
                            width: 300px;
                            font-size: 12pt;
                            padding: 18px;
                            border-radius: 10px;
                            background-color: #CEB711;
                            ">Đơn hàng đã xác nhận</button>
            </center>
            <div style="margin: 10px 0px 10px 0px;
                 border: 1px solid #ABC3D8;
                 border-radius: 5px;
                 padding: 10px;">
                <p>Đơn hàng mang mã số <b>' . $_GET['orderid'] . '</b> đã được mua bởi <b>'.$buyer['buyerfname'] . ' ' . $buyer['buyerlname'].'</b> vào ngày '.$buyer['date_cr'].'</p>
                <p>Được xác nhận bởi gian hàng vào ngày '.$buyer['date_cr'].'</p>
            </div>';
            }
            ?>


        </div>

        <h4 style="color: #A8370B;"><b>Chi tiết đơn hàng :</b></h4>
        <table class="oder_table">
            <thead>
            <th>#</th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
            </thead>
            <?php
            if (isset($detail) && count($detail)) {
                $i = 0;
                $tien = 0;
                foreach ($detail as $key => $value) {
                    $tien += $value->number * $value->price;
                    $i+=1;
                    echo '
                        <tr>
                            <td>' . $i . '</td>
                            <td>' . $value->proname . '</td>
                            <td>' . $value->number . '</td>
                            <td style="color: #A8370B;">' . number_format($value->price, 2, ', ', '.') . ' VNĐ</td>
                            <td style="font-style: italic;color: #A8370B;"><b>' . number_format($value->number * $value->price, 2, ', ', '.') . ' VNĐ</b></td>
                        </tr>
                         ';
                }
                echo '
                        <tr>
                            <td colspan="4" style="text-align:right"><b>Tổng Cộng : 
                            </td>
                            <td style="font-style: italic;color: #A8370B;"><b> ' . number_format($tien, 2, ', ', '.') . ' VNĐ</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:right"><b>
                                <p>Hình thức thanh toán : </p></b>
                            </td>
                            <td>
                                <p><b>Online</b></p>
                            </td>
                        </tr>
                        ';
            }
            ?>
        </table>
        <div class="marginTop_30"></div>
        <table class="oder_table">
            <thead>
            <th colspan="2"><center>Thông tin người mua</center></th>
            <th colspan="2"><center>Thông tin người nhận</center></th>
            </thead>
            <?php
            if (isset($buyer) && count($buyer)) {
                echo '
                        <tr>
                            <td style="width: 25%;border-right-color: white;text-align: right;">
                                <b>
                                <p>Họ tên : </p>
                                <p>Email : </p>
                                <p>SĐT : </p>
                                <p>Địa chỉ : </p>
                                </b>
                            </td>
                            <td>
                                <p>' . $buyer['buyerfname'] . ' ' . $buyer['buyerlname'] . '</p>
                                <p>' . $buyer['buyeremail'] . '</p>
                                <p>' . $buyer['buyerphone'] . '</p>
                                <p>' . $buyer['buyeradd'] . '</p>
                            </td>
                            <td style="width: 25%;border-right-color: white;text-align: right;">
                                <b>
                                <p>Họ tên : </p>
                                <p>Email : </p>
                                <p>SĐT : </p>
                                <p>Địa chỉ : </p>
                                </b>
                            </td>
                            <td>
                                <p>' . $buyer['buyerfname'] . ' ' . $buyer['buyerlname'] . '</p>
                                <p>' . $buyer['buyeremail'] . '</p>
                                <p>' . $buyer['buyerphone'] . '</p>
                                <p>' . $buyer['buyeradd'] . '</p>
                            </td>
                        </tr>
                        
        </table><div class="marginBottom_15"></div>
        <p><b>Cảm ơn đã quý khách đã sử dụng dịch vụ trên onepricemarket.tk !</b></p>      
                        ';
                if ($buyer['status'] == 1)
                echo '
                    <form method="post" action="">
                    <center><input type="submit" class="btn btn-primary btn-lg btn-block" style="
                            width: 300px;
                            font-size: 12pt;
                            padding: 18px;
                            border-radius: 10px;
                            background-color: #CEB711;
                            " name="confirm" value="Xác nhận đơn hàng"/>
                    </center>
                    <center><input type="submit" class="btn btn-primary btn-lg btn-block" style="
                            width: 300px;
                            font-size: 12pt;
                            padding: 18px;
                            border-radius: 10px;
                            background-color: #CEB711;
                            " name="deny" value="Huỷ đơn hàng"/>
                    </center>
                    </form>
                    ';
               
            }
            ?>
        
        <div class="marginBottom_15"></div>
    </div>
</section>
