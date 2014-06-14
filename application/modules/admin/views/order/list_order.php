<table class="table table-bordered" id="dyntable">
    <thead>
    <tr>
        <th class="head0 nosort"><input type="checkbox" class="checkall"/></th>
        <th>Mã hóa đơn</th>

        <th style="width: 20%">Ngày tạo</th>
        <th>Ghi chú</th>
        <th>Phương thức</th>
        <th>Trạng thái</th>
        <th>Chi tiết</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data as $key => $value) {
        ;
        ?>
        <tr>
            <td class="aligncenter">
                <span class="center"><input type="checkbox"/></span>
            </td>
            <td><?php echo $value->orderID; ?></td>

            <td><?php echo $value->create_date; ?></td>
            <td><?php echo $value->note; ?></td>
            <td><?php echo ($value->method == 1) ?'Online':'Tại nhà'; ?></td>
            <td><?php if ($value->status == 0) echo 'Đã hủy';
            elseif ($value->status == 1) echo 'Đang chờ xác nhận';
            elseif ($value->status == 2) echo 'Đã xác nhận';
            else {
                echo 'Đã thanh toán';
            }
            ?>
            </td>
            <td><a href="<?php echo site_url("admin/order_controller/getDetail/") . '?orderid=' . $value->orderID. '&buyer=' . $value->buyerID; ?>">Chi tiết</a></td>
            <td><a href="<?php echo site_url("admin/user_controller/edituser/") . '/' . $value->orderID; ?>">Sửa</a>
            </td>
            <td><a href="<?php echo site_url("admin/user_controller/deluser/") . '/' . $value->orderID; ?>">Xóa</a></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>