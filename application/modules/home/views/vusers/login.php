<script type="text/javascript" src="<?php echo base_url() ?>template/js/popup.js"></script>
<style> 

</style>
<script type="text/javascript" language="JavaScript">
    function popupshow(param) {
        var id = '#dialog';
        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        //Set heigth and width to mask to fill up the whole screen
        $('#mask').css({'width': maskWidth, 'height': maskHeight});
        //transition effect
        $('#mask').fadeIn(1000);
        $('#mask').fadeTo("slow", 0.8);
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();
        //Set the popup window to center
        $(id).css('top', winH / 2 - $(id).height() / 2);
        $(id).css('left', winW / 2 - $(id).width() / 2);
        //transition effect
        $(id).fadeIn(2000);
        //if close button is clicked
        $('.window .close').click(function(e) {
            //Cancel the link behavior
            e.preventDefault();

            $('#mask').hide();
            $('.window').hide();
        });
        //if mask is clicked
        $('#mask').click(function() {
            $(this).hide();
            $('.window').hide();
        });
    }

    $(document).ready(function() {

//        $('.clockmess').append('10');
        $('#formlogin2').submit(function(event) { //Trigger on form submit
//            $('#name + .throw_error').empty(); //Clear the messages first
//            $('#success').empty();
            $('.headermess').empty();
            $('#contentmess').empty();
            var postForm = {//Fetch form data
                'email2': $('input[name=inputemail]').val(), //Store name fields value
                'pass2': $('input[name=inputpass]').val()
            };
            $('.clockmess').append('10');
            var sec = 5;
            $.ajax({//Process the form using $.ajax()
                type: 'POST', //Method type
                url: '<?php echo base_url(); ?>home/cusers/login', //gọi đến controller xử lý
                data: postForm, //truyền biến dưới dạng $_POST['ten bien']
                dataType: 'json',
                success: function(data) { // load lại trang sau 3 giay
                    if (!data.success) { //nếu controller trả về kết quả lỗi
                        if (data.errors.name) { //Lấy thông tin báo lỗi
                            popupshow();
                            //Dong ho dem nguoc
//                            var sec = 10;
                            var timer = setInterval(function() {
                                $('.clockmess').text(sec--);
                                if (sec == -2) {
                                    $('.clockmess').empty();
                                    $('.deltex').empty();
                                    $('#mask').hide();
                                    $('.window').hide();
                                    clearInterval(timer);
//                                    stop();
//                                    window.location.href = '<?php echo base_url() ?>'; 
                                }
                            }, 1000);

                            $('.headermess').fadeIn(1000).html('Sai tên truy nhập hoặc</br>mật khẩu!'); //chèn mã lỗi vào thẻ có class = throw_error
                            $('#contentmess').append('</br>\n\
                                                <span class="clockmess" style="font-size: 33pt;"><b>10</b></span><span class="deltex">s</span></br>\n\
                                                <span><a href="<?php echo base_url() ?>">Quên mật khẩu</a> / <a href="<?php echo base_url() ?>dang-ky">Đăng ký</a></span>');
                        }
                    } else {
//                        window.setTimeout(function() {
//                            location.reload(true)
//                        }, 3000);
                        popupshow();
                        sec = 3;
                        var timer = setInterval(function() {
                            $('.clockmess').text(sec--);
                            if (sec == -2) {
                                $('.clockmess').empty();
                                $('.deltex').empty();
                                $('#mask').hide();
                                $('.window').hide();
                                clearInterval(timer);
//                                    stop();
//                                    window.location.href = '<?php echo base_url() ?>'; 
                            }
                        }, 1000);
                        $('.headermess').fadeIn(1000).html('Đăng nhập thành công!'); //nếu thành công thì báo thành công
                        $('#contentmess').append('<span>Chào mừng trở lại ghé thăm siêu thị!</span>\n\
                           <span>Chúc bạn một ngày tốt lành!</span></br>\n\
                           <span class="clockmess" style="font-size: 33pt;"><b>3</b></span><span class="deltex">s</span>');
                        window.setTimeout(function() {
                            location.reload(true)
                        }, 3500);
                    }
                },
            });
            event.preventDefault(); //Prevent the default subm
        });
    });
</script>
<div id="popup_content" class="popup">
    <div class="popup-header">
        <h2>Tiêu Đề Popup</h2>
        <a class="close_popup" href="javascript:void(0)"></a>
        <p>Nội dung mô tả thêm cho tiêu đề (nếu có)</p>
    </div>
    <div class="info_popup">
        miendatwebPopup<br/>
        Phiên bản popup: 1.0<br/>
        Tác giả: Miền Đất Web<br/>
        Liên hệ: nguyentrungtinh29@gmail.com<br/>
        Ngày tạo: 22/07/2012
    </div>

</div>

<div id="success"></div>
<span class="throw_error"></span>
<div class="detail-login" name="formlogin">
    <form class="form clearfix" method="post" action="" id="formlogin2">
        <div class="gmail">
            <input type="email" required="" placeholder="Abc@gmail.com" name="inputemail" class="email2"/>
        </div>
        <div class="password">
            <input type="password" required="" placeholder="Mật Khẩu" name="inputpass"  class="pass2"/>
        </div>
        <div class="send">
            <input type="submit" value="Đăng Nhập" name="login" class="loginheader" href="#popup_content"/>
        </div>
    </form>
</div>
