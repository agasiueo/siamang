
<!DOCTYPE html>
<html>
<head>
<link href="/Siamang/assets2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="/Siamang/assets2/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/Siamang/assets2/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='https://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="/Siamang/assets2/js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="/Siamang/assets2/css/flexslider.css" type="text/css" media="screen" />
<title>Home</title> 
</head>
<body>
<!--header strat here-->
<div class="banner agileits">
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
   <!-- FlexSlider -->
<!--banner end here-->
<!--educate logos start here-->
<div class="tambah">
    <?php if(isset($_SESSION['id_admin'])){ ?> 
    <a href="#modalTambah" class="btn btn-primary pull-right" data-toggle="modal">Tambah Acara</a> 
    <?php }?>
</div>
<div class="educate">
    <div class="container">
        <div class="education-main">
            <ul class="ch-grid">
            <?php foreach ($acara as $acara_key) {?>
                 <a href="/Siamang/acara?id_acara=<?php echo $acara_key->id_acara; ?>">
                 <div class="col-md-3 w3agile">
                    <li>
                        <div class="ch-item">               
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-1">
                                    <span class="glyphicon glyphicon-grain" aria-hidden="true"> </span>
                                    <h5><?php echo $acara_key->nama_acara;  ?></h5>
                                </div>
                                <div class="ch-info-back">
                                    <!--<img src="gambar/<?php echo $acara_key->gambar; ?>"style="max-height: 100px"/> -->
                                    <h3><?php echo $acara_key->nama_acara;  ?></h3>
                                    <h3><?php echo $acara_key->gs;  ?></h3><br>
                                 </div>  
                            </div>
                        </div>
                    </li>
                    </div> 
                    </a>
                    <?php } ?>
                    <div class="clearfix"> </div>
             </ul>
         </div>
    </div>
</div>
<!-- Modal tambah acara -->
<div class="modal fade" id="modalTambah" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form role="form" action="acara/tambahAcara" method="post" class="form-group">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Masukkan Data</h4>
         </div>
         <div class="modal-body">
            <label>Nama acara :</label><input type="text" name="nama_acara" class="form-control" placeholder="Nama acara" required autofocus><br>
            <label>Guest Star :</label><input type="text" name="gs" class="form-control" placeholder="Guest Star" required autofocus><br>
             <label>Genre :</label>
            <select name="genre" class="form-control" required>
            <option disabled selected>-Pilih-</option>
                <option value="pop">Pop</option>
                <option value="jazz">Jazz</option>
                <option value="dangdut">Dangdut</option>
            </select><br>
            <label>Lokasi :</label>
            <select name="lokasi" class="form-control" required>
            <option disabled selected>-Pilih-</option>
                <option value="UMM DOME">UMM DOME</option>
                <option value="GRAHA CAKRAWALA">GRAHA CAKRAWALA</option>
                <option value="LEMBAH DIENG">LEMBAH DIENG</option>
            </select><br>
            <label>Harga :</label><input type="text" name="harga" class="form-control" placeholder="Harga tiket" required autofocus><br>
            <label>Tanggal :</label><input type="date" name="tanggal" class="form-control" placeholder="Tanggal" required autofocus><br>
            <label>Deskripsi :</label><input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi acara" required autofocus><br>
            <label>Rating</label><input type="text" name="rating" class="form-control" placeholder="Rating acara" required autofocus><br>
            <label>Gambar</label><input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus><br>


         </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
     <button class="btn btn-primary" type="submit">OK</button>
     </div>
  </div>
    </form>
</div>
</div>

<!-- Modal genre -->
<div class="modal fade" id="modalGenre" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form role="form" action="/Siamang/pencarian/pencarianGenre" method="post">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Pilih Genre</h4>
         </div>
         <div class="modal-body">
            <input type="radio" name="genre" value="pop"> Pop<br>
            <input type="radio" name="genre" value="jazz"> Jazz<br>
            <input type="radio" name="genre" value="dangdut"> Dangdut<br>
         </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
     <button class="btn btn-primary" type="submit">OK</button>
     </div>
  </div>
    </form>
</div>
</div>

<!-- Modal lokasi -->
<div class="modal fade" id="modalLokasi" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form role="form" action="/Siamang/pencarian/pencarianLokasi" method="post">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Pilih Lokasi</h4>
         </div>
         <div class="modal-body">
             <input type="radio" name="lokasi" value="UMM DOME"> UMM DOME<br>
            <input type="radio" name="lokasi" value="GRAHA CAKRAWALA"> Graha Cakrawala<br>
            <input type="radio" name="lokasi" value="LEMBAH DIENG"> Lembah Dieng<br>
         </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
     <button class="btn btn-primary" type="submit">OK</button>
     </div>
  </div>
    </form>
</div>
</div>
<!--educate logos end here-->

</div>
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
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: hsl(225, 100%, 60%, 0.8);
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

<script src="/Siamang/assets/js/jquery.min.js"></script>
<script src="/Siamang/assets/js/data.js"></script>
<script src="/Siamang/assets/js/bootstrap.min.js"></script>

</body>
</html>