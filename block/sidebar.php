<div id="sidebar">
    <ul class="sideNav">
        <li><a href="<?php echo site_url("admin/index") ?>" >Danh sách bài viết</a></li>
        <li><a  href="<?php echo site_url("admin/getallCategory") ?>" >Danh sách chuyên mục</a></li>
        <li><a href="#">Danh sách admin</a></li>
    </ul><!-- // .sideNav -->
</div><!-- // #sidebar -->

<?php $this->load->view($content,$data);?><!--End content_right-->

