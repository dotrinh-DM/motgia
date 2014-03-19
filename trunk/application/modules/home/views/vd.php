<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>jQuery Datepicker</title>
        <style type="text/css">@import "<?php echo base_url(); ?>template/css/datepick.css";</style>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.datepick.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#datePicker').datepick({
                    defaultDate: '26/08/1992',
                    yearRange: '1940:2014',
                    maxDate: '2014',
                    showTrigger: '<button type="button" class="trigger">' +
                            '<img src="<?php echo base_url(); ?>template/images/calendar-green.gif" alt="Popup"></button>',
                    renderer: $.extend({}, $.datepick.defaultRenderer,
                            {picker: $.datepick.defaultRenderer.picker.
                                        replace(/\{link:clear\}/, '{button:clear}').
                                        replace(/\{link:close\}/, '{button:close}')}),
                });
            });
        </script>
    </head>
    <body>
        <p>Chọn ngày: <input type="text" id="datePicker">
        </p>
        <div class="radio">
            <input type="radio" name="gender" id="1" value="0"/>Nam<br>
            <input type="radio" name="gender" id="2" value="1"/>Nữ
        </div>
    </body>

</html> 