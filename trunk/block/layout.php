<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><?php $this->load->view('block/head1')?></head>
<body>
    <div class="container" id="container">
         <?php $this->load->view("block/header");?><!--#header--> 
         <div id="content">
             <?php $this->load->view("block/top_menu");?><!--#top_menu--> 
             <?php $this->load->view($content);?><!--End content_right-->
        </div><!-- // #content -->
         <?php $this->load->view("block/footer");?><!--End footer-->   
   </div><!--#container--> 
</body>
</html>
 