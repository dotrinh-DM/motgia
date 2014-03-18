$(document).ready(function() {
    
//    $('#img1').bind('change click', function() {
//        var arr = ["image/x-png", "image/png", "image/jpeg"];
//        var size1 = this.files[0].size;
//        var type1 = this.files[0].type;
//        var name1 = this.files[0].name;
//        if ($.inArray(type1, arr) == -1) {
//            $("#noti-img1").html('<b>Xin lỗi  file ' + name1 + ' không đúng định dạng </b>');
//            end();
////            setTimeout(function(){ $("#noti-img1").hide(); }, 3000);
//        } else if (size1 > 1029000)
//        {
//            $("#noti-img1").html('<b>File ' + name3 + ' kích thước phải < 1mb</b>');
////            setTimeout(function(){ $("#noti-img1").hide(); }, 3000);
//        }
//    }
//    );
//
//    $('#img2').bind('change', function() {
//        var size2 = this.files[0].size;
//        var type2 = this.files[0].type;
//        var name2 = this.files[0].name;
//        if ($.inArray(type2, arr) == -1) {
//            $("#noti-img2").html('<b>Xin lỗi  file ' + name2 + ' không đúng định dạng </b>');
//            setTimeout(function(){ $("#noti-img2").hide(); }, 3000);
//        } else if (size2 > 1029000)
//        {
//            $("#noti-img2").html('<b>File ' + name3 + ' kích thước phải < 1mb</b>');
//            setTimeout(function(){ $("#noti-img2").hide(); }, 3000);
//        }
//    }
//    );
//
//    $('#img3').bind('change', function() {
//        var size3 = this.files[0].size;
//        var type3 = this.files[0].type;
//        var name3 = this.files[0].name;
//        if ($.inArray(type3, arr) == -1) {
//            $("#noti-img3").html('<b>Xin lỗi  file ' + name3 + ' không đúng định dạng </b>');
//            setTimeout(function(){ $("#noti-img3").hide(); }, 3000);
//        } else if (size3 > 1029000)
//        {
//            $("#noti-img3").html('<b>File ' + name3 + ' kích thước phải < 1mb</b>');
//            setTimeout(function(){ $("#noti-img3").hide(); }, 3000);
//        }
//    }
//    );

    $("#up_form").validate({
        rules: {
            soluong: {
                required: true,
                number: true

            },
            tensanpham: {
                required: true,
                minlength: 2,
                maxlength: 200
            },
            motangan: {
                required: true,
                minlength: 2
            },
            img1: {
                required: true
            },
            img2: {
                required: true
            },
            img3: {
                required: true
            }

        },
        messages: {
            soluong: "<strong>Bắt buộc và là số</strong>",
            tensanpham: "<b>Bắt buộc và tối thiểu 2 ký tự</b>",
            motangan: "<b>Bắt buộc và tối thiểu 2 ký tự</b>",
            img1: "<b>Bắt buộc</b>",
            img2: {
                required: "<b>Bắt buộc</b>"},
            img3: {
                required: "<b>Bắt buộc</b>"}
        }
    });
});