<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.showmessage').live("click", function()
            {
                    $.ajax({ 
//                        type: "POST",
                        url: "<?php echo site_url('home/cusers/vd2'); ?>",
                        success: function(html) {
                            $("#messagecontent").append(html); 
                        }
                    });
                return false;
            });
    });
</script>

<button class="showmessage">check</button>
    <div id="messagecontent"></div>