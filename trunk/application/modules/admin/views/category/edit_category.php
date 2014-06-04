<div style="margin-left: 300px;">
    <form id="form1" name="form1" method="post"
          action="<?php echo site_url('admin/category_controller/updateCategory'); ?> ">
        <input type="hidden" name="id" value="<?php echo $cate_name[0]->categoryID; ?>"/>
        <input type="hidden" name="idparent" value="<?php echo $cate_name[0]->category_parent; ?>"/>
        Vẫn chọn root cũ: <input type="radio" name="thuocloai" id="goc" value="2" checked/> |
        Chọn làm root: <input type="radio" name="thuocloai" id="cha" value="0"/> |
        Chọn làm con của:<input type="radio" name="thuocloai" id="con" value="1"/><br>
        <br><?php echo "<select name='danhmuc'>"; ?>
        <option value="">Vui lòng chọn</option>
        <?php
        selectCate($data);
        echo '</select>';
        ?><br>

        <br>
        Tên danh mục
        <br/>
        <label class="smallInput">
            <input type="text" name="txtcategory" size="28" value="<?php echo $cate_name[0]->category_name; ?>"/>
        </label>
        <br>


        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook">Submit Button</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>
</div>