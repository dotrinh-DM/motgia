<table class="table table-bordered" id="dyntable">
    <thead>
        <tr>
            <th class="head0 nosort"><input type="checkbox" class="checkall"/></th>
            <th style="width: 30%">Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>

            <th>Ngày đăng</th>

            <th>Trạng thái</th>
            <th>Duyệt</th>
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
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['quantity'] ?></td>
                <td><?php echo $value['price'] ?></td>

                <td><?php echo $value['create_date'] ?></td>

                <td><span class="cont<?php echo $value['productsID']; ?>">Chờ duyệt</span></td>
                <td><button id="<?php echo $value['productsID'] ?>" class="confirmpro" href="">Duyệt</button>
                </td>
                <td><a id="<?php echo $value['productsID'] ?>" class="denypro" href="<?php echo site_url("admin/product_controller/del/") . '/' . $value['productsID']; ?>">Xóa</a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<script type="text/javascript">
    $(function() {
        $('.confirmpro').live("click", function()
        {
//        
            var ID = $(this).attr("id");
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/product_controller/confirmProduct'); ?>",
                data: {"proid": ID},
                success: function(html) {
                    $(".cont" + ID).empty();
                    $(".cont" + ID).append(html);
                    if( $(".cont" + ID).html() == 'Đã duyệt')
                    $("#"+ID).prop("disabled", "disabled");

                }
            });
            return false;
        });
    });
</script>