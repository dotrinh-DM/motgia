<div class="leftmenu">
    <ul class="nav nav-tabs nav-stacked">
        <li class="nav-header">Main Navigation</li>
        <li class="active"><a href="<?php echo site_url('admin/adminhome'); ?>"><span class="icon-align-justify"></span> Dashboard</a></li>
        <li><a href="http://localhost/motgia/home/chome" target="_blank"><span class="icon-picture"></span>Visit now!</a></li>
        <li class="dropdown"><a href=""><span class="icon-th-list"></span> Sản phẩm</a>
            <ul>
                <li><a href="<?php echo site_url('admin/product_controller/addProduct'); ?>"> Thêm </a></li>
                <li><a href="<?php echo site_url('admin/product_controller'); ?>"> Quản lý</a></li>
                <li><a href="<?php echo site_url('admin/report_controller/product'); ?>"> Báo cáo sản phẩm</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""><span class="icon-th-list"></span> Danh mục</a>
            <ul>
                <li><a href="<?php echo site_url('admin/category_controller/addForm'); ?>"> Thêm </a></li>
                <li><a href="<?php echo site_url('admin/category_controller'); ?>"> Quản lý</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""><span class="icon-th-list"></span> Thành Viên</a>
            <ul>
                <li><a href="<?php echo site_url('admin/user_controller/addUser'); ?>">Thêm</a></li>
                <li><a href="<?php echo site_url('admin/adminhome/manageUser'); ?>">Quản lý</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""><span class="icon-th-list"></span> Hóa đơn</a>
            <ul>
                <li><a href="<?php echo site_url('admin/order_controller'); ?>"> Quản lý</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""><span class="icon-th-list"></span> Quản lý cơ sở dữ liệu</a>
            <ul>
                <li><a href="<?php echo site_url('admin/database_controller/backup'); ?>"> Sao lưu </a></li>
                <li><a href="<?php echo site_url('admin/database_controller/restore'); ?>"> Phục hồi</a></li>
            </ul>
        </li>
    </ul>
</div><!--leftmenu-->