<style>
    /** Tables (classified as "sTable") **/
    table.sTable {
        width:430px;
        margin:0 0 0 -10px; 
        border-collapse:collapse;
    }
    table.sTable td {
        border-top:1px solid #dfdfdf;
        text-align:center; 
        font-size:0.9em; 
        padding:5px 0; 
        margin:0; 
        color:#999;
    }
    table.sTable td:first-child {
        text-align:left; 
        padding:0 0 0 15px;
    }
    table.sTable tr.oddRow {
        background:url(images/bg_tableRow.gif) repeat-x 0px 1px;
    }

    td.firstCol a {
        color:#9aa685; 
        font-weight:bold;
    }
    td.firstCol a:hover {
        text-decoration:none;
    }
    td.secondCol a {
        color:#ab8617; 
        text-decoration:none; 
        border-bottom:1px solid #cbbb7c;
    }
    td.secondCol a:hover {
        border-bottom-color:#ab8617
    }

    td.editItem {
        width:120px;
    }
    td.editItem ul li {
        float:left;
        margin-right:13px; 
        padding-left:18px;
    }
    td.editItem ul li a {
        color:#666; 
        text-decoration:none; 
        display:block;
    }
    li.iconEdit {
        background:url(images/icon_edit.gif) no-repeat;
    }
    li.iconDel {
        background:url(images/icon_delete.gif) no-repeat 2px 3px;
    }
    a.deleteLink {
        color:#c04e1e; 
        text-decoration:none;
    }
    a.deleteLink:hover {
        text-decoration:underline;
    }
    ul li {list-style-type: none}
</style>
<div id="leftBox">
    <a href="<?php echo site_url('admin/category_controller/addForm') ?>">Add category</a>
    <hr />
    <div class="contentBox">
        <form action="<?php echo site_url('admin/category_controller/sortOrder'); ?>" method="POST">
            <div class="contentBoxTop">
                <h3><input type="submit" name="ook" value="Update order"/></h3>
            </div>
            <div class="innerContent">
                <table class="sTable" style="margin-left: 260px;">

                    <?php
                    show_cate($data);
                    ?>

                </table>
            </div><!--end of #box-3-->
        </form>
    </div>
    <hr />
</div><!-- end of #leftBox -->