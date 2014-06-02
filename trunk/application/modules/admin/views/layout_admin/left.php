<div class="searchwidget">
    <form action="results.html" method="post">
        <div class="input-append">
            <input type="text" class="span2 search-query" placeholder="Search here...">
            <button type="submit" class="btn"><span class="icon-search"></span></button>
        </div>
    </form>
</div><!--searchwidget-->

<div class="leftmenu">
    <ul class="nav nav-tabs nav-stacked">
        <li class="nav-header">Main Navigation</li>
        <li class="active"><a href="dashboard.html"><span class="icon-align-justify"></span> Dashboard</a></li>
        <li><a href="http://motgia.vn/" target="_blank"><span class="icon-picture"></span>Visit now!</a></li>
        <li class="dropdown"><a href=""><span class="icon-th-list"></span> Sản phẩm</a>
            <ul>
                <li><a href="<?php echo site_url('admin/product_controller/addProduct'); ?>"> Thêm </a></li>
                <li><a href="<?php echo site_url('admin/product_controller'); ?>"> Quản lý</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""><span class="icon-th-list"></span> Danh mục</a>
            <ul>
                <li><a href="table-static.html"> Thêm </a></li>
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
                <li><a href="table-static.html"> Thêm </a></li>
                <li><a href="<?php echo site_url('admin/order_controller'); ?>"> Quản lý</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""><span class="icon-th-list"></span> Báo cáo</a>
            <ul>
                <li><a href="table-static.html"> Thêm </a></li>
                <li><a href="table-dynamic.html"> Quản lý</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""><span class="icon-th-list"></span> Quản lý cơ sở dữ liệu</a>
            <ul>
                <li><a href="table-static.html"> Sao lưu </a></li>
                <li><a href="table-dynamic.html"> Phục hồi</a></li>
            </ul>
        </li>
    </ul>
</div><!--leftmenu-->