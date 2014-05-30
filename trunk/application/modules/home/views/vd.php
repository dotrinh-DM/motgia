<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Simple Ajax Form</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <script>
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
//                popupshow();
                $('form').submit(function(event) { //Trigger on form submit
                    $('#name + .throw_error').empty(); //Clear the messages first
                    $('#success').empty();

                    var postForm = {//Fetch form data
                        'name': $('input[name=name]').val() //Store name fields value
                    };

                    $.ajax({//Process the form using $.ajax()
                        type: 'POST', //Method type
                        url: '<?php echo base_url(); ?>home/cusers/vd2', //Your form processing file url
                        data: postForm, //Forms name
                        dataType: 'json',
                        success: function(data) {

                            if (!data.success) { //If fails
                                if (data.errors.name) { //Returned if any error from process.php
                                    popupshow();
                                    $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                                }
                            } else {
                                $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message
                            }
                        }
                    });
                    event.preventDefault(); //Prevent the default submit
                });
            });
        </script>
        <style type="text/css">
            body
            {
                font-family: verdana;
                font-size: 15px;
            }
            a
            {
                color: #333;
                text-decoration: none;
            }
            a:hover
            {
                color: #ccc;
                text-decoration: none;
            }
            #mask
            {
                position: absolute;
                left: 0;
                top: 0;
                z-index: 9000;
                background-color: #000;
                display: none;
            }
            #boxes .window
            {
                position: absolute;
                left: 0;
                top: 0;
                width: 440px;
                height: 200px;
                display: none;
                z-index: 9999;
                padding: 20px;
            }
            #boxes #dialog
            {
                width: 375px;
                height: 203px;
                padding: 10px;
                background-color: #ffffff;
            }
            ul {
                font-family: Arial;
                list-style-type: none;
            }

            #success {
                display: none;
                font-family: Arial;
                color: green;
                margin-left: 85px;
                font-size: 14px;
            }

            input[type=text] {
                padding: 5px;
                box-shadow: inset 0 0 5px #eee;
                border: 1px solid #eee;
            }

            input[type=submit] {
                padding: 3px 8px;
                background: #eee;
                margin-left: 85px;
                cursor: pointer;
                border: 1px solid #aaa;
                font-size: 12px;
            }

            .throw_error {
                color:tomato;
                font-size: 12px;
                display: none;
            }

            label {
                font-size: 13px;
            } 
            body
            {
                font-family: verdana;
                font-size: 15px;
            }
            a
            {
                color: #333;
                text-decoration: none;
            }
            a:hover
            {
                color: #ccc;
                text-decoration: none;
            }
            #mask
            {
                position: absolute;
                left: 0;
                top: 0;
                z-index: 9000;
                background-color: #000;
                display: none;
            }
            #boxes .window
            {
                position: absolute;
                left: 0;
                top: 0;
                width: 440px;
                height: 200px;
                display: none;
                z-index: 9999;
                padding: 20px;
            }
            #boxes #dialog
            {
                width: 375px;
                height: 203px;
                padding: 10px;
                background-color: #ffffff;
            }
        </style>
        <script type="text/javascript">
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


            });

        </script>

    </head>
    <body>
            <h2>
                Simple jQuery Modal Window Examples
            </h2>
            <div id="boxes">
                <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
                    Simple Modal Window | <a href="#" class="close">Close it</a>
                </div>
                <div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask">
                </div>
            </div>

    <form method="post" name="postForm">
        <ul>
            <li>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
                <span class="throw_error"></span>
            </li>
        </ul>
        <input type="submit" value="Send" />
    </form>
    <div id="success"></div>
    
    
    <div id="boxes">
        <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
            Simple Modal Window | <a href="#" class="close">Close it</a>
        </div>
        <div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask">
        </div>
    </div>
</body>
</html>