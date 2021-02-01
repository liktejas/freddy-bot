<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Freddy Bot</title>
</head>
<body>


    <div class="container d-flex justify-content-center">
        <div class="card mt-5">
            <div id="card_content">
                <div class="d-flex flex-row justify-content-between p-3 adiv text-white"><span class="pb-3">Live Chat with Freddy Bot</span></div>
                <div class="d-flex flex-row p-3 bot_chat"> <img src="img/bot_small.jpg" class="bot_image">
                    <div class="chat ml-2 p-3">Hello I am Freddy, How can I help you ???<br><span class="date"></span></div>
                </div>
               

            </div>
            <div class="form-group textarea_style px-3 mt-3"> <textarea id="msg" class="form-control" rows="2" placeholder="Type your message"></textarea> <button class="btn btn-success ml-2 my-2" onclick="send_msg()"><i class="far fa-paper-plane"></i></button></div>
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $('.date').html(getdatetime());

    	function getdatetime() {
    		var d = new Date();
    		var hours = d.getHours();
    		var minutes = d.getMinutes();
    		var seconds = d.getSeconds(); 		
    		var date = d.getDate();
    		var month = new Array();
         month[0] = "01";
         month[1] = "02";
         month[2] = "03";
         month[3] = "04";
         month[4] = "05";
         month[5] = "06";
         month[6] = "07";
         month[7] = "08";
         month[8] = "09";
         month[9] = "10";
         month[10] = "11";
         month[11] = "12";
         var monthnum = month[d.getMonth()];
         var year = d.getFullYear();
         var datetime = date+'-'+monthnum+'-'+year+' '+hours+':'+minutes+':'+seconds;
         return datetime;
     }
    	// alert(getdatetime());
        function send_msg() {
            var msg = $('#msg').val();
            var html = '<div class="d-flex flex-row p-3 px-5 user_chat"><div class="bg-white mr-2 p-3"><span class="text-muted">'+msg+'</span><br><span class="date">'+getdatetime()+'</span></div> <img src="img/user.png" class="user_img"></div><br><br><br>';
            $('#card_content').append(html);
            // alert(txt);
            $('#msg').val('');
            if(msg)
            {
                $.ajax({
                    url: 'freddy_msg.php',
                    type: 'post',
                    data: 'msg='+msg,
                    success:function(result){
                        var html = '<div class="d-flex flex-row p-3 bot_chat"> <img src="img/bot_small.jpg" class="bot_image"><div class="chat ml-2 p-3">'+result+'<br><span class="date">'+getdatetime()+'</span></div></div>';
                        $('#card_content').append(html);
                        $('.card').scrollTop($('.card')[0].scrollHeight);
                    }
                })
            }
        }
        // $('#msg').keypress(function(e) {
        //     var key = e.which;
        //     if(key == 13)
        //     {
        //         var msg = $(this).val();
        //         alert(msg);
        //         $(this).val('');
        //     }
        // });
    </script>
</body>
</html>