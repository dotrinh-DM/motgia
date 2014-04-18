<form method="post" name="message" action="#">

    <div class="post_content">
        <script type="text/javascript" src="<?php echo base_url() ?>tinymce/tiny_mce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
                // General options 
                mode: "textareas", //textareas, exact 
                theme: "advanced",
                plugins: "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,imagemanager",
                // Theme options 
                theme_advanced_buttons1: "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,fontsizeselect",
                theme_advanced_buttons2: "bullist,numlist,|,outdent,indent,blockquote,|link,unlink,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
                theme_advanced_buttons3: "|,sub,sup,|,charmap,emotions,iespell",
                theme_advanced_toolbar_location: "top",
                theme_advanced_toolbar_align: "left",
                theme_advanced_statusbar_location: "bottom",
                theme_advanced_resizing: true
            });
        </script>
        <div>
            <span>Người nhận:</span></br>
            <input type="text" name="receiver_message"/>
        </div>
        <div>
            <span>Tiêu đề:</span></br>
            <input type="text" name="title_message"/>
        </div>
        <div>
            <span>Nội dung:</span>
            <textarea class="content_add" name="content_message"></textarea>       
        </div>
        <div>
            <input type="submit" class="btn" name="send_message" value="Send"/>
        </div>
    </div>
</form>