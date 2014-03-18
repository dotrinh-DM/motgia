$(document).ready(function() {
    $('.change').find('.onclick').click(function() {
        var $x = $(this).text();

        if ($x === "[ Sửa ]") {
            $(this).text("[ Xong ]");
            $(this).closest('.change').find('.change_open').show();
            $(this).closest('.change').find('.detail_profile').hide();
        } else {
            $(this).text("[ Sửa ]");
            $(this).closest('.change').find('.change_open').hide();
            $(this).closest('.change').find('.detail_profile').show();
        }
    });
    $('.change').find('.btn').click(function() {
       $(this).closest('.change').find('.onclick').text("[ Sửa ]");
      
        $(this).closest('.change').find('.change_open').hide();
        $(this).closest('.change').find('.detail_profile').show();
    });
});

