<!DOCTYPE html>
<html>
<head>
<link href="/Siamang/assets2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="/Siamang/assets2/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="/Siamang/assets2/js/jquery-1.11.0.min.js"></script>
<link type="/Siamang/assets2/text/css" rel="stylesheet" href="css/colorfulTab.min.css">
<title>Detail Acara</title>
</head>
<body>
<!--header strat here-->
<div class="banner1 agileits">
  <div class="header">
    <div class="container">
      <div class="header-main">
        <div class="logo">
             <h1><span class="books"></span> <a href="/Siamang/home">SIAMANG</a></h1>
          </div>
         <div class="top-nav">
           <span class="menu"> <img src="assets2/images/icon.png" alt=""></span>  
             <nav class="cl-effect-21" id="cl-effect-21">                                   
              <ul class="res">
               <li><a href="/Siamang/home" class="active">Home</a></li>
                  <li><?php if(!isset($_SESSION['id_admin'])){ ?>
                      <div class="dropdown">
                        <button class="dropbtn active">Pencarian</button>
                        <div class="dropdown-content">
                        <a href="#modalLokasi" data-toggle="modal">Lokasi</a>
                        <a href="#modalGenre" data-toggle="modal">Genre</a>
                         <a href="/Siamang/pencarian/limateratas">5 Teratas</a>
                      </div>
                        </div>  <?php } ?>
                  </li>
                
                <li><?php if(isset($_SESSION['id_admin'])){ ?> 
                <a href="/Siamang/login/logout">Logout</a> 
                <?php }else{ ?>
                <a href="/Siamang/login">Login</a> 
                <?php } ?>
                </li>     
              </ul>
            </nav>
            <!-- script-for-menu -->
                     <script>
                       $( "span.menu" ).click(function() {
                       $( "ul.res" ).slideToggle( 300, function() {
                       // Animation complete.
                        });
                       });
                    </script>
            <!-- /script-for-menu -->
    
         </div>
        <div class="clearfix"> </div>
      </div>      
      </div>
   </div>
</div>
<!--header end here-->
<br>
<center><h2>Acara</h2></center>
<div class="container-fluid">

<?php 
      foreach($acara as $acara_key){ 
?>
<div class="row col-md-8 col-md-offset-2 custyle">
 
  <div class="panel panel-success">
    <div class="panel-heading">
      <b><?php echo $acara_key->nama_acara; ?></b>
    </div>
    <div class="panel-body">
      <center><img src="/Siamang/gambar/<?php echo $acara_key->gambar;?>"style="max-height: 500px"/></center><br>
      <p>Guest Star   : <?php echo $acara_key->gs;?></p><br>
      <p>Genre   : <?php echo $acara_key->genre;?></p><br>
      <p>Lokasi  : <?php echo $acara_key->lokasi;?></p><br>
      <p>Harga Tiket  : Rp<?php echo $acara_key->harga;?>,-</p><br>
      <p>Tanggal : <?php echo $acara_key->tanggal;?></p><br>
      <p>Deskripsi: <?php echo $acara_key->deskripsi;?></p><br>
      <p>Rating  : <?php echo $acara_key->rating;?></p>
    </div>
<?php } ?>

   
   
  </div>
</div>

 
<script>
$('.tombol').on("click", function(e){

 var id_acara = $(this).data('id_acara');
 var nama_acara = $(this).data('nama_acara');
 var genre = $(this).data('genre');
 var lokasi = $(this).data('lokasi');
 var harga = $(this).data('harga');
 var tanggal = $(this).data('tanggal');
 var deskripsi = $(this).data('deskripsi');
 var rating = $(this).data('rating');
 var gambar = $(this).data('gambar');
 var gs = $(this).data('gs');


 $(".id_acara").val(id_acara);
 $(".nama_acara").val(nama_acara);
 $(".genre").val(genre);
 $(".lokasi").val(lokasi);
 $(".harga").val(harga);
 $(".tanggal").val(tanggal);
 $(".deskripsi").val(deskripsi);
 $(".rating").val(rating);
 $(".gambar").val(gambar);
 $(".gs").val(gs);


})

</script>

<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: transparent;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropbtn {
    background-color: transparent;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: hsl(225, 100%, 65%);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: transparent;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: transparent;
}
</style>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/data.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>