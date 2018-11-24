<!DOCTYPE html>
<html>
<head>
<link href="assets2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="assets2/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="assets2/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"/>
<link href='https://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="assets2/js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="assets2/css/flexslider.css" type="text/css" media="screen" />
<title>Home</title> 
</head>
<body>
<!--header strat here-->
<div class="banner agileits">
  <div class="header">
    <div class="container">
      <div class="header-main">
        <div class="logo">
             <h1><span class="books"></span> <a href="home">SIAMANG</a></h1>
          </div>
         <div class="top-nav">
           <span class="menu"> <img src="assets2/images/icon.png" alt=""></span>  
             <nav class="cl-effect-21" id="cl-effect-21">                        
                                <form action="login/aksi_login" method="post" class="form-inline">
                                  <div class="form-group">
                                    <label class="sr-only" >Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                  </div>
                                  <div class="form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                  </div>
                                  <button type="submit" class="btn btn-default">Log in</button>
                                </form>
                            
                        </nav>
                 </div>
                <div class="clearfix"> </div>
            </div>
            <div class="banner-main">
                 <section class="slider">
                     <div class="flexslider">
                        <ul class="slides">
                          <li>
                            <div class="banner-main" >             
                                   <h3>Selamat Datang di SIAMANG</h3>
                                <div class="clearfix"> </div>
                            </div>
                          </li>
                          <li>
                            <div class="banner-main" >

                                   <h3>Apa itu SIAMANG?</h3>
                                   <p>SIAMANG adalah singkatan dari Sistem Informasi Acara Musik Malang yang menyediakan berbagai informasi mnengenai konser musik yang ada di kota Malang</p>
                                <div class="clearfix"> </div>
                            </div>
                          </li>
                          <li>
                            <div class="banner-main">             
                                   <h3>Apa saja yang informasi yang disediakan pada SIAMANG?</h3>
                                   <p>Informasi mengenai acara musik, genre, lokasi, harga tiket dan tanggal pelaksanaannya</p>
                                <div class="clearfix"> </div>
                            </div>
                          </li>              
                        </ul>
                     </div>
                     <div class="clearfix"> </div>
            </section>  
         </div>
     </div>
   </div>
   <script defer src="assets2/js/jquery.flexslider.js"></script>
                  <script type="text/javascript">
                    $(function(){                
                    });
                    $(window).load(function(){
                      $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                          $('body').removeClass('loading');
                        }
                      });
                    });
                  </script>
   <!-- FlexSlider -->
<!--banner end here-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>