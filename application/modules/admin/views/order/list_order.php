<table class="table table-bordered" id="dyntable">
    <thead>
    <tr>
        <th class="head0 nosort"><input type="checkbox" class="checkall"/></th>
        <th>Mã hóa đơn</th>

        <th style="width: 20%">Ngày tạo</th>
        <th>Chú ý</th>
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
            <td><?php if ($value->status == 0) echo 'Online'; elseif ($value->status == 1) echo 'Tại nhà'; ?></td>
            <td><?php if ($value->status == 0) echo 'Chưa xử lý';
            elseif ($value->status == 1) echo 'Đã xử lý';
            else {
                echo 'OK';
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