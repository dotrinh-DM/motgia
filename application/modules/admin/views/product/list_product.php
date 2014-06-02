<table class="table table-bordered" id="dyntable">
    <thead>
    <tr>
        <th class="head0 nosort"><input type="checkbox" class="checkall"/></th>
        <th style="width: 30%">Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>

        <th>Ngày tạo</th>
        <th>Danh mục</th>
        <th>Trạng thái</th>
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
            <td><?php echo $value['name']?></td>
            <td><?php echo $value['quantity'] ?></td>
            <td><?php echo $value['price'] ?></td>

            <td><?php echo $value['create_date'] ?></td>
            <td><?php echo $value['categoriesID'] ?></td>
            <td><?php if ($value['status'] == 0) echo 'Chờ'; elseif ($value['status'] == 1) echo 'Ok';
                else echo 'Bị khóa'; ?></td>
            <td><a href="<?php echo site_url("admin/user_controller/edituser/") . '/' . $value['productsID']; ?>">Sửa</a>
            </td>
            <td><a href="<?php echo site_url("admin/user_controller/deluser/") . '/' . $value['productsID']; ?>">Xóa</a></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>