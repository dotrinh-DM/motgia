
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
            <th>Sửa</th>
            <th>Xóa</th>
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
        <td><?php echo $value['userID'] ?></td>
        <td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
        <td><?php echo $value['email'] ?></td>
        <td><?php echo $value['province'] ?></td>
        <td><?php echo $value['birthday'] ?></td>
        <td><?php echo $value['address'] ?></td>
        <td><?php echo $value['levelID'] ?></td>
        <td><?php echo $value['phone'] ?></td>
        <td><?php  if($value['status']==0)  echo 'Chờ'; elseif($value['status']==1) echo 'Ok'; else echo 'Bị khóa'; ?></td>
        <td><a href="<?php echo site_url("admin/user_controller/edituser/").'/'.$value['userID'];?>">Sửa</a></td>
        <td><a href="<?php echo site_url("admin/user_controller/deluser/").'/'.$value['userID'];?>">Xóa</a></td>
        </tr>
    <?php
    }
?>
    </tbody>
</table>