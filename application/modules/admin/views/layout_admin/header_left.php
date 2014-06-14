
        <div class="logopanel">
            <h1><a href="dashboard.html" style="font-family: serif;font-weight: bold;">Một giá <span> v1.0</span></a></h1>
        </div><!--logopanel-->
        
        <div class="datewidget">Hôm nay: <?php echo gmdate("D, d M Y H:i:s +7T", time() + 3150 * (+7 + date("I")));?>
        </div>
        <?php $this->load->view('layout_admin/left'); ?>
