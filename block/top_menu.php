<div id="top_menu" class="clearfix">
    <ul class="sf-menu"> <!-- DROPDOWN MENU -->
        <li class="current">
            <a href="<?php echo site_url("admin/index") ?>">Home</a><!-- First level MENU -->
            <ul>
                <li>
                    <a href="#aa">Database</a>
                </li>
                <li class="current">
                    <a href="#ab">Home</a> <!-- Second level MENU -->
                    <ul>
                       
                        <li><a href="#">Thống kê</a></li>
                        <li><a href="#">Băng thông</a></li>
                        <li><a href="#">Bài phổ biến</a></li>
                        <li></li>
                    </ul><!-- // #end mainNav -->
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Thêm</a>
            <ul>
                <li>
                    <a href="#">menu item</a>
                    <ul>
                        <li><a href="#">short</a></li>
                        <li><a href="#">short</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="<?php echo site_url('admin/getAllCategory') ?>">Tất Cả Danh mục</a></li>
        <li><a href="<?php echo site_url("admin/index") ?>">Tất Cả Bài Viết</a></li>
        <li><a href="<?php echo site_url('admin/addArticleForm') ?>">Tạo bài viết</a></li>
        <li><a href="<?php echo site_url('admin/addCategoryForm') ?>">Tạo chuyên mục</a></li>
    </ul>
    <a id="visit" class="right" href="<?php echo site_url('home/index') ?>" target="_blank">Visit Now!</a>
</div>