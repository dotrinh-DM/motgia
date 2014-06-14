<table class="table table-bordered" id="dyntable">
    <thead>
        <tr>
            <th class="head0 nosort"><input type="checkbox" class="checkall"/></th>
            <th style="width: 20%">Tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Ngày gửi</th>
            <th style="width: 10%">Chi tiết</th>
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
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><?php echo $value['phone']; ?></td>
                <td><?php echo $value['address']; ?></td>
                <td><?php echo $value['create_date']; ?></td>
                <td><a href="<?php echo site_url("admin/contact_controller/getDetail/") . '/' . $value['contactID']; ?>">Chi tiết</a></td>
                <td><a href="<?php echo site_url("admin/product_controller/del/") . '/' . $value['contactID']; ?>">Xóa</a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>