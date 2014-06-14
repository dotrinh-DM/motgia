<?php foreach ($data as $value)
    ; ?>
<h4 class="widgettitle"> Được gửi từ: <b> <?php echo $value->email; ?> </b></h4>
<div class="widgetcontent">
    <form class="stdform" enctype="multipart/form-data" action="<?php echo site_url('admin/product_controller/insertProducts') ?>" method="post">
        <p>
            <label> Nội dung </label>
            <span class="field">
                <textarea id="autoResizeTA" cols="80" name="dieukien" rows="15" class="span5" style="resize: vertical">
                    <?php echo $value->content; ?>        
                </textarea>
            </span>
        </p>
        
        
        <p>
            <label> Trả lời </label>
            <span class="field"><input type="text" name="soluong" class="input-large" placeholder="<?php echo $value->email; ?>"/></span>
        </p>

        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook">Trả lời</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>