
<table class="table table-bordered" id="dyntable">
    <thead>
        <tr>
            <th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
            <th>ID</th>
            <th>Họ và tên</th>
            <th>Email</th>
            <th>Hộ khẩu</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Cấp độ</th>
            <th>SĐT</th>
            <th>Trạng thái</th>
            <th>Mật khẩu</th>
       </tr>
    </thead>
        <tbody>    

<?php
    foreach ($data as $key => $value) {;
        ?>
        <tr>
        <td class="aligncenter">
            <span class="center"><input type="checkbox" /></span>
        </td>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['fullname'] ?></td>
        <td><?php echo $value['email'] ?></td>
        <td><?php echo $value['province'] ?></td>
        <td><?php echo $value['birthofday'] ?></td>
        <td><?php echo $value['address'] ?></td>
        <td><?php echo $value['levelID'] ?></td>
        <td><?php echo $value['phone'] ?></td>
        <td><?php echo $value['status'] ?></td>
        <td><?php echo $value['password'] ?></td>
        </tr>
    <?php
    }
?>
    </tbody>

</table>
<a href="http://localhost:82/admin/index.php/products/insert_product">Add</a>